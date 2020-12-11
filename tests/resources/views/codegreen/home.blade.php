<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/animate.css/animate.min.css">
        <link rel="stylesheet" href="assets/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="css/app.min.css">
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
                                <a class="col-4 app-shortcuts__item" href="#">
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
                                <div class="user__name">{{user_name}}</div>
                                <div class="user__email">{{user_email}}</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{logout}}">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="@@indexactive"><a href="{{home}}><i class="zmdi zmdi-home"></i> Home</a></li> 
                        <li class="@@calendaractive"><a href="{{view_profile}}"><i class="zmdi zmdi-account-box-mail"></i> View Profile</a></li>
                        <li class="@@calendaractive"><a href="{{edit_profile}}"><i class="zmdi zmdi-edit"></i> Edit Profile</a></li>
                        <li class="@@calendaractive"><a href="{{credentials}}"><i class="zmdi zmdi-swap"></i> Change Password</a></li>
                        <li class="@@calendaractive"><a href="{{logout}}"><i class="zmdi zmdi-sign-in"></i> Logout</a></li>
                    </ul>
                </div>
            </aside>

            <section class="content">
                <div class="content__inner">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="welcome-title">Welcome {{user_name}} to</h4>
                            <h6 class="welcome-subtitle">CodeGreen</h6>
                        </div>
                    </div>

                <footer class="credits hidden-xs-down">
                    <p>Designed with ❤️ by Joyal Joseph</p>
                </footer>
                </div>
            </section>
        </main>
        <script src="assets/jquery/dist/jquery.min.js"></script>
        <script src="assets/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="assets/jquery-scrollLock/jquery-scrollLock.min.js"></script>
        <script src="js/app.min.js"></script>
    </body>
</html>