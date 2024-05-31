<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Site Main Stylesheet-->
    <link media="all" rel="stylesheet" href="{{ asset('e-services/css/theme-color.css') }}">
    <!-- Site Theme Colors Stylesheet-->
    <link media="all" rel="stylesheet" href="{{ asset('e-services/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('e-services/css/jobplugin.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('e-services/css/bootstrap.css') }}">
    <!-- Site main stylesheet-->
    <link rel="stylesheet" href="{{ asset('e-services/css/main.css') }}">
    <!-- Styles -->
    @livewireStyles
</head>

<body class="jobplugin">
    <div class="jobplugin__wrapper">
        <!-- Page Loader -->
        {{-- <div class="jobplugin__loader">
            <div class="jobplugin__loader-animmte"></div>
            <div class="jobplugin__loader-logo">
                <img src="images/favicon.png" alt="Crypto Assassin">
            </div>
        </div> --}}
        <!-- Header of the Page -->
        <header class="jobplugin__header">
            <div class="jobplugin__container">
                <div class="jobplugin__header-holder">
                    <div class="jobplugin__header-left">
                        <!-- Logo of the Site -->
                        <strong class="jobplugin__header-logo">
                            <a href="javascript:void(0);">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Remote Jobs">
                            </a>
                        </strong>
                    </div>
                    <div class="jobplugin__header-right">
                        <div class="jobplugin__navigation">
                            <!-- Header Authentication Buttons -->
                            <div class="jobplugin__header-buttons">
                                <a href="{{ route('login') }}"
                                    class="jobplugin__button button-white jobplugin__text-primary hover:jobplugin__bg-primary hover:jobplugin__text-white">Login</a>
                                <a href="{{ route('register') }}"
                                    class="jobplugin__button jobplugin__bg-primary hover:jobplugin__bg-secondary">Create
                                    Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Contain Main informative part of the Site -->
        {{ $slot }}
        <!-- Footer of the Page -->
        <footer class="footer footer-theme-10">
            <div class="pri-footer pt-35 pt-lg-70 pt-xl-90 pb-35 pb-md-20">
                <div class="container">
                    <div class="row mb-25 mb-md-40 mb-lg-60 mb-xl-100">
                        <div class="col-12">
                            <div class="call-to-action">
                                <div class="text-row">
                                    <img class="icon" src="{{ asset('e-services/images/speaker.svg') }}"
                                        alt="icon">
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
            <div class="text-black sec-footer pt-35 pb-35">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-xl-6 mb-15 mb-xl-0">
                            <p>© {{ date('Y') }}. {{ config('app.name') }}. Powered by <a target="_/blank"
                                    class="site-link" href="https://mcomps.co.ke">Mcomps</a> All Rights
                                Reserved.</p>
                        </div>
                        <div class="col-12 col-xl-6">
                            <ul
                                class="flex-wrap social-networks no-bg d-flex justify-content-center justify-content-xl-end">
                                <li>
                                    <a href="javascript:void(0);">

                                        <span class="txt">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">

                                        <span class="txt">Youtube</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">

                                        <span class="txt">Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">

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
    <!-- jQuery Library -->
    <script src="{{ asset('e-services/js/jquery-3.6.4.min.js') }}"></script>
    <!-- jQuery Plugins File -->
    <script src="{{ asset('e-services/js/jquery-3.6.4.min.js') }}"></script>
    <!-- jQuery Functions JS File -->
    <script src="{{ asset('e-services/js/jquery-3.6.4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/youverify-web-sdk/dist/index.js"></script>
    @livewireScripts
</body>

</html>
