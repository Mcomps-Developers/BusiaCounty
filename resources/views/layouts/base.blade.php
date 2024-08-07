<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

{{-- Developed by Mcomps Limited | www.mcomps.africa | Contact us: Call/WhatsApp us on +254700106541 or Email us at
info@mcomps.africa --}}

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="County Government of busia website. We are United For Development through exemplary service delivery." />
    <meta name="keywords" content="busia, busia county, county, county government, " />
    <meta name="author" content="Mcomps Limited! - Software Development Company in Kenya" />
    <!-- set the page title -->
    <title>@yield('title')</title>
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/vnd.microsoft.icon" />
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
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- include theme color setting stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}">
    <!-- include the site responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @livewireStyles
</head>

<body>
    <!-- pageWrapper -->
    <div id="pageWrapper">
        <!-- phStickyWrap -->
        @livewire('elements.header')
        {{ $slot }}
        <!-- ftAreaWrap -->
        @livewire('elements.footer')
    </div>
    <!-- include jQuery library -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- include custom JavaScript -->
    <script src="{{ asset('assets/js/jqueryCustom.js') }}"></script>
    <!-- include plugins JavaScript -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- include fontAwesome -->
    <script src="https://kit.fontawesome.com/391f644c42.js"></script>
    {{-- UserWay --}}
    <script src="https://cdn.userway.org/widget.js" data-account="lq0zxhGiPd"></script>
    <script src="https://cdn.tiny.cloud/1/pdov4xcmnreq2uxhpc4xszzus9qtsp88oke8twqeh6d55zmx/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/66ae48ef32dca6db2cb9a0a9/1i4ccpq2a';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    {{-- Translate --}}
    <script>
        $(document).ready(function() {
            $(document).on('click', '.dropdown-item', function() {
                var lang = $(this).data('lang');
                var url = "{{ route('change.lang') }}";
                window.location.href = url + "?lang=" + lang;
            });
        });
    </script>
    {{-- End Translate --}}
    @livewireScripts
</body>

{{-- Developed by Mcomps Limited | www.mcomps.africa | Contact us: Call/WhatsApp us on +254700106541 or Email us at
info@mcomps.africa --}}

</html>
