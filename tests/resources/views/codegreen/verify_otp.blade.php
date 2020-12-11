<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/animate.css/animate.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.min.css') }}">
    </head>

    <body data-sa-theme="1">
        <div class="login">
            <div class="login__block active" id="login-div">
                <div class="login__block__header">
                    <i class="zmdi zmdi-shield-security"></i>
                    <span id="otp_send">OTP Sent to your Mail</span>					
					<span id="otp_error" class="alert_tooltip center_tt {{session('otp_tt') ?? ''}}">Incorrect OTP</span>
                    <div class="actions actions--inverse login__block__actions login_tt" data-toggle="tooltip" data-placement="top" title="Click here to Resend OTP">
                        <div class="dropdown" id="clickhide">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
								<form id="resend_otp_form" action="resend_otp" method="post">
									<button type="submit" form="resend_otp_form" class="dropdown-item" href="#">Resend OTP</button>
									{{@csrf_field()}}								
								</form>
                            </div>
                        </div>
                    </div>
                </div>				
				<div class="login__block__body">
					<form id="otp_form" action="verify_otp" method="post">
						<div class="form-group">
							<div id="otpDiv1">
								<div id="otpDiv2">
									<input type="text" data-mask="0000" name="otp" class="form-control otp input-mask" placeholder="0000" autocomplete="off" maxlength="4">
								</div>
							</div>							
							{{@csrf_field()}}
						</div>					
					</form>
					<button type="submit" form="otp_form" class="btn btn--icon login__block__btn cursor_click"><i class="zmdi zmdi-check"></i></button>
				</div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/jquery/dist/jquery.mask.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/popper.js/dist/umd/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
		<script>
			(function (){
				function toggle_notify_delay(){
					$("#otp_send").html("Please Enter OTP to Verify");
						setTimeout(toggle_notify,3500);	
				}
				function toggle_notify(){
					$("#otp_send").html("OTP Sent to your Mail");
					setTimeout(toggle_notify_delay,1500);	
				}
				toggle_notify();
				setTimeout(change,2500);
				function change(){
					$("#otp_error").html('Please Try Again');
					setTimeout(remove,2500);
				}
				function remove(){
					$(".tt_show").removeClass('tt_show');
				}
			}());
		</script>
    </body>
</html>