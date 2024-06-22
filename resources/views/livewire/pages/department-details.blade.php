<main>
    @section('title')
    {{$department->title}}
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('departments')}}">Departments</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Department details</li>
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
                            <h2 class="fwSemiBold h2vii" style="text-transform: capitalize">Department of
                                {{$department->title}}</h2>

                            @if ($department->cover_image)
                            <img class="alignHolder d-flex w-100 align-items-center"
                                src="https://busia.mcomps.africa/assets/img/departments/{{$department->cover_image}}">
                            @endif
                        </header>

                        <div class="mb-6 dcsPatchWrap mb-lg-11">
                            {!! $department->description !!}
                        </div>
                        <div class="mb-12 dcsPatchWrap">
                            <h3 class="mb-5 fwSemiBold">Download Resources</h3>
                            <ul class="list-unstyled drItemsList">
                                <li>
                                    <div
                                        class="py-3 pl-3 pr-3 drItemRow position-relative d-flex pl-md-6 pr-sm-27 pr-md-30">
                                        <span class="flex-shrink-0 pt-1 mr-3 icnWrap">
                                            <img src="{{asset('assets/images/icopdf.png')}}" class="img-fluid"
                                                alt="icon">
                                        </span>
                                        <div class="descrWrap">
                                            <h4 class="mb-1 fontBase font-weight-normal">
                                                Company_Briefing_Update_for_the_Year.pdf</h4>
                                            <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                            <a href="javascript:void(0);" class="btnDownload fwSemiBold">[ Download
                                                ]</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mb-6 col-12 col-lg-4 col-xl-3 order-lg-1">
                    <aside class="pt-1 dscSidebar mr-xl-n5">
                        <nav class="px-6 py-5 mb-6 widget mb-lg-10 widgetDepartsNav widgetBgLight">
                            <h3 class="mb-4 fwSemiBold">
                                <a href="{{route('departments')}}" class="mr-1 align-middle btnDcsBack"><i
                                        class="fas fa-chevron-left"><span class="sr-only">icon</span></i></a>
                                All Departments
                            </h3>
                            <ul class="pl-0 mb-0 mb-3 list-unstyled mx-n2">
                                @foreach ($departments as $item)
                                <li class="{{ request()->route('slug') === $item->slug ? 'active' : '' }}">
                                    <a href="{{ route('department.details', ['slug' => $item->slug]) }}">{{ $item->title
                                        }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                        <section class="mb-6 widget mb-lg-10 widgetDocs">
                            <ul class="pl-0 list-unstyled drItemsList">
                                <li>
                                    <div class="px-3 py-3 drItemRow position-relative d-flex px-md-6">
                                        <span class="flex-shrink-0 pt-1 mr-3 icnWrap">
                                            <img src="{{asset('assets/images/icopdf.png')}}" class="img-fluid"
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
                            <a href="{{route('contact')}}"
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
                        <h2 class="mb-4 fwSemiBold">Administation</h2>
                        <p>Meet the department leadership team.</p>
                    </header>
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                <div class="imgHolder position-relative">
                                    @if ($department->cecm_photo)
                                    <img src="https://busia.mcomps.africa/assets/img/departments/cecm/{{$department->cecm_photo}}"
                                        class="img-fluid d-block w-100" alt="image description">
                                    @else
                                    <img src="https://placehold.co/295x295" class="img-fluid d-block w-100">
                                    @endif

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
                                    <h3 class="mb-1 fwMedium h3Small">{{$department->cecm_name}}</h3>
                                    <h4 class="fwSemiBold fontBase text-secondary">CECM, {{$department->title}}
                                    </h4>
                                    <hr class="mx-0 mt-4 mb-3 mccSeprator">
                                    <ul class="list-unstyled mccInfoList">
                                        @if ($department->cecm_department_email)
                                        <li>
                                            <a href="mailto:{{$department->cecm_department_email}}">
                                                <i class="mr-1 fas fa-envelope icn"><span
                                                        class="sr-only">icon</span></i>
                                                {{$department->cecm_department_email}}
                                            </a>
                                        </li>
                                        @endif
                                        @if ($department->cecm_department_phone)
                                        <li>
                                            <a href="tel:+{{$department->cecm_department_phone}}">
                                                <i class="mr-1 fas fa-phone-alt icn"><span
                                                        class="sr-only">icon</span></i>
                                                +{{$department->cecm_department_phone}}
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                <div class="imgHolder position-relative">
                                    @if ($department->chief_officer_photo)
                                    <img src="https://busia.mcomps.africa/assets/img/departments/chief_officer/{{$department->chief_officer_photo}}"
                                        class="img-fluid d-block w-100">
                                    @else
                                    <img src="https://placehold.co/295x295" class="img-fluid d-block w-100">
                                    @endif
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
                                    <h3 class="mb-1 fwMedium h3Small">{{$department->chief_officer_name}}</h3>
                                    <h4 class="fwSemiBold fontBase text-secondary">Chief Officer, {{$department->title}}
                                    </h4>
                                    <hr class="mx-0 mt-4 mb-3 mccSeprator">
                                    <ul class="list-unstyled mccInfoList">
                                        @if ($department->officer_email)
                                        <li>
                                            <a href="mailto:{{$department->officer_email}}">
                                                <i class="mr-1 fas fa-envelope icn"><span
                                                        class="sr-only">icon</span></i>
                                                {{$department->officer_email}}
                                            </a>
                                        </li>
                                        @endif
                                        @if ($department->officer_phone)
                                        <li>
                                            <a href="tel:+{{$department->officer_phone}}">
                                                <i class="mr-1 fas fa-phone-alt icn"><span
                                                        class="sr-only">icon</span></i>
                                                +{{$department->officer_phone}}
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </article>
                        </div>
                        @foreach ($directors as $item)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                <div class="imgHolder position-relative">
                                    @if ($item->leader_photo)
                                    <img src="https://busia.mcomps.africa/assets/img/directors/{{$item->leader_photo}}"
                                        class="img-fluid d-block w-100">
                                    @else
                                    <img src="https://placehold.co/295x295" class="img-fluid d-block w-100">
                                    @endif
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
                                    <h3 class="mb-1 fwMedium h3Small">{{$item->leader_name}}</h3>
                                    <h4 class="fwSemiBold fontBase text-secondary">Director {{$item->title}}</h4>
                                    <hr class="mx-0 mt-4 mb-3 mccSeprator">
                                    <ul class="list-unstyled mccInfoList">
                                        @if ($item->office_email)
                                        <li>
                                            <a href="mailto:{{$item->office_email}}">
                                                <i class="mr-1 fas fa-envelope icn"><span
                                                        class="sr-only">icon</span></i>
                                                {{$item->office_email}}
                                            </a>
                                        </li>
                                        @endif
                                        @if ($item->office_phone)
                                        <li>
                                            <a href="tel:+{{$item->office_phone}}">
                                                <i class="mr-1 fas fa-phone-alt icn"><span
                                                        class="sr-only">icon</span></i>
                                                +{{$item->office_phone}}
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="py-8 exploreDepartmentsBlock py-md-10 py-lg-14 py-xl-22">
                <div class="container">
                    <header class="text-center headingHead cdTitle mb-7 mb-md-13">
                        <h2 class="mb-4 fwSemiBold">Department Projects</h2>
                        <p>Explore Our Projects</p>
                    </header>

                    <div class="mb-8 row justify-content-center isoContentHolder">
                        <div class="col-12 col-md-6 col-lg-4 isoCol business">
                            <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                                style="background-image: url(https://placehold.co/403x300);">
                                <a href="https://placehold.co/403x300"
                                    class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                    data-fancybox="true" tabindex="-1">
                                    <i class="fa fa-arrow-right " aria-hidden="true"><span
                                            class="sr-only">icon</span></i>
                                    6
                                </a>
                                <div
                                    class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="mb-1 d-block font-weight-normal fontBase echCatTitle">Category</strong>
                                        <span class="d-block">Project Title</span>
                                    </h3>
                                    <a href="{{route('project.details')}}"><i
                                            class="rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center spanLinkGo"><span
                                                class="sr-only">icon</span></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 isoCol business">
                            <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                                style="background-image: url(https://placehold.co/403x300);">
                                <a href="https://placehold.co/403x300"
                                    class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                    data-fancybox="true" tabindex="-1">
                                    <i class="fa fa-arrow-right " aria-hidden="true"><span
                                            class="sr-only">icon</span></i>
                                    6
                                </a>
                                <div
                                    class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="mb-1 d-block font-weight-normal fontBase echCatTitle">Category</strong>
                                        <span class="d-block">Project Title</span>
                                    </h3>
                                    <a href="{{route('project.details')}}"><i
                                            class="rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center spanLinkGo"><span
                                                class="sr-only">icon</span></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 isoCol business">
                            <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                                style="background-image: url(https://placehold.co/403x300);">
                                <a href="https://placehold.co/403x300"
                                    class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                    data-fancybox="true" tabindex="-1">
                                    <i class="fa fa-arrow-right " aria-hidden="true"><span
                                            class="sr-only">icon</span></i>
                                    6
                                </a>
                                <div
                                    class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="mb-1 d-block font-weight-normal fontBase echCatTitle">Category</strong>
                                        <span class="d-block">Project Title</span>
                                    </h3>
                                    <a href="{{route('project.details')}}"><i
                                            class="rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center spanLinkGo"><span
                                                class="sr-only">icon</span></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 isoCol business">
                            <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                                style="background-image: url(https://placehold.co/403x300);">
                                <a href="https://placehold.co/403x300"
                                    class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                    data-fancybox="true" tabindex="-1">
                                    <i class="fa fa-arrow-right " aria-hidden="true"><span
                                            class="sr-only">icon</span></i>
                                    6
                                </a>
                                <div
                                    class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="mb-1 d-block font-weight-normal fontBase echCatTitle">Category</strong>
                                        <span class="d-block">Project Title</span>
                                    </h3>
                                    <a href="{{route('project.details')}}"><i
                                            class="rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center spanLinkGo"><span
                                                class="sr-only">icon</span></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 isoCol business">
                            <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                                style="background-image: url(https://placehold.co/403x300);">
                                <a href="https://placehold.co/403x300"
                                    class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                    data-fancybox="true" tabindex="-1">
                                    <i class="fa fa-arrow-right " aria-hidden="true"><span
                                            class="sr-only">icon</span></i>
                                    6
                                </a>
                                <div
                                    class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="mb-1 d-block font-weight-normal fontBase echCatTitle">Category</strong>
                                        <span class="d-block">Project Title</span>
                                    </h3>
                                    <a href="{{route('project.details')}}"><i
                                            class="rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center spanLinkGo"><span
                                                class="sr-only">icon</span></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 isoCol business">
                            <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                                style="background-image: url(https://placehold.co/403x300);">
                                <a href="https://placehold.co/403x300"
                                    class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                    data-fancybox="true" tabindex="-1">
                                    <i class="fa fa-arrow-right " aria-hidden="true"><span
                                            class="sr-only">icon</span></i>
                                    6
                                </a>
                                <div
                                    class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="mb-1 d-block font-weight-normal fontBase echCatTitle">Category</strong>
                                        <span class="d-block">Project Title</span>
                                    </h3>
                                    <a href="{{route('project.details')}}"><i
                                            class="rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center spanLinkGo"><span
                                                class="sr-only">icon</span></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 isoCol business">
                            <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                                style="background-image: url(https://placehold.co/403x300);">
                                <a href="https://placehold.co/403x300"
                                    class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                    data-fancybox="true" tabindex="-1">
                                    <i class="fa fa-arrow-right " aria-hidden="true"><span
                                            class="sr-only">icon</span></i>
                                    6
                                </a>
                                <div
                                    class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="mb-1 d-block font-weight-normal fontBase echCatTitle">Category</strong>
                                        <span class="d-block">Project Title</span>
                                    </h3>
                                    <a href="{{route('project.details')}}"><i
                                            class="rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center spanLinkGo"><span
                                                class="sr-only">icon</span></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 isoCol business">
                            <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                                style="background-image: url(https://placehold.co/403x300);">
                                <a href="https://placehold.co/403x300"
                                    class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                    data-fancybox="true" tabindex="-1">
                                    <i class="fa fa-arrow-right " aria-hidden="true"><span
                                            class="sr-only">icon</span></i>
                                    6
                                </a>
                                <div
                                    class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="mb-1 d-block font-weight-normal fontBase echCatTitle">Category</strong>
                                        <span class="d-block">Project Title</span>
                                    </h3>
                                    <a href="{{route('project.details')}}"><i
                                            class="rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center spanLinkGo"><span
                                                class="sr-only">icon</span></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 isoCol business">
                            <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                                style="background-image: url(https://placehold.co/403x300);">
                                <a href="https://placehold.co/403x300"
                                    class="px-3 py-1 text-white echCountTag position-absolute fwSemiBold lightbox"
                                    data-fancybox="true" tabindex="-1">
                                    <i class="fa fa-arrow-right " aria-hidden="true"><span
                                            class="sr-only">icon</span></i>
                                    6
                                </a>
                                <div
                                    class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="mb-1 d-block font-weight-normal fontBase echCatTitle">Category</strong>
                                        <span class="d-block">Project Title</span>
                                    </h3>
                                    <a href="{{route('project.details')}}"><i
                                            class="rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center spanLinkGo"><span
                                                class="sr-only">icon</span></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="p-0 border-0 btn btnTheme text-capitalize position-relative minWidthMedium btnxLarge"
                            data-hover="Load More">
                            <span class="d-block btnText">Load More</span>
                        </button>
                    </div>
                </div>
            </section>
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
                            <i class="fab fa-pinterest" aria-hidden="true"><span class="sr-only">pinterest</span></i>
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
        </div>
    </article>
</main>
