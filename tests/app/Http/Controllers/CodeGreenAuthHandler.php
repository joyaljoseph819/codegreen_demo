<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\RegisterUser;
use App\RegisterCreds;
use App\OTPverify;
use Illuminate\Database\QueryException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class CodeGreenAuthHandler extends Controller
{
	//Root View
	function viewRoot(){		
		if(session()->exists('Auth.username')){
			return Redirect::intended('view_profile');	
		}
		else{
			session()->forget('Auth.username');
			return view('codegreen.login');
		}
	}
	//LOGIN
	function getLoginCred(Request $creds){		
		$check_login = RegisterCreds::where("username",$creds->username)
							->where("password",$creds->password)
							->exists();
		if($check_login){
			$creds->session()->put('Auth.username',$creds->username);
			$creds->session()->forget('userDetails');
			return Redirect::intended('view_profile');	
		}
		else{
			session()->put('authFailed.status','tt_show');
			$failed_username = $creds->username;
			return Redirect::to('/');
		}
	}
	//LOGOUT
	function logOut(){			
		session()->flush();
		return Redirect::to('/');
	}
	function viewOTP(){
		if (session()->exists('userDetails')){
			return view('codegreen.verify_otp');
		}
		else{
			$error_flag = 'false';
			return view('codegreen.login',compact('error_flag'));
		}		
	}
	//Email OTP to User
	function SMTP($what){
			$username = session()->get('userDetails.username');
			$toAddress = session()->get('userDetails.email');
			$otp = mt_rand(1000, 9999);
			try{
					if($what=="insert"){
						$otp_verify = new OTPverify;
						$otp_verify->username=$username;
						$otp_verify->otp=$otp;
						$otp_verify->save();	
					}
					else{
						$otp_verify = OTPverify::where("username",session()->get('userDetails.username'))
											    ->update(['otp'=>$otp]);	
					}
			}
			finally{
				$mail_msg = "Welcome ".$username.", <br><br><br>Your OTP for verification is ".$otp."<br><br><br>Thanks for using CodeGreen. Have a Nice Day!!<br><br>Best Regards,<br>Joyal Joseph"; 
				$mail = new PHPMailer(true);
				try {
					$mail->isSMTP();
					$mail->CharSet = "utf-8";
					$mail->SMTPAuth = true;
					$mail->SMTPSecure = "tls";
					$mail->Host = "";
					$mail->Port = 587;
					$mail->Username = "";
					$mail->Password = "";
					$mail->setFrom("", "");
					$mail->Subject = "";
					$mail->MsgHTML($mail_msg);
					$mail->addAddress($toAddress, $username);
					$mail->send();
				} catch (phpmailerException $e) {
					dd($e);
				} catch (Exception $e) {
					dd($e);
				} finally{
					return true;
				}
			}
	}
	function emailOTP(Request $details){
		$details->session()->put('userDetails',$details->input());
		$check_user = RegisterUser::where("username",session()->get('userDetails.username'))
                        ->exists();
		$check_otp = OTPverify::where("username",session()->get('userDetails.username'))
                        ->exists();
		if(!$check_user&&!$check_otp){	
			if($this->SMTP('insert')){
				return Redirect::to('verify_otp');
			}
		}
		else{
			session()->put('error.flag','true');
			session()->put('error.code','1062');
			return Redirect::to('/');
		}
	}
	//Resend OTP to User
	function resendOTP(){
		if($this->SMTP('update')){
			return Redirect::to('verify_otp');
		}
	}
	//Confirm OTP Verification
	function confirmOTP(Request $data){
		$otp = $data->otp;
		try{			
			$verified = OTPverify::where("username",session()->get('userDetails.username'))
                        ->where("otp",$otp)
                        ->exists();
			if($verified){		
				$delete_otp = OTPverify::where("username",session()->get('userDetails.username'))
                        ->delete();
				//Insert New User Details To DB				
				try{			
					$user_creds = new RegisterCreds;
					$user_creds->username=session()->get('userDetails.username');
					$user_creds->password=session()->get('userDetails.rpassword');
					$user_creds->save();
					
					$user_details = new RegisterUser;
					$user_details->username=session()->get('userDetails.username');
					$user_details->email=session()->get('userDetails.email');
					$user_details->dob=session()->get('userDetails.dob');
					$user_details->city=session()->get('userDetails.city');
					if($user_details->save()){
						session()->put('Auth.username',session()->get('userDetails.username'));	
						session('userDetails');
						session()->forget('userDetails');
						$delete_otp = OTPverify::where("username",session()->get('userDetails.username'))
                        ->delete();
						return Redirect::route('view_profile');
					}
				}
				catch(QueryException $e){
					if($e->errorInfo[1] == 1062){
						$error_flag = 'true';
						$error_code = $e->errorInfo[1];
						return view('codegreen.login',compact('error_flag','error_code'));
					}
				}				
			}
			else{
				session()->put('otp_tt','tt_show');
				return Redirect::route('otp');
			}
		}
		catch(QueryException $e){
			if($e->errorInfo[1] == 1062){
				$error_flag = 'true';
				$error_code = $e->errorInfo[1];
				return view('codegreen.login',compact('error_flag','error_code'));
			}
		}
	}	
}