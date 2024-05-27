<main>
    @section('title')
    News &amp; Speeches
    @endsection
    <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
        style="background-image: url({{@asset('assets/images/img86.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="text-white mb-2">News &amp; Speeches</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Resources</a></li>
                            <li class="breadcrumb-item active" aria-current="page">News &amp; Speeches</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="ItemfullBlock pt-7 pb-7 pt-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-22 pb-xl-19">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img11.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">15
                                Oct 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In Goverment</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 0
                            </strong>
                            <h3 class="fwSemiBold mb-5">
                                <a href="{{route('news.speeches.details')}}">List of City Weekend Celebrations</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img12.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">12
                                Oct 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In Culture</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 2
                            </strong>
                            <h3 class="fwSemiBold mb-6">
                                <a href="{{route('news.speeches.details')}}">New Australian Economic Culture</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img13.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">08
                                Oct 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In Developement</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 3
                            </strong>
                            <h3 class="fwSemiBold mb-6">
                                <a href="{{route('news.speeches.details')}}">Smart City Design Plan 2025</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img95.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">23
                                Nov 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In City News</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 0
                            </strong>
                            <h3 class="fwSemiBold mb-6">
                                <a href="{{route('news.speeches.details')}}">Summer Nights at the Library</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img96.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">16
                                Nov 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In Community</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 1
                            </strong>
                            <h3 class="fwSemiBold mb-6">
                                <a href="{{route('news.speeches.details')}}">Environmental Planning Sustainability</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img97.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">04
                                Nov 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In Goverment</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 2
                            </strong>
                            <h3 class="fwSemiBold mb-6">
                                <a href="{{route('news.speeches.details')}}">Urban Renewal Loans Available</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img98.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">15
                                Oct 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In Tourism, Culture</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 2
                            </strong>
                            <h3 class="fwSemiBold mb-6">
                                <a href="{{route('news.speeches.details')}}">Dalvan Museum Street Art View</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img99.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">19
                                Sep 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In Goverment</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 1
                            </strong>
                            <h3 class="fwSemiBold mb-6">
                                <a href="{{route('news.speeches.details')}}">City Unemployment Dips to 3.9%</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img100.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">14
                                Sep 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In Tourism</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 4
                            </strong>
                            <h3 class="fwSemiBold mb-6">
                                <a href="{{route('news.speeches.details')}}">City Unemployment Dips to 3.9%</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img101.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">16
                                Sep 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In City news</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 0
                            </strong>
                            <h3 class="fwSemiBold mb-6">
                                <a href="{{route('news.speeches.details')}}">New Goverment Rules Enforced in
                                    Tourisum</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img102.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">29
                                Aug 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In Culture</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 2
                            </strong>
                            <h3 class="fwSemiBold mb-6">
                                <a href="{{route('news.speeches.details')}}">Europeon Freedom Fighters Statue</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a href="{{route('news.speeches.details')}}">
                                <img src="{{asset('assets/images/img103.jpg')}}" class="img-fluid w-100 d-block"
                                    alt="image description">
                            </a>
                            <time datetime="2011-01-12"
                                class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">29
                                Aug 2020</time>
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                            <strong class="d-block npbcmWrap font-weight-normal mb-1">
                                <span class="mr-5">In Culture</span>
                                <i class="icomoon-chat"><span class="sr-only">icon</span></i> 2
                            </strong>
                            <h3 class="fwSemiBold mb-6">
                                <a href="{{route('news.speeches.details')}}">Europeon Freedom Fighters Statue</a>
                            </h3>
                            <a href="{{route('news.speeches.details')}}"
                                class="btnCr d-inline-block align-top fontAlter">Continue Reading
                                <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
            </div>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center pt-2">
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0);">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="javascript:void(0);">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">Next <i class="fas fa-chevron-right icn"><span
                                    class="sr-only">icon</span></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</main>
