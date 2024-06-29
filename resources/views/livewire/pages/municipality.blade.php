<main>
    @section('title')
        {{ $municipality->name }} Municipality
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">Municipalities</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Municipalities</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize">
                                {{ $municipality->name }} Municipality</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <article class="pb-2 dsSingleContent pt-7 pt-md-10 pb-md-1 pt-lg-16 pb-lg-10 pt-xl-21 pb-xl-16">
        <div class="container">
            <div class="row">
                <div class="mb-6 col-12 col-lg-8 col-xl-9 order-lg-2">
                    <div class="pl-xl-14">
                        <header class="fzMedium mb-9">
                            <h2 class="fwSemiBold h2vii">{{ $municipality->name }} Municipality</h2>
                            {!! $municipality->content !!}
                        </header>
                    </div>
                </div>
                <div class="mb-6 col-12 col-lg-4 col-xl-3 order-lg-1">
                    <aside class="pt-1 dscSidebar mr-xl-n5">
                        <nav class="px-6 py-5 mb-6 widget mb-lg-10 widgetDepartsNav widgetBgLight">
                            <h3 class="mb-4 fwSemiBold">
                                <a href="javascript:void(0);" class="mr-1 align-middle btnDcsBack"><i
                                        class="fas fa-chevron-left"><span class="sr-only">icon</span></i></a>
                                Municipalities
                            </h3>
                            <ul class="pl-0 mb-0 mb-3 list-unstyled mx-n2">
                                @foreach ($mucipalities as $item)
                                    <li class="{{ request()->route('slug') === $item->slug ? 'active' : '' }}">
                                        <a href="{{ route('municipality', ['slug' => $item->slug]) }}"
                                            style="text-transform: capitalize">{{ $item->slug }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                        <div class="px-6 pt-5 pb-8 mb-6 widget mb-lg-10 widgetHelp bg-lDark position-relative">
                            <i class="mb-3 text-white icnWrap icomoon-chatq d-block"><span
                                    class="sr-only">icon</span></i>
                            <h3 class="mb-2 text-white h3Medium">Need any help?</h3>
                            <p>Here you can get your perfect answer for your problem.</p>
                            <a href="{{ route('contact') }}"
                                class="p-0 border-0 btn btnTheme btn-sm font-weight-bold text-capitalize position-relative"
                                data-hover="Contact now">
                                <span class="d-block btnText">Contact now</span>
                            </a>
                            <i class="whWatermarkIcn icomoon-helpc position-absolute"><span
                                    class="sr-only">icon</span></i>
                        </div>
                    </aside>
                </div>
            </div>

            <section class="pt-3 pb-6 meetCouncilBlock noOverlay position-relative pt-md-4 pt-lg-6 pt-xl-11 pb-lg-10">
                <div class="container">
                    <header class="text-center headingHead cdTitle mb-7 mb-md-13">
                        <h2 class="mb-4 fwSemiBold">Board Members</h2>
                        <p>Meet the municipality leadership team.</p>
                    </header>
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                <div class="imgHolder position-relative">
                                    <img src="https://placehold.co/295x295" class="img-fluid d-block w-100"
                                        alt="image description">
                                    <div class="mcssHolder">
                                        <ul
                                            class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Twitter"><i
                                                        class="vssIcn fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Facebook"><i
                                                        class="vssIcn fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Linkedin"><i
                                                        class="vssIcn fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="px-5 pt-5 pb-4 mcCaptionWrap position-relative">
                                    <h3 class="mb-1 fwMedium h3Small">Name Here</h3>
                                    <h4 class="fwSemiBold fontBase text-secondary">Position Here
                                    </h4>
                                    <hr class="mx-0 mt-4 mb-3 mccSeprator">
                                    <ul class="list-unstyled mccInfoList">
                                        <li>
                                            <a href="mailto:example@domain.com">
                                                <i class="mr-1 fas fa-envelope icn"><span
                                                        class="sr-only">icon</span></i>
                                                example@domain.com
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+254xxxxxxxxx">
                                                <i class="mr-1 fas fa-phone-alt icn"><span
                                                        class="sr-only">icon</span></i>
                                                +254xxxxxxxxx
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                <div class="imgHolder position-relative">
                                    <img src="https://placehold.co/295x295" class="img-fluid d-block w-100"
                                        alt="image description">
                                    <div class="mcssHolder">
                                        <ul
                                            class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Twitter"><i
                                                        class="vssIcn fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Facebook"><i
                                                        class="vssIcn fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Linkedin"><i
                                                        class="vssIcn fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="px-5 pt-5 pb-4 mcCaptionWrap position-relative">
                                    <h3 class="mb-1 fwMedium h3Small">Name: Here</h3>
                                    <h4 class="fwSemiBold fontBase text-secondary">Position : Here</h4>
                                    <hr class="mx-0 mt-4 mb-3 mccSeprator">
                                    <ul class="list-unstyled mccInfoList">
                                        <li>
                                            <a href="example@domain.com">
                                                <i class="mr-1 fas fa-envelope icn"><span
                                                        class="sr-only">icon</span></i>
                                                example@domain.com
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+254xxxxxxxxx">
                                                <i class="mr-1 fas fa-phone-alt icn"><span
                                                        class="sr-only">icon</span></i>
                                                +254xxxxxxxxx
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                <div class="imgHolder position-relative">
                                    <img src="https://placehold.co/295x295" class="img-fluid d-block w-100"
                                        alt="image description">
                                    <div class="mcssHolder">
                                        <ul
                                            class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Twitter"><i
                                                        class="vssIcn fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Facebook"><i
                                                        class="vssIcn fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Linkedin"><i
                                                        class="vssIcn fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="px-5 pt-5 pb-4 mcCaptionWrap position-relative">
                                    <h3 class="mb-1 fwMedium h3Small">Name : Here</h3>
                                    <h4 class="fwSemiBold fontBase text-secondary">Position : Here</h4>
                                    <hr class="mx-0 mt-4 mb-3 mccSeprator">
                                    <ul class="list-unstyled mccInfoList">
                                        <li>
                                            <a href="example@domain.com">
                                                <i class="mr-1 fas fa-envelope icn"><span
                                                        class="sr-only">icon</span></i>
                                                example@domain.com
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+254xxxxxxxxx">
                                                <i class="mr-1 fas fa-phone-alt icn"><span
                                                        class="sr-only">icon</span></i>
                                                +254xxxxxxxxx
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                <div class="imgHolder position-relative">
                                    <img src="https://placehold.co/295x295" class="img-fluid d-block w-100"
                                        alt="image description">
                                    <div class="mcssHolder">
                                        <ul
                                            class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Twitter"><i
                                                        class="vssIcn fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Facebook"><i
                                                        class="vssIcn fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="mcssLink" title="Linkedin"><i
                                                        class="vssIcn fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="px-5 pt-5 pb-4 mcCaptionWrap position-relative">
                                    <h3 class="mb-1 fwMedium h3Small">Name : Here</h3>
                                    <h4 class="fwSemiBold fontBase text-secondary">Position : Here</h4>
                                    <hr class="mx-0 mt-4 mb-3 mccSeprator">
                                    <ul class="list-unstyled mccInfoList">
                                        <li>
                                            <a href="example@domain.com">
                                                <i class="fas fa-envelope icn"><span class="sr-only">icon</span></i>
                                                example@domain.com
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+254xxxxxxxxx">
                                                <i class="fas fa-phone-alt icn"><span class="sr-only">icon</span></i>
                                                +254xxxxxxxxx
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>

            </section>
            <section class="pt-4 pb-6 exploreHeightsBlock pb-md-9 pt-lg-7 pb-lg-14 pt-xl-11 pb-xl-20">
                <div class="container">
                    <header class="mb-12 text-center headingHead">
                        <h2 class="fwSemiBold">Municipality Facilities</h2>
                    </header>
                </div>
                <div class="row">
                    <div class="overflow-hidden echSliderWrap w-100">
                        <div class="mx-auto echSlider w-100">
                            <div>
                                <div class="col-12">
                                    <div class="echColumn d-block w-100 bgCover position-relative"
                                        style="background-image: url(https://placehold.co/403x300);">
                                        <a href="https://placehold.co/403x300"
                                            class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                            data-fancybox="true">
                                            <i class="far fa-image icn"></i>
                                            6
                                        </a>
                                        <div
                                            class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                            <h3 class="mb-0 text-white">
                                                <strong
                                                    class="mb-1 d-block font-weight-normal fontBase echCatTitle">Teso
                                                    North</strong>
                                                <span class="d-block">Kakapel</span>
                                            </h3>
                                            <a href="{{ route('destination') }}" class="d-inline-block"><i
                                                    class="bg-white rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center text-dark spanLinkGo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-12">
                                    <div class="echColumn d-block w-100 bgCover position-relative"
                                        style="background-image: url(https://placehold.co/403x300);">
                                        <a href="https://placehold.co/403x300"
                                            class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                            data-fancybox="true">
                                            <i class="far fa-image icn"></i>
                                            6
                                        </a>
                                        <div
                                            class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                            <h3 class="mb-0 text-white">
                                                <strong
                                                    class="mb-1 d-block font-weight-normal fontBase echCatTitle">Samia</strong>
                                                <span class="d-block">Sio Port</span>
                                            </h3>
                                            <a href="{{ route('destination') }}" class="d-inline-block"><i
                                                    class="bg-white rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center text-dark spanLinkGo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-12">
                                    <div class="echColumn d-block w-100 bgCover position-relative"
                                        style="background-image: url(https://placehold.co/403x300);">
                                        <a href="https://placehold.co/403x300"
                                            class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                            data-fancybox="true">
                                            <i class="far fa-image icn"></i>
                                            6
                                        </a>
                                        <div
                                            class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                            <h3 class="mb-0 text-white">
                                                <strong
                                                    class="mb-1 d-block font-weight-normal fontBase echCatTitle">Business</strong>
                                                <span class="d-block">Mayor of Arsonia</span>
                                            </h3>
                                            <a href="{{ route('destination') }}" class="d-inline-block"><i
                                                    class="bg-white rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center text-dark spanLinkGo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-12">
                                    <div class="echColumn d-block w-100 bgCover position-relative"
                                        style="background-image: url(https://placehold.co/403x300);">
                                        <a href="https://placehold.co/403x300"
                                            class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                            data-fancybox="true">
                                            <i class="far fa-image icn"></i>
                                            6
                                        </a>
                                        <div
                                            class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                            <h3 class="mb-0 text-white">
                                                <strong
                                                    class="mb-1 d-block font-weight-normal fontBase echCatTitle">Culture</strong>
                                                <span class="d-block">Melton Art Museum</span>
                                            </h3>
                                            <a href="{{ route('destination') }}" class="d-inline-block"><i
                                                    class="bg-white rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center text-dark spanLinkGo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-12">
                                    <div class="echColumn d-block w-100 bgCover position-relative"
                                        style="background-image: url(https://placehold.co/403x300);">
                                        <a href="https://placehold.co/403x300"
                                            class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                            data-fancybox="true">
                                            <i class="far fa-image icn"></i>
                                            6
                                        </a>
                                        <div
                                            class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                            <h3 class="mb-0 text-white">
                                                <strong
                                                    class="mb-1 d-block font-weight-normal fontBase echCatTitle">Public
                                                    Places</strong>
                                                <span class="d-block">Cinema Teatre</span>
                                            </h3>
                                            <a href="{{ route('destination') }}" class="d-inline-block"><i
                                                    class="bg-white rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center text-dark spanLinkGo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion ctAccordion" id="ctdepartsAccordion">
                    <div class="mb-4 ctaccRow">
                        <div class="ctaccOpener">
                            <a class="fontAlter fwMedium" href="#ctr1" data-toggle="collapse"
                                aria-expanded="false" aria-controls="ctr1">Eco-Friendly equipments and
                                materials</a>
                        </div>
                        <div class="collapse ctaccSlide" id="ctr1" data-parent="#ctdepartsAccordion">
                            <div class="px-5 pb-1 overflow-hidden">
                                <p>One of the most common additions people make to their cars in order to keep
                                    the heat out is a windshield visor. Cars become warm in the summer because
                                    direct sunlight enters in through the windows. This is why we park in the
                                    shade whenever we can. Since the largest windshield.In fact, wind is
                                    becoming cheap enough in many places in the U.S. and around the world to
                                    compete effectively with fossil fuels.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 ctaccRow">
                        <div class="ctaccOpener">
                            <a class="fontAlter fwMedium" href="#ctr2" data-toggle="collapse" aria-expanded="true"
                                aria-controls="ctr2">Eco-Friendly equipments and
                                materials</a>
                        </div>
                        <div class="collapse show ctaccSlide" id="ctr2" data-parent="#ctdepartsAccordion">
                            <div class="px-5 pb-1 overflow-hidden">
                                <p>One of the most common additions people make to their cars in order to keep
                                    the heat out is a windshield visor. Cars become warm in the summer because
                                    direct sunlight enters in through the windows. This is why we park in the
                                    shade whenever we can. Since the largest windshield.In fact, wind is
                                    becoming cheap enough in many places in the U.S. and around the world to
                                    compete effectively with fossil fuels.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 ctaccRow">
                        <div class="ctaccOpener">
                            <a class="fontAlter fwMedium" href="#ctr3" data-toggle="collapse"
                                aria-expanded="false" aria-controls="ctr3">Award winning design management</a>
                        </div>
                        <div class="collapse ctaccSlide" id="ctr3" data-parent="#ctdepartsAccordion">
                            <div class="px-5 pb-1 overflow-hidden">
                                <p>One of the most common additions people make to their cars in order to keep
                                    the heat out is a windshield visor. Cars become warm in the summer because
                                    direct sunlight enters in through the windows. This is why we park in the
                                    shade whenever we can. Since the largest windshield.In fact, wind is
                                    becoming cheap enough in many places in the U.S. and around the world to
                                    compete effectively with fossil fuels.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-12 mb-7">
                <aside class="text-center saShareAside d-flex justify-content-between align-items-center">
                    <strong class="mb-2 d-block text-lDark fwSemiBold fontAlter title">Share Page</strong>
                    <ul
                        class="flex-wrap mb-0 ml-0 list-unstyled socialNetworks saSocialNetworks d-flex justify-content-center">
                        <li>
                            <a href="javascript:void(0);" class="facebook">
                                <i class="fab fa-facebook-square" aria-hidden="true"><span
                                        class="sr-only">facebook</span></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="twitter">
                                <i class="fab fa-twitter" aria-hidden="true"><span class="sr-only">twitter</span></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="pinterest">
                                <i class="fab fa-pinterest" aria-hidden="true"><span
                                        class="sr-only">pinterest</span></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="linkedin">
                                <i class="fab fa-linkedin-in" aria-hidden="true"><span
                                        class="sr-only">linkedin-in</span></i>
                            </a>
                        </li>
                    </ul>
                </aside>
            </section>

        </div>
    </article>
</main>
