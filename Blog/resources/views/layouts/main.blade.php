<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('blog/main')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('blog/main')}}/css/animate.css">

    <link rel="stylesheet" href="{{asset('blog/main')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('blog/main')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('blog/main')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('blog/main')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('blog/main')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('blog/main')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('blog/main')}}/css/jquery.timepicker.css">


    <link rel="stylesheet" href="{{asset('blog/main')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('blog/main')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('blog/main')}}/css/style.css">
</head>
<body>
    <div id="colorlib-page">
        <aside id="colorlib-aside" role="complementary" class="js-fullheight img"
               style="background-image: url({{asset('blog/main')}}/images/sidebar-bg.jpg);">
            <h1 id="colorlib-logo" class="mb-4"></h1>
            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li class="colorlib-active"><a href="{{route('main.index')}}">Главная</a></li>
                    @guest()
                    <li><a href="{{route('main1.index')}}">Войти</a></li>
                    @endguest
                    @auth()
                        <li><a href="{{route('auth.logout')}}">Выйти</a></li>
                    @endauth
                    <li><a href="{{route('main.about')}}">Обо мне</a></li>
                </ul>
            </nav>
        </aside>
        @yield('posts')
    </div>
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#F96D00"/>
        </svg>
    </div>
    <script src="{{asset('blog/main')}}/js/jquery.min.js"></script>
    <script src="{{asset('blog/main')}}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{asset('blog/main')}}/js/popper.min.js"></script>
    <script src="{{asset('blog/main')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('blog/main')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{asset('blog/main')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('blog/main')}}/js/jquery.stellar.min.js"></script>
    <script src="{{asset('blog/main')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('blog/main')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('blog/main')}}/js/aos.js"></script>
    <script src="{{asset('blog/main')}}/js/jquery.animateNumber.min.js"></script>
    <script src="{{asset('blog/main')}}/js/scrollax.min.js"></script>
    <script src="{{asset('blog/main')}}/js/main.js"></script>
</body>
</html>
