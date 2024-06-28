<main>
    @section('title')
        County Revenue Board
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">County Revenue Board</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">About</a></li>
                            <li class="breadcrumb-item active" aria-current="page">County Revenue Board</li>
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
                            <h2 class="fwSemiBold h2vii">{{ config('app.name') }} Revenue Board</h2>
                        </header>
                        {!! $content->content !!}
                    </div>
                </div>
                <div class="mb-6 col-12 col-lg-4 col-xl-3 order-lg-1">
                    <aside class="pt-1 dscSidebar mr-xl-n5">
                        <section class="mb-6 widget mb-lg-10 widgetDocs">
                            <ul class="pl-0 list-unstyled drItemsList">
                                <li style="margin-bottom:10px;">
                                    <div class="px-3 py-3 drItemRow position-relative d-flex px-md-6">
                                        <span class="flex-shrink-0 pt-1 mr-3 icnWrap">
                                            <img src="{{ asset('assets/images/icopdf.png') }}" class="img-fluid"
                                                alt="icon">
                                        </span>
                                        <div class="descrWrap">
                                            <h4 class="mb-1 fontBase font-weight-normal">
                                                <a href="javascript:void(0);">Transport Briefing Update for the Year</a>
                                            </h4>
                                            <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        </div>
                                    </div>
                                </li>
                                <li style="margin-bottom:10px;">
                                    <div class="px-3 py-3 drItemRow position-relative d-flex px-md-6">
                                        <span class="flex-shrink-0 pt-1 mr-3 icnWrap">
                                            <img src="{{ asset('assets/images/icopdf.png') }}" class="img-fluid"
                                                alt="icon">
                                        </span>
                                        <div class="descrWrap">
                                            <h4 class="mb-1 fontBase font-weight-normal">
                                                <a href="javascript:void(0);">Transport Briefing Update for the Year</a>
                                            </h4>
                                            <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        </div>
                                    </div>
                                </li>
                                <li style="margin-bottom:10px;">
                                    <div class="px-3 py-3 drItemRow position-relative d-flex px-md-6">
                                        <span class="flex-shrink-0 pt-1 mr-3 icnWrap">
                                            <img src="{{ asset('assets/images/icopdf.png') }}" class="img-fluid"
                                                alt="icon">
                                        </span>
                                        <div class="descrWrap">
                                            <h4 class="mb-1 fontBase font-weight-normal">
                                                <a href="javascript:void(0);">Transport Briefing Update for the Year</a>
                                            </h4>
                                            <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        </div>
                                    </div>
                                </li>
                                <li style="margin-bottom:10px;">
                                    <div class="px-3 py-3 drItemRow position-relative d-flex px-md-6">
                                        <span class="flex-shrink-0 pt-1 mr-3 icnWrap">
                                            <img src="{{ asset('assets/images/icopdf.png') }}" class="img-fluid"
                                                alt="icon">
                                        </span>
                                        <div class="descrWrap">
                                            <h4 class="mb-1 fontBase font-weight-normal">
                                                <a href="javascript:void(0);">Transport Briefing Update for the Year</a>
                                            </h4>
                                            <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>
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
                        <p>Board Members of The County Government of Busia Public Service Board.</p>
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
        </div>
    </article>
</main>
