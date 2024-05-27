<main>
    @section('title')
    Projects
    @endsection
    <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
        style="background-image: url({{@asset('assets/images/img23.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="text-white mb-2">Projects</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
                            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="exploreDepartmentsBlock py-8 py-md-10 py-lg-14 py-xl-22">
        <div class="container">
            <ul
                class="list-unstyled ifbFiltersList d-flex isoFiltersList mb-lg-12 fontAlter flex-wrap justify-content-center">
                <li class="active">
                    <a href="javascript:void(0);">All</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-filter=".government">Government</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-filter=".business">Business</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-filter=".culture">Culture</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-filter=".pubpla">Public Places</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-filter=".events">Events</a>
                </li>
            </ul>
            <div class="row justify-content-center isoContentHolder mb-8">
                <div class="col-12 col-md-6 col-lg-4 isoCol business">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img14.jpg')}});">
                        <a href="{{asset('assets/images/img14.jpg')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Business</strong>
                                <span class="d-block">Mayor of Arsonia</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isoCol government">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img15.jpg')}});">
                        <a href="{{asset('assets/images/img15.jpg')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Goverment</strong>
                                <span class="d-block">Town of Maximonia</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isoCol culture">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img16.jpg')}});">
                        <a href="{{asset('assets/images/img16.jpg')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Culture</strong>
                                <span class="d-block">Melton Art Museum</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isoCol pubpla">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img18.jpg')}});">
                        <a href="{{asset('assets/images/img18.jpg')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Public
                                    Places</strong>
                                <span class="d-block">Cinema Teatre</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isoCol business">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img173.jpg')}});">
                        <a href="{{asset('assets/images/img173.jpg')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Business</strong>
                                <span class="d-block">Business Agencies</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isoCol government">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img174.jpg')}});">
                        <a href="{{asset('assets/images/img174.jpg')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Government</strong>
                                <span class="d-block">Historical Buildings</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isoCol events">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img175.jpg')}});">
                        <a href="{{asset('assets/images/img175.jpg')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Events</strong>
                                <span class="d-block">Summer Conference</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isoCol pubpla">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img176.jpg')}});">
                        <a href="{{asset('assets/images/img176.jpg')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Public
                                    Places</strong>
                                <span class="d-block">Metro Train Station</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isoCol business">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img17.jpg')}});">
                        <a href="{{asset('assets/images/img17.jpg')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Business</strong>
                                <span class="d-block">Modern Buildings</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="btn btnTheme text-capitalize position-relative border-0 p-0 minWidthMedium btnxLarge"
                    data-hover="Load More">
                    <span class="d-block btnText">Load More</span>
                </button>
            </div>
        </div>
    </section>
</main>
