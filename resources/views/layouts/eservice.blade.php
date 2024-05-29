<!doctype html>
<html lang="en">
{{-- Developed by Mcomps Limited | www.mcomps.co.ke | Contact us: Call/WhatsApp us on +254700106541 or Email us at
info@mcomps.co.ke--}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!-- Page Title -->
    <title>Busia Services</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/index.html">
    <link rel="preconnect" href="https://fonts.gstatic.com/index.html" crossorigin>
    <link
        href="https://fonts.googleapis.com/css234a1.css?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2dd7f.css?family=DM+Sans:opsz,wght@9..40,400;9..40,700&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Additional Plugins Styles -->
    <link rel="stylesheet" href="{{asset('e-services/css/vendors.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('e-services/css/bootstrap.css')}}">
    <!-- Site main stylesheet-->
    <link rel="stylesheet" href="{{asset('e-services/css/main.css')}}">
    @livewireStyles
</head>

<body>
    <!-- main container of all the page elements -->
    <div id="wrapper">
        <!-- <div class="page-loader">
			<div class="loader-animmte"></div>
			<div class="loader-logo">
				<img src="images/favicon.png" alt="Crypto Assassin">
			</div>
		</div> -->
        <!-- header of the page -->
        <header class="header header-theme-10">
            <div class="container">
                <strong class="logo">
                    <a href="{{route('eservices')}}">
                        <img class="normal-logo" src="{{asset('assets/images/logo.png')}}" width="175" height="43"
                            alt="Busia Pay">
                        <img class="sticky-logo" src="{{asset('assets/images/logo.png')}}" width="175" height="43"
                            alt="Busia Pay">
                    </a>
                </strong>
                <!-- main menu -->
                <div class="main-nav">
                    <a href="javascript:void(0);" class="nav-opener d-flex d-lg-none"><span></span></a>
                    <div class="nav-drop">
                        <a href="javascript:void(0);" class="nav-close d-flex d-lg-none"><span></span></a>
                        <!-- navigation -->
                        <ul class="navigation">
                            <li class="mega-menu active">
                                <a href="{{route('eservices')}}">Home</a>
                            </li>
                            <li><a href="#!">Help Desk</a></li>
                            <li class="text-login"><a href="#!">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- Visual of the page -->
        <div class="visual-block visal-theme-6 pt-120 pt-md-140 pt-xl-160 pb-20 pb-md-70"
            style="background-image: url('{{@asset('e-services/images/bg-visual-6.png')}}');">
            <div class="container position-relative">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-7 col-xl-6">
                        <!-- visual textbox -->
                        <div class="visual-textbox text-black">
                            <h1>Welcome to Busia County
                                eServices Portal.</h1>
                            <p>Access our services easily and quickly. Create an account and get to enjoy Busia County
                                services online.</p>
                            <div class="buttons-block pt-10 pb-30 pt-lg-50">
                                <button class="btn"><span>Login</span></button>
                                <button class="btn btn-gray"><span>Register</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-xl-6">
                        <div class="image-holder"><img src="{{asset('e-services/images/visual-image-6.png')}}"
                                alt="image"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contain main informative part of the site -->
        {{$slot}}

        <!-- footer of the page -->
        <footer class="footer footer-theme-10">
            <div class="pri-footer pt-35 pt-lg-70 pt-xl-90 pb-35 pb-md-20">
                <div class="container">
                    <div class="row mb-25 mb-md-40 mb-lg-60 mb-xl-100">
                        <div class="col-12">
                            <div class="call-to-action">
                                <div class="text-row">
                                    <img class="icon" src="{{asset('e-services/images/speaker.svg')}}" alt="icon">
                                    <strong class="heading">Enroll Your Business Now</strong>
                                    <p>Make payments easily and quickly. Create an account and get to enjoy paying for
                                        Busia County services online.</p>
                                </div>
                                <button class="btn btn-sm btn-orange" type="submit">
                                    <span class="btn-text">Start Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-footer text-black pt-35 pb-35">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-xl-6 mb-15 mb-xl-0">
                            <p>© {{date('Y')}}. {{config('app.name')}}. Powered by <a target="_/blank" class="site-link"
                                    href="https://mcomps.co.ke">Mcomps</a> All Rights
                                Reserved.</p>
                        </div>
                        <div class="col-12 col-xl-6">
                            <ul
                                class="social-networks no-bg d-flex flex-wrap justify-content-center justify-content-xl-end">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon-facebook-with-circle"></i>
                                        <span class="txt">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon-youtube"></i>
                                        <span class="txt">Youtube</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon-instagram"></i>
                                        <span class="txt">Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon-linkedin"></i>
                                        <span class="txt">Linked In</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/%40popperjs/core%402.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.min.js"></script>
    <!-- jQuery Library -->
    <script src="{{asset('e-services/js/jquery-3.6.4.min.js')}}"></script>
    <!-- jQuery Plugins -->
    <script src="{{asset('e-services/js/vendor.js')}}"></script>
    <!-- jQuery Main -->
    <script src="{{asset('e-services/js/jquery.main.js')}}"></script>
    @livewireScripts
</body>


{{-- Developed by Mcomps Limited | www.mcomps.co.ke | Contact us: Call/WhatsApp us on +254700106541 or Email us at
info@mcomps.co.ke--}}

</html>
