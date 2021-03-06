<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/animate.css/animate.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/jquery.scrollbar/jquery.scrollbar.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.min.css')); ?>">
    </head>
    <body data-sa-theme="1">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>
            <header class="header">			
                <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>
                <div class="logo hidden-sm-down">
                    <h1><a href="#">CodeGreen</a></h1>
                </div>
                
                <ul class="top-nav">                    
                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                <a class="col-4 app-shortcuts__item" href="logout">
                                    <i class="zmdi zmdi-sign-in"></i>
                                    <small class="">Logout</small>
                                </a>                                
                            </div>
                        </div>
                    </li>
                </ul>
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">

                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name"><?php echo e($user_name ?? ''); ?></div>
                                <div class="user__email"><?php echo e($user_email ?? ''); ?></div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a href="logout" class="dropdown-item">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="@indexactive"><a href="view_profile"><i class="zmdi zmdi-account-box-mail"></i> View Profile</a></li>
                        <li class="@calendaractive"><a href="edit_profile"><i class="zmdi zmdi-edit"></i> Edit Profile</a></li>
                        <li class="@calendaractive"><a href="credentials"><i class="zmdi zmdi-swap"></i> Change Password</a></li>
                        <li class="@calendaractive"><a href="logout"><i class="zmdi zmdi-sign-in"></i> Logout</a></li>
                    </ul>
                </div>
            </aside>

            <section class="content">
                <div class="content__inner">
                    <div class="card widget-profile">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="img/profile-pics/profile-pic.jpg" class="widget-profile__img" alt="">
                                <h2 class="card-title"><?php echo e($user_name ?? ''); ?></h2>
                            </div>
                        </div>

                        <div class="widget-profile__list">
                            <div class="media">
                                <div class="avatar-char"><i class="zmdi zmdi-account"></i></div>
                                <div class="media-body">								
                                    <small>Username</small>
                                    <strong><?php echo e($user_name ?? ''); ?></strong>
                                </div>
                            </div>
							<div class="media">
                                <div class="avatar-char"><i class="zmdi zmdi-email"></i></div>
                                <div class="media-body">								
                                    <small>Email</small>
                                    <strong><?php echo e($user_email ?? ''); ?></strong>
                                </div>
                            </div>
                            <div class="media">
                                <div class="avatar-char"><i class="zmdi zmdi-calendar-alt"></i></div>
                                <div class="media-body">
                                    <small>D.O.B</small>
                                    <strong><?php echo e($user_dob ?? ''); ?></strong>
                                </div>
                            </div>
                            <div class="media">
                                <div class="avatar-char"><i class="zmdi zmdi-city-alt"></i></div>
                                <div class="media-body">
                                    <small>City</small>
                                    <strong><?php echo e($user_city ?? ''); ?></strong>
                                </div>
                            </div>
							<div class="media">
                               <br><br>
                            </div>
                        </div>
                    </div>

                <footer class="credits hidden-xs-down">
                    <p>Designed with ❤️ by Joyal Joseph</p>
                </footer>
                </div>
            </section>
        </main>
		<script type="text/javascript" src="<?php echo e(asset('assets/jquery/dist/jquery.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/popper.js/dist/umd/popper.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/jquery-scrollLock/jquery-scrollLock.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/app.min.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\wamp64\www\codegreen\resources\views/codegreen/view_profile.blade.php ENDPATH**/ ?>