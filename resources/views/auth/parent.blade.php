
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link rel="stylesheet" href="{{ asset('masuk/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-deep_purple.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="{{ asset('masuk/fonts/fontello/css/fontello.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('masuk/css/bootstrap-offset-right.css') }}">
    <link rel="stylesheet" href="{{ asset('masuk/css/style.css') }}">
    <title>KOAR | Login Page</title>
    <link rel="stylesheet" href="{{ asset('masuk/loginstyle.css') }}">
</head>
<body>
    <div class="container">
        <div class="center-block">
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 no-padding" style="z-index:1">
                <!-- Slider -->
                @include('auth.authslider')
                <!-- Slider -->
            </div>
            <!-- Login -->
            <div class="col-lg-6 col-lg-offset-right-1 col-md-6 col-md-offset-right-1 col-sm-12 col-xs-12 no-padding">
                <div class="mlt-content">
                    <ul class="nav nav-tabs">
                        <li><a href="#login" data-toggle="tab">Login</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="login">
                            <!--login form-->
                                @include('auth.loginform')
                            <!--login form-->
                        </div>
                    </div>
                </div>
                <!--Login-->
            </div>
            <!--center-block-->
        </div>
        <!--container-->
    </div>
    <script src="{{ asset('masuk/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('masuk/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('masuk/libs/mdl/material.min.js') }}"></script>
    <script src="{{ asset('masuk/http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js') }}"></script>
</body>

</html>