<!DOCTYPE html>
<html lang="en">

{{-- Developed by Mcomps Limited | www.mcomps.co.ke | Contact us: Call/WhatsApp us on +254700106541 or Email us at
info@mcomps.co.ke--}}

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="County Government of busia website. We are United For Development through exemplary service delivery." />
    <meta name="keywords" content="busia, busia county, county, county government, " />
    <meta name="author" content="Mcomps Limited! - Software Development Company in Kenya" />
    <!-- set the page title -->
    <title>Page Not Found</title>
    <link href="{{asset('favicon.ico')}}" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <!-- inlcude google nunito sans font cdn link -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- inlcude google cabin font cdn link -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- include theme color setting stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/colors.css')}}">
    <!-- include the site responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    @livewireStyles
</head>

<body>
    <!-- pageWrapper -->
    <div id="pageWrapper">
        <!-- phStickyWrap -->
        @livewire('elements.header')
        <main>
            <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
                style="background-image: url(https://placehold.co/1920x300)">
                <div class="alignHolder d-flex w-100 align-items-center">
                    <div class="align w-100 position-relative">
                        <div class="container">
                            <h1 class="text-white mb-2">404 Error</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">404 Error</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <section class="py-8 py-md-15 py-xl-22 noFoundContentBlock">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-9 col-lg-6 col-xlwd-4 text-center">
                            <strong class="header-404 fontAlter d-flex align-items-center justify-content-center">
                                <h1>4</h1><img class="px-3" src="{{asset('assets/images/ico-stop.png')}}"
                                    alt="image description">
                                <h1>4</h1>
                            </strong>
                            <h2>Ohh! Page Not Found</h2>
                            <p>It looks like nothing was found at this location. Click the button below to return home.
                            </p>
                            <a href="/" class="btn btn-dark fwSemiBold position-relative border-0 p-0 minWidthMedium"
                                data-hover="Back to Home">
                                <span class="d-block btnText">Back to Home</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @livewire('elements.footer')
    </div>
    <!-- include jQuery library -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <!-- include custom JavaScript -->
    <script src="{{asset('assets/js/jqueryCustom.js')}}"></script>
    <!-- include plugins JavaScript -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!-- include fontAwesome -->
    <script src="https://kit.fontawesome.com/391f644c42.js"></script>
    @livewireScripts
</body>

{{-- Developed by Mcomps Limited | www.mcomps.co.ke | Contact us: Call/WhatsApp us on +254700106541 or Email us at
info@mcomps.co.ke--}}

</html>
