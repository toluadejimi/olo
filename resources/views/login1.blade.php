<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Konnet - wey sure</title>


    @laravelPWA


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('')}}/assets/images/favicon.png">

    <!-- Globle Stylesheets -->
    <link href="{{url('')}}/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" class="main-css" type="text/css" href="{{url('')}}/assets/css/style.css">
    <!-- <link rel="stylesheet" class="skin-css" type="text/css" href="{{url('')}}/assets/css/skin/skin-2.css"> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body class="bg-white"  data-theme-color="color-primary-2">
<div class="page-wrapper">
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <div class="load-circle"><div></div><div></div></div>
        </div>
    </div>
    <!-- Preloader end-->

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif


            <form action="login-now" method="POST">
                @csrf

                <div class="account-area style-2">
                    <a href="javascript:void(0);" class="back-btn">
                        <i class="icon feather icon-arrow-left"></i>
                    </a>
                    <div class="section-head ps-0">
                        <h2>Enter your email</h2>
                    </div>
                    <div class="dz-contact">
                        <div class="mb-0 input-group input-mini">
                            <span class="input-group-text"> <i  class="text-primary bi bi-envelope-heart-fill"></i></span>
                            <input type="email"  name="email" class="form-control" required placeholder="jonny@email.com">
                        </div>
                    </div>
                </div>

                <div class="footer fixed bg-white p-b15">
                    <div class="container">
                        <button type="submit" class="btn btn-lg btn-gradient w-100 dz-flex-box btn-shadow rounded-xl">Next</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
    <!-- Page Content End -->
    <!-- Footer -->

    <!-- Footer -->
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="{{url('')}}/assets/js/jquery.js"></script>
<script src="{{url('')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('')}}/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{url('')}}/assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="{{url('')}}/assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="{{url('')}}/assets/js/settings.js"></script>
<script src="{{url('')}}/assets/js/custom.js"></script>
</body>
</html>
