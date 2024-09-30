<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>KONNET</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#FF50A2">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="android, ios, mobile, application template, progressive web app, ui kit, multiple color, dark layout, match, partner, perfect match, dating app, dating, couples, dating kit, mobile app">
    <meta name="description" content="Transform your dating app vision into reality with our 'Dating Kit' - a powerful Bootstrap template for mobile dating applications. Seamlessly integrate captivating features, stylish UI components, and user-friendly functionality. Launch your dating app efficiently and elegantly using the Dating Kit template.">
    <meta property="og:title" content="Dating Kit - Dating Mobile App Template ( Bootstrap + PWA )">
    <meta property="og:description" content="Transform your dating app vision into reality with our 'Dating Kit' - a powerful Bootstrap template for mobile dating applications. Seamlessly integrate captivating features, stylish UI components, and user-friendly functionality. Launch your dating app efficiently and elegantly using the Dating Kit template.">
    <meta property="og:image" content="https://datingkit.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('')}}/assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{url('')}}/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" class="main-css" type="text/css" href="{{url('')}}/assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @laravelPWA


</head>
<body class="bg-white overflow-hidden header-large" data-theme-color="color-primary-2">
<div class="page-wrapper">

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <div class="load-circle"><div></div><div></div></div>
        </div>
    </div>
    <!-- Preloader end-->

    <!-- Header -->
    <header class="header header-fixed border-0 style-2 bg-white">
        <div class="container">
            <div class="header-content">
                <div class="left-content header-logo logo-lg">
                    <a href="home">
                        <img src="{{url('')}}/assets/images/w3tinder/konnetlogolight.png" alt="">
                    </a>
                </div>
                <div class="mid-content">
                </div>
                <div class="right-content d-flex gap-2">
                    <a href="javascript:void(0);" class="filter-icon" data-bs-toggle="offcanvas" data-bs-target="#settingCanvas" aria-controls="offcanvasBottom">
                        <i class="flaticon flaticon-settings-sliders"></i>
                    </a>


                    <a href="javascript:void(0);" class="menu-toggler">
                        <i class="icon feather icon-grid"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header -->

    <!-- Sidebar -->
    <div class="dark-overlay"></div>
    @auth
        <div class="sidebar">
            <div class="inner-sidebar">
                <a href="#" class="author-box">
                    <div class="dz-media">
                        <img src="{{url('')}}/assets/images/w3tinder/slider/{{Auth::user()->image1}}" alt="author-image">
                    </div>
                    <div class="dz-info">
                        <h5 class="name">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h5>
                        <span>{{Auth::user()->email}}</span>
                    </div>

                </a>
                <ul class="nav navbar-nav">
                    <li>
                        <a class="nav-link active" href="home">
						<span class="dz-icon">
							<i class="icon feather icon-home"></i>
						</span>
                            <span>Home</span>
                        </a>
                    </li>
{{--                    <li>--}}
{{--                        <a class="nav-link" href="../package.html">--}}
{{--						<span class="dz-icon">--}}
{{--							<i class="icon feather icon-heart"></i>--}}
{{--						</span>--}}
{{--                            <span>W3Dating Package</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a class="nav-link" href="../package-list.html">--}}
{{--						<span class="dz-icon">--}}
{{--							<i class="icon feather icon-list"></i>--}}
{{--						</span>--}}
{{--                            <span>Package List</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a class="nav-link" href="../index.html">--}}
{{--						<span class="dz-icon">--}}
{{--							<i class="icon feather icon-wind"></i>--}}
{{--						</span>--}}
{{--                            <span>Welcome</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a class="nav-link" href="../components/components.html">--}}
{{--						<span class="dz-icon">--}}
{{--							<i class="icon feather icon-grid"></i>--}}
{{--						</span>--}}
{{--                            <span>Components</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a class="nav-link" href="setting.html">--}}
{{--						<span class="dz-icon">--}}
{{--							<i class="icon feather icon-settings"></i>--}}
{{--						</span>--}}
{{--                            <span>Settings</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a class="nav-link" href="profile.html">--}}
{{--						<span class="dz-icon">--}}
{{--							<i class="icon feather icon-user"></i>--}}
{{--						</span>--}}
{{--                            <span>Profile</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li>
                        <a class="nav-link" href="logout">
						<span class="dz-icon">
							<i class="icon feather icon-log-out"></i>
						</span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-bottom">
                    <ul class="app-setting">
                        <li>
                            <div class="mode">
							<span class="dz-icon">
								<i class="icon feather icon-moon"></i>
							</span>
                                <span>Dark Mode</span>
                                <div class="custom-switch">
                                    <input type="checkbox" class="switch-input theme-btn" id="toggle-dark-menu">
                                    <label class="custom-switch-label" for="toggle-dark-menu"></label>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="app-info">
                        <h6 class="name">KONNET</h6>
                        <span class="ver-info">V1.0</span>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="sidebar">
            <div class="inner-sidebar">

                <ul class="nav navbar-nav">

                    <a href="home">
                        <img  class="my-4" src="{{url('')}}/assets/images/w3tinder/konnetlogolight.png" alt="">
                    </a>

                    <li>
                                <a href="login1" class="mt-4 btn btn-lg btn-gradient w-100 dz-flex-box btn-shadow rounded-xl">Login</a>
                                <a href="login1" class="mt-3 btn  btn-lg btn-btn-primary w-100 my-2 dz-flex-box  rounded-xl">Register</a>

                    </li>


                </ul>
                <div class="sidebar-bottom">
                    <ul class="app-setting">
                        <li>
                            <div class="mode">
							<span class="dz-icon">
								<i class="icon feather icon-moon"></i>
							</span>
                                <span>Dark Mode</span>
                                <div class="custom-switch">
                                    <input type="checkbox" class="switch-input theme-btn" id="toggle-dark-menu">
                                    <label class="custom-switch-label" for="toggle-dark-menu"></label>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="app-info">
                        <h6 class="name">KONNET</h6>
                        <span class="ver-info">V1.0</span>
                    </div>
                </div>
            </div>
        </div>
    @endauth

    <!-- Sidebar End -->
    @yield('content')

</div>
<!--**********************************
    Scripts
***********************************-->
<script src="{{url('')}}/assets/js/jquery.js"></script>
<script src="{{url('')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('')}}/assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="{{url('')}}/assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script><!-- Swiper -->
<script src="{{url('')}}/assets/js/tinderSwiper.min.js"></script>
<script src="{{url('')}}/assets/vendor/wnumb/wNumb.js"></script><!-- WNUMB -->
<script src="{{url('')}}/assets/vendor/nouislider/nouislider.min.js"></script><!-- NOUSLIDER MIN JS-->
<script src="{{url('')}}/assets/js/noui-slider.init.js"></script><!-- NOUSLIDER MIN JS-->
<script src="{{url('')}}/assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="{{url('')}}/assets/js/settings.js"></script>
<script src="{{url('')}}/assets/js/custom.js"></script>
</body>
</html>

