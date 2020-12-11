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
        <section class="error">
            <div class="error__inner">
                <h1>404</h1>
                <h2>Oh no!! It was here somewhere...or is it was not here ever??</h2>
                <p>Are you sure you are supposed to be here??</p>
				<button class="btn btn-light btn--icon-text cursor_click" onclick="window.history.back();"><i class="zmdi zmdi-arrow-left"></i>Go Back</button>
            </div>
        </section>
        <script type="text/javascript" src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/popper.js/dist/umd/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
    </body>
</html>