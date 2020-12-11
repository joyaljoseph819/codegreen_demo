<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/animate.css/animate.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.min.css')); ?>">
    </head>

    <body data-sa-theme="1">
        <div class="login">
            <div class="login__block active" id="login-div">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Please Enter OTP to Verify
                    <div class="actions actions--inverse login__block__actions login_tt" data-toggle="tooltip" data-placement="top" title="Click here to Resend OTP">
                        <div class="dropdown" id="clickhide">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
								<form id="resend_otp_form" action="resend_otp" method="post">
									<button type="submit" form="resend_otp_form" class="dropdown-item" href="#">Resend OTP</button>
									<?php echo e(@csrf_field()); ?>								
								</form>
                            </div>
                        </div>
                    </div>
                </div>				
				<div class="login__block__body">
					<form id="otp_form" action="otp_verify" method="post">
						<div class="form-group">
							<div id="otpDiv1">
								<div id="otpDiv2">
									<input type="text" name="otp" class="form-control otp" placeholder="0000" maxlength="4">
								</div>
							</div>							
							<?php echo e(@csrf_field()); ?>

						</div>					
					</form>
					<button type="submit" form="otp_form" class="btn btn--icon login__block__btn cursor_click"><i class="zmdi zmdi-check"></i></button>
				</div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo e(asset('assets/jquery/dist/jquery.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/popper.js/dist/umd/popper.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/app.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('js/login.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\wamp64\www\codegreen\resources\views/codegreen/otp.blade.php ENDPATH**/ ?>