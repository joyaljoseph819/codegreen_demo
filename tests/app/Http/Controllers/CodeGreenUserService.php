<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\RegisterCreds;
use App\RegisterUser;

class CodeGreenUserService extends Controller
{
	//VIEW PROFILE
    function viewProfile(){
		$check_user = RegisterUser::where("username",session()->get('Auth.username'))
                        ->exists();
		if($check_user){
			$users = RegisterUser::where("username",session()->get('Auth.username'))
                        ->get();
			foreach($users as $user_details)
			{
				$user_name = $user_details->username;
				$user_email = $user_details->email;
				$user_dob = $user_details->dob;
				$user_city = $user_details->city;
			}			
			return view('codegreen.view_profile',compact('user_name','user_email','user_dob','user_city'));
		}
		else{
			$error_flag = 'true';
			return Redirect::to('/')->with(compact('error_flag'));
		}
	}
	//EDIT PROFILE
	function editProfile(){
		$check_user = RegisterUser::where("username",session()->get('Auth.username'))
                        ->exists();
		if($check_user){
			$users = RegisterUser::where("username",session()->get('Auth.username'))
                        ->get();
			foreach($users as $user_details)
			{
				$user_name = $user_details->username;
				$user_email = $user_details->email;
				$user_dob = $user_details->dob;
				$user_city = $user_details->city;
			}			
			return view('codegreen.edit_profile',compact('user_name','user_email','user_dob','user_city'));
		}
		else{
			$error_flag = 'false';
			return Redirect::to('/')->with(compact('error_flag'));
		}
	}
	function updateProfile(Request $update_data){		
		$update_creds = RegisterCreds::where("username",session()->get('Auth.username'))
											    ->update(['username'=>$update_data->username]);
		$update_user = RegisterUser::where("username",session()->get('Auth.username'))
											    ->update(['username'=>$update_data->username,'email'=>$update_data->email,'dob'=>$update_data->dob,'city'=>$update_data->city]);
												
		session()->flush();
		return Redirect::to('/');		
	}
	//CHANGE PASSWORD
	function editCredentials(){
		$check_user = RegisterUser::where("username",session()->get('Auth.username'))
                        ->exists();
		if($check_user){
			$users = RegisterUser::where("username",session()->get('Auth.username'))
                        ->get();
			foreach($users as $user_details)
			{
				$user_name = $user_details->username;
				$user_email = $user_details->email;
			}			
			return view('codegreen.credentials',compact('user_name','user_email'));
		}
		else{
			$error_flag = 'false';
			return Redirect::to('/')->with(compact('error_flag'));
		}
	}
	function updateCredentials(Request $update_data){		
		$update_pass = RegisterCreds::where("username",session()->get('Auth.username'))
											    ->update(['password'=>$update_data->password]);
		session()->flush();
		return Redirect::to('/');
	}
}
