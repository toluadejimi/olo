<!DOCTYPE html>
<html lang="en">
<head>

    <title>KONNET</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#FF50A2">
    <meta name="author" content="Konnet">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Konnet with clean confirm babes">
    <meta name="description" content="Best connection platform">
    <meta property="og:title" content="Konnet with clean babes">
    <meta property="og:description" content="Best connection platform.">
    <meta property="og:image" content="{{url('')}}/assets/images/pwa/512.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('')}}/assets/images/favicon.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{url('')}}/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" class="main-css" type="text/css" href="{{url('')}}/assets/css/style.css">

    <!-- Animte -->
    <link rel="stylesheet" href="{{url('')}}/assets/vendor/wow/css/libs/animate.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @laravelPWA


    {{--    <link rel="manifest" href="{{url('')}}/assets/manifest.json">--}}
{{--    <meta name="theme-color" content="#007bff">--}}
{{--    <script>--}}
{{--        if ('serviceWorker' in navigator) {--}}
{{--            navigator.serviceWorker.register('/serviceworker.js')--}}
{{--                .then(function(registration) {--}}
{{--                    console.log('Service Worker registered with scope:', registration.scope);--}}
{{--                }).catch(function(error) {--}}
{{--                console.log('Service Worker registration failed:', error);--}}
{{--            });--}}
{{--        }--}}
{{--    </script>--}}


</head>
<body class="bg-white">
<div class="page-wrapper">
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <div class="load-circle"><div></div><div></div></div>
        </div>
    </div>
    <!-- Preloader end-->

    <!-- Welcome Start -->
    <div class="content-body">
        <div class="welcome-area bg-image">
            <div class="welcome-inner">
                <div class="dz-media">
                    <img src="{{url('')}}/assets/images/onboarding/onboarding.png" alt="">
                </div>
                <div class="swiper get-started">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-info">
                                <div class="started">
                                    <h2 class="title mb-1">Start Your Dating Story</h2>
                                    <p>Your companion for meaningful connections</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-info">
                                <div class="started">
                                    <h2 class="title mb-1">Begin Your Chapter of Love</h2>
                                    <p>Embrace the dating world armed with tools and support</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-info">
                                <div class="started">
                                    <h2 class="title mb-1">Your Journey of Connection</h2>
                                    <p>Explore essentials and delights that boost confidence</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-btn">
                        <div class="swiper-pagination style-1 flex-1"></div>
                    </div>
                </div>



            </div>
            <div class="bottom-btn container">
                <a href="login1" class="btn btn-lg btn-gradient w-100 dz-flex-box btn-shadow rounded-xl">Get Started</a>
                <a href="home" class="btn btn-lg btn-btn-secondary w-100 my-2 dz-flex-box btn-shadow rounded-xl">Skip</a>

            </div>


        </div>
    </div>
    <!-- Welcome End -->

</div>
<!--**********************************
    Scripts
***********************************-->
<script src="{{url('')}}/assets/js/jquery.js"></script>
<script src="{{url('')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('')}}/assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="{{url('')}}/assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="{{url('')}}/assets/vendor/wow/dist/wow.min.js"></script>
<script src="{{url('')}}/assets/js/settings.js"></script>
<script src="{{url('')}}/assets/js/custom.js"></script>
<script>
    new WOW().init();

    var wow = new WOW(
        {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       50,          // distance to the element when triggering the animation (default is 0)
            mobile:       false       // trigger animations on mobile devices (true is default)
        });
    wow.init();
</script>
</body>
</html>
