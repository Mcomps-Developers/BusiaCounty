<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="{{ asset('e-services/fonts.googleapis.com/index.html') }}">
    <link rel="preconnect" href="{{ asset('e-services/fonts.gstatic.com/index.html') }}" crossorigin>
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
                            <a href="{{ route('eservices') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Remote Jobs">
                            </a>
                        </strong>
                    </div>
                    <div class="jobplugin__header-right">
                        <div class="jobplugin__navigation">
                            <!-- Header Authentication Buttons -->
                            <div class="jobplugin__header-buttons">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ route('logout') }}"
                                            class="jobplugin__button jobplugin__bg-primary hover:jobplugin__bg-secondary"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="jobplugin__button button-white jobplugin__text-primary hover:jobplugin__bg-primary hover:jobplugin__text-white">Login</a>
                                        <a href="{{ route('register') }}"
                                            class="jobplugin__button jobplugin__bg-primary hover:jobplugin__bg-secondary">Create
                                            Account</a>
                                    @endauth
                                @endif

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
    <script src="{{ asset('e-services/js/vendor.js') }}"></script>
    <!-- jQuery Functions JS File -->
    <script src="{{ asset('e-services/js/jquery.main.js') }}"></script>
    @livewireScripts
</body>

</html>
