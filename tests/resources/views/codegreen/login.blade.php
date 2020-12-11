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
                    <i class="zmdi zmdi-account-circle"></i>
                    Please Sign-In to Continue
                    <div class="actions actions--inverse login__block__actions login_tt" data-toggle="tooltip" data-placement="top" title="Want a new account?Click Here...">
                        <div class="dropdown" id="clickhide">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" id="caabtn" href="#">Create an account</a>
                            </div>
                        </div>
                    </div>
					<span id="center_tt" class="alert_tooltip center_tt {{session('authFailed.status') ?? ''}}" style="">Invalid Username or Password</span>
                </div>				
				<div class="login__block__body">
					<form id="login_form" action="postCred" method="post">
						<div class="form-group">
							<input type="text" name="username" id="username" class="form-control text-center" placeholder="Username">
								<span id="lu_error" class="alert_tooltip">Enter Username</span>
							{{@csrf_field()}}
						</div>
	
						<div class="form-group"> 
							<input type="password" name="password" id="password" class="form-control text-center" placeholder="Password">
								<span id="lp_error" class="alert_tooltip">Enter Password</span>
						</div>						
					</form>
					<button onclick="validate_login()" class="btn btn--icon login__block__btn cursor_click"><i class="zmdi zmdi-lock-open"></i></button>
				</div>
            </div>
            <div class="login__block" id="register">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Create an account

                    <div class="actions actions--inverse login__block__actions register_tt" data-toggle="tooltip" data-placement="top" title="Already have an account?Click Here...">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" id="ahaabtn" href="#">Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
					<form id="register_form" action="login" method="post">
						<div class="form-group">
						{{@csrf_field()}}
							<input type="text" name="username" id="rusername" class="form-control text-center" placeholder="Username">
								<span id="u_error" class="alert_tooltip">Enter Username</span>
						</div>
	
						<div class="form-group form-group--centered">
							<input type="text" name="email" id="email" class="form-control text-center" placeholder="Email Address">
								<span id="e_error" class="alert_tooltip">Enter Email Address</span>
								<span id="ve_error" class="alert_tooltip">Not a valid Email Address</span>
						</div>
						
						<div class="form-group form-group--centered">
							<input type="text" name="dob" id="dob" class="form-control text-center input-mask" data-mask="00-00-0000" placeholder="D.O.B" autocomplete="off" maxlength="10">
								<span id="d_error" class="alert_tooltip">Enter D.O.B</span>
								<span id="dob_error" class="alert_tooltip">Not a valid Date</span>
						</div>
						
						<div class="form-group form-group--centered">
							<input type="text" name="city" id="city" class="form-control text-center" placeholder="City">
								<span id="c_error" class="alert_tooltip">Enter City</span>
						</div>
	
						<div class="form-group form-group--centered">
							<input type="password" name="rpassword" id="rpassword" class="form-control text-center" placeholder="Password">
								<span id="p_error" class="alert_tooltip">Enter Password</span>
						</div>
	
						<div class="form-group form-group--centered">
							<input type="password" name="rcpassword" id="rcpassword" class="form-control text-center" placeholder="Confirm Password">
								<span id="cp_error" class="alert_tooltip">Enter Password Again</span>
								<span id="pdm_error" class="alert_tooltip">Passwords do not match</span>
						</div>
					</form>
                    <button onclick="validate_register()" class="btn btn--icon login__block__btn cursor_click"><i class="zmdi zmdi-plus"></i></button>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/jquery/dist/jquery.mask.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/popper.js/dist/umd/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/validation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>		
		<script>
			if({{ session('error.flag') ?? '' }}=='true'){
				alert('cad');
				switch(session('error.code') ?? '' }}){
					case '1062':
						caaActivate();
					break;
				}
			}
		</script>
    </body>
</html>