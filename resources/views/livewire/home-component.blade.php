<main>
    @section('title')
    The County Government of Busia
    @endsection
    <div class="introBlock ibSlider">
        <div>
            <article class="d-flex w-100 position-relative ibColumn text-white overflow-hidden">
                <div class="alignHolder d-flex align-items-center w-100">
                    <div class="align w-100 pt-20 pb-20 pt-md-40 pb-md-30 px-md-17">
                        <div class="container position-relative">
                            <div class="row">
                                <div class="col-12 col-md-9 col-xl-7 fzMedium">
                                    <h1 class="text-white mb-4 h1Large">Swearing In of H.E Governor Dr Paul Otuoma
                                    </h1>
                                    <p>A transformative and progressive County for sustainable and equitable
                                        development.</p>
                                    <a href="javascript:void(0);"
                                        class="btn btnTheme font-weight-bold btnMinSm text-capitalize position-relative border-0 p-0 mt-6"
                                        data-hover="Read More">
                                        <span class="d-block btnText">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="ibBgImage bgCover position-absolute"
                    style="background-image: url({{@asset('assets/images/img01.jpg')}});"></span>
            </article>
        </div>
        <div>
            <article class="d-flex w-100 position-relative ibColumn text-white overflow-hidden">
                <div class="alignHolder d-flex align-items-center w-100">
                    <div class="align w-100 pt-20 pb-20 pt-md-40 pb-md-30 px-md-17">
                        <div class="container position-relative">
                            <div class="row">
                                <div class="col-12 col-md-9 col-xl-7 fzMedium">
                                    <h1 class="text-white mb-4 h1Large">Governor's Inspection at Busia County Referral
                                        Hospital</h1>
                                    <p>A transformative and progressive County for sustainable and equitable
                                        development.</p>
                                    <a href="javascript:void(0);"
                                        class="btn btnTheme font-weight-bold btnMinSm text-capitalize position-relative border-0 p-0 mt-6"
                                        data-hover="More Details">
                                        <span class="d-block btnText">More Details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="ibBgImage bgCover position-absolute"
                    style="background-image: url({{@asset('assets/images/img02.jpg')}});"></span>
            </article>
        </div>
        <div>
            <article class="d-flex w-100 position-relative ibColumn text-white overflow-hidden">
                <div class="alignHolder d-flex align-items-center w-100">
                    <div class="align w-100 pt-20 pb-20 pt-md-40 pb-md-30 px-md-17">
                        <div class="container position-relative">
                            <div class="row">
                                <div class="col-12 col-md-9 col-xl-7 fzMedium">
                                    <h1 class="text-white mb-4 h1Large">Fully Equipped Health facilities</h1>
                                    <p>A transformative and progressive County for sustainable and equitable
                                        development.
                                    </p>
                                    <a href="javascript:void(0);"
                                        class="btn btnTheme font-weight-bold btnMinSm text-capitalize position-relative border-0 p-0 mt-6"
                                        data-hover="Discover More">
                                        <span class="d-block btnText">Discover More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="ibBgImage bgCover position-absolute"
                    style="background-image: url({{@asset('assets/images/img03.jpg')}});"></span>
            </article>
        </div>
    </div>
    <aside class="featuresAsideBlock position-relative text-white">
        <div class="container">
            <div class="flatpWrap position-relative mt-n8 mt-md-n18">
                <ul class="list-unstyled fabFeaturesList mb-0 d-flex overflow-hidden flex-wrap">
                    <li>
                        <a href="{{route('executive')}}" class="fflColumn d-block w-100 text-center px-2 pt-4 pb-10">
                            <span
                                class="icnWrap d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle">
                                <i class="fa fa-landmark"></i>
                            </span>
                            <h2 class="mb-0">The Executive</h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('jobs')}}" class="fflColumn d-block w-100 text-center px-2 pt-4 pb-10">
                            <span
                                class="icnWrap d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle">
                                <i class="fa fa-briefcase"></i>
                            </span>
                            <h2 class="mb-0">Jobs</h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('investor')}}" class="fflColumn d-block w-100 text-center px-2 pt-4 pb-10">
                            <span
                                class="icnWrap d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle">
                                <i class="fas fa-dollar-sign"></i>
                            </span>
                            <h2 class="mb-0">Invest</h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tenders')}}" class="fflColumn d-block w-100 text-center px-2 pt-4 pb-10">
                            <span
                                class="icnWrap d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle">
                                <i class="fas fa-folder-open"></i>
                            </span>
                            <h2 class="mb-0">Tenders</h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('eservices')}}" class="fflColumn d-block w-100 text-center px-2 pt-4 pb-10">
                            <span
                                class="icnWrap d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle">
                                <i class="fas fa-laptop"></i>
                            </span>
                            <h2 class="mb-0">E-Services</h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}" class="fflColumn d-block w-100 text-center px-2 pt-4 pb-10">
                            <span
                                class="icnWrap d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle">
                                <i class="fas fa-ambulance"></i>
                            </span>
                            <h2 class="mb-0">Emergency</h2>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="fabBtNoteTextWrap text-center fontAlter fzMedium pt-6 pt-md-10 pb-6 pb-md-10 pb-lg-14">
            <div class="container">
                <div class="d-lg-flex justify-content-center align-items-center">
                    <p class="mb-lg-0">Partner with {{config('app.name')}} and invest in an ocean of opportunities.</p>
                    <a href="{{route('investor')}}"
                        class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
                        data-hover="Let’s explore more"><span class="d-block btnText fwMedium">Let’s explore
                            more</span></a>
                </div>
            </div>
        </div>
    </aside>
    <article class="aboutMayorBlock pt-md-7 pt-xl-11 pb-7 pb-md-13 pb-lg-20 pb-xl-28">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pt-4">
                    <h2 class="lh44 mb-6">Word from the Governor</h2>
                    <p>It is a great honour to welcome you to the Gateway to East and Central Africa, renowned for its
                        optimal climatic
                        conditions for agriculture and its hospitable citizens. My foremost commitment is to safeguard
                        the autonomy of the great people of Busia County who elected me to office.</p>
                    <p>In pursuit of a results-oriented approach, my focus is on ensuring fairness and justice for every
                        citizen and my manifesto, derived from the collective aspirations of our community, are a
                        guide to my vision for transformative governance.</p>
                    <blockquote
                        class="meetQuote fontAlter text-lDark mt-6 py-1 pl-4 pl-lg-8 pr-md-12 pr-lg-20 pr-xl-28">
                        <q class="d-block mb-4">Let us all unite in our efforts to shape a future marked by inclusivity,
                            equality, and prosperity for all residents while offering opportunities in Kenya and
                            beyond.</q>
                        <cite class="d-block fsNormal">H.E. Dr. Paul Otuoma, <span
                                class="fontBase ctSubtitleText">Governor</span></cite>
                    </blockquote>
                    <a href="https://www.youtube.com/watch7eaa.html?v=_sI_Ps7JSEk"
                        class="btnPlayLink fontAlter position-relative d-inline-block align-top mt-4 mt-lg-7 lightbox"
                        data-fancybox="true">
                        <i
                            class="icnPlay d-flex align-items-center justify-content-center position-absolute fas fa-play rounded-circle"><span
                                class="sr-only">icon</span></i>
                        <div class="bplTextWrap">
                            <em class="d-block fsNormal">
                                <span class="d-block">Welcome Speech</span>
                                <span class="d-block">Video Formart</span>
                            </em>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="imgTwoImageHolder position-relative mt-7 mt-md-0 mb-20 mb-md-0">
                        <span class="img img1 position-relative d-block">
                            <img src="{{asset('assets/images/img07.jpg')}}" class="img-fluid" alt="image description">
                        </span>
                        <span class="img img2 d-block position-absolute">
                            <img src="{{asset('assets/images/img01.jpg')}}" class="img-fluid" alt="image description">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <aside class="counterftAsideBlock position-relative text-center text-white d-flex bg-dark">
        <div class="alignHolder d-flex align-items-center w-100 position-relative">
            <div class="align w-100 pt-9 pb-5">
                <div class="container">
                    <ul class="list-unstyled cfbFeatList d-flex flex-wrap mb-0 justify-content-center">
                        <li>
                            <span class="icnWrap d-flex align-items-center justify-content-center w-100 mb-4">
                                <i class="icomoon-ico7"></i>
                            </span>
                            <h3 class="fwSemiBold text-white textCount mb-3"><span class="dataCount">62</span>K
                            </h3>
                            <h4 class="subtitle mb-0 font-weight-normal">Population</h4>
                        </li>
                        <li>
                            <span class="icnWrap d-flex align-items-center justify-content-center w-100 mb-4">
                                <i class="icomoon-ico8"></i>
                            </span>
                            <h3 class="fwSemiBold text-white textCount mb-3"><span class="dataCount">150</span>KM
                            </h3>
                            <h4 class="subtitle mb-0 font-weight-normal">Coverrage
                            </h4>
                        </li>
                        <li>
                            <span class="icnWrap d-flex align-items-center justify-content-center w-100 mb-4">
                                <i class="icomoon-ico9"></i>
                            </span>
                            <h3 class="fwSemiBold text-white textCount mb-3"><span class="dataCount">7</span>
                            </h3>
                            <h4 class="subtitle mb-0 font-weight-normal">Sub-Counties
                            </h4>
                        </li>
                        <li>
                            <span class="icnWrap d-flex align-items-center justify-content-center w-100 mb-4">
                                <i class="icomoon-ico10"></i>
                            </span>
                            <h3 class="fwSemiBold text-white textCount mb-3"><span class="dataCount">35
                            </h3>
                            <h4 class="subtitle mb-0 font-weight-normal">Wards
                            </h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <span class="cfbBgWrap bgCover position-absolute h-100 w-100 inaccessible"
            style="background-image: url(assets/images/bg01.png);"></span>
    </aside>
    <section class="upcomeventsBlock position-relative pt-7 pb-3 pt-md-9 pb-md-6 pt-lg-14 pb-lg-11 pt-xl-20 pb-xl-16">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="pr-lg-8">
                        <header class="headingHead mb-6 mb-lg-8 mb-xl-12">
                            <div class="row align-items-end">
                                <div class="col-12 col-sm-6 col-md-7">
                                    <h2 class="mb-sm-0 fwSemiBold h2Small">County Events</h2>
                                </div>
                                <div class="col-12 col-sm-6 col-md-5 d-sm-flex justify-content-sm-end">
                                    <a href="{{route('events')}}" class="btn-link fontAlter">See All Events
                                        <i class="fas fa-chevron-right blIcn"></i></a>
                                </div>
                            </div>
                        </header>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <article class="ueEveColumn position-relative shadow bg-white mb-6">
                                    <div class="imgHolder position-relative">
                                        <a href="{{route('event.details')}}">
                                            <img src="{{asset('assets/images/img09.jpg')}}"
                                                class="img-fluid d-block w-100" alt="image description">
                                        </a>
                                        <time
                                            class="ueTimeTag position-absolute text-center d-flex bg-white fontAlter fwSemiBold text-lDark text-uppercase"
                                            datetime="2011-01-12">
                                            <span
                                                class="d-block text-white textDay flex-shrink-0 font-weight-bold">01</span>
                                            <span class="d-block py-2 px-3">OCT 2022</span>
                                            <span
                                                class="d-block text-white textDay flex-shrink-0 font-weight-bold">Ended</span>
                                        </time>
                                    </div>
                                    <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                                        <strong
                                            class="d-block ueCatTitle fwSemiBold text-secondary mb-2">Entertainement</strong>
                                        <h3 class="h3Small fwMedium mb-3">
                                            <a href="{{route('event.details')}}">Organizing County Photography
                                                Contest-2022</a>
                                        </h3>
                                        <address>
                                            <ul class="list-unstyled ueScheduleList">
                                                <li>
                                                    <i class="fa fa-clock"></i>
                                                    9:30am - 1:00pm
                                                </li>
                                                <li>
                                                    <i class="fa fa-map-marker"></i>
                                                    Mayor Office, Texas County
                                                </li>
                                            </ul>
                                        </address>
                                        <a href="{{route('event.details')}}"
                                            class="btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative border-0 p-0 mt-3 align-top"
                                            data-hover="More Details">
                                            <span class="d-block btnText">More Details</span>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-md-6">
                                <article class="ueEveColumn position-relative shadow bg-white mb-6">
                                    <div class="imgHolder position-relative">
                                        <a href="{{route('event.details')}}">
                                            <img src="{{asset('assets/images/img10.jpg')}}"
                                                class="img-fluid d-block w-100" alt="image description">
                                        </a>
                                        <time
                                            class="ueTimeTag position-absolute text-center d-flex bg-white fontAlter fwSemiBold text-lDark text-uppercase"
                                            datetime="2011-01-12">
                                            <span
                                                class="d-block text-white textDay flex-shrink-0 font-weight-bold">15</span>
                                            <span class="d-block py-2 px-3">OCT 2022</span>
                                        </time>
                                    </div>
                                    <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                                        <strong
                                            class="d-block ueCatTitle fwSemiBold text-secondary mb-2">Entertainement</strong>
                                        <h3 class="h3Small fwMedium mb-3">
                                            <a href="{{route('event.details')}}">Cultural Festival & Concert at
                                                domanion</a>
                                        </h3>
                                        <address>
                                            <ul class="list-unstyled ueScheduleList">
                                                <li>
                                                    <i class="fa fa-clock"></i>
                                                    1:00pm - 5:00pm
                                                </li>
                                                <li>
                                                    <i class="fa fa-map-marker"></i>
                                                    32 Quincy Street, Cambridge, MA
                                                </li>
                                            </ul>
                                        </address>
                                        <a href="{{route('event.details')}}"
                                            class="btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative border-0 p-0 mt-3 align-top"
                                            data-hover="More Details">
                                            <span class="d-block btnText">More Details</span>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-12 col-lg-4 uecColBg position-static">
                    <div class="pl-lg-5">
                        <header class="headingHead mb-6 mb-lg-8 mb-xl-12">
                            <h2 class="mb-0 fwSemiBold h2Small">Recent Documents</h2>
                        </header>
                        <article class="cdColumnWidget bg-white shadow px-6 pt-6 pb-5 mb-6">
                            <i class="fa fa-file-alt rounded-lg mb-6"
                                style="display:flex; max-width:100%; align-items:center; justify-content:center; color:white"></i>
                            <ul class="list-unstyled cdDocsList mb-0">
                                <li>
                                    <h3 class="font-weight-normal cdTitle mb-1">
                                        <a href="{{route('downloads')}}"> <i class="fa fa-file-pdf f-2x"></i>Town Board Applications</a>
                                    </h3>
                                    <time datetime="2011-01-12" class="d-block">October 4, 2020</time>
                                </li>
                                <li>
                                    <h3 class="font-weight-normal cdTitle mb-1">
                                        <a href="{{route('downloads')}}"><i class="fa fa-file-pdf f-2x"></i> Temporary Road Permit Application</a>
                                    </h3>
                                    <time datetime="2011-01-12" class="d-block">September 15, 2020</time>
                                </li>
                                <li>
                                    <h3 class="font-weight-normal cdTitle mb-1">
                                        <a href="{{route('downloads')}}"><i class="fa fa-file-pdf f-2x"></i> Commercial Business Permit</a>
                                    </h3>
                                    <time datetime="2011-01-12" class="d-block">September 8, 2020</time>
                                </li>
                                <li>
                                    <h3 class="font-weight-normal cdTitle mb-1">
                                        <a href="{{route('downloads')}}"> <i class="fa fa-file-pdf f-2x"></i> Housing Strategic Plan</a>
                                    </h3>
                                    <time datetime="2011-01-12" class="d-block">August 9, 2020</time>
                                </li>
                                <li>
                                    <h3 class="font-weight-normal cdTitle mb-1">
                                        <a href="{{route('downloads')}}"> <i class="fa fa-file-pdf f-2x"></i> Housing Strategic Plan</a>
                                    </h3>
                                    <time datetime="2011-01-12" class="d-block">August 9, 2020</time>
                                </li>
                                <li>
                                    <h3 class="font-weight-normal cdTitle mb-1">
                                        <a href="{{route('downloads')}}"> <i class="fa fa-file-pdf f-2x"></i> Housing Strategic Plan</a>
                                    </h3>
                                    <time datetime="2011-01-12" class="d-block">August 9, 2020</time>
                                </li>
                            </ul>
                            <footer class="ccwFoot text-center mt-2 pt-4">
                                <a href="{{route('downloads')}}" class="btn-link fontAlter">More Documents <i
                                        class="fas fa-chevron-right blIcn"></i></a>
                            </footer>
                        </article>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <section
        class="newsPulicationsBlock position-relative bg-light overflow-hidden pt-7 pb-4 pt-md-10 pb-md-4 pt-lg-16 pb-lg-10 pt-xl-22 pb-xl-16">
        <div class="container position-relative npbHolder">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <header class="headingHead pt-2 mb-7 mb-lg-0">
                        <h2 class="fwSemiBold mb-2">News and Publications</h2>
                        <p>The news about recent activities for needed peoples.</p>
                        <a href="{{route('news.speeches')}}"
                            class="btn btn-outline-secondary bdrWidthAlter text-capitalize position-relative border-0 p-0 mt-5 btnXsMinWidth"
                            data-hover="More News">
                            <span class="d-block btnText">More News</span>
                        </a>
                    </header>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-4">
                            <article class="npbColumn shadow bg-white mb-6">
                                <div class="imgHolder position-relative">
                                    <a href="javascript:void(0);">
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
                                        <i class="fas fa-comments"></i> 0
                                    </strong>
                                    <h3 class="fwSemiBold mb-6">
                                        <a href="{{route('news.speeches.details')}}">List of County Weekend
                                            Celebrations</a>
                                    </h3>
                                    <a href="{{route('news.speeches.details')}}"
                                        class="btnCr d-inline-block align-top fontAlter">Continue
                                        Reading <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <article class="npbColumn shadow bg-white mb-6">
                                <div class="imgHolder position-relative">
                                    <a href="javascript:void(0);">
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
                                        <i class="fas fa-comments"></i> 2
                                    </strong>
                                    <h3 class="fwSemiBold mb-6">
                                        <a href="{{route('news.speeches.details')}}">New Australian Economic Culture</a>
                                    </h3>
                                    <a href="{{route('news.speeches.details')}}"
                                        class="btnCr d-inline-block align-top fontAlter">Continue
                                        Reading <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <article class="npbColumn shadow bg-white mb-6">
                                <div class="imgHolder position-relative">
                                    <a href="javascript:void(0);">
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
                                        <i class="fas fa-comments"></i> 3
                                    </strong>
                                    <h3 class="fwSemiBold mb-6">
                                        <a href="{{route('news.speeches.details')}}">Smart County Design Plan 2025</a>
                                    </h3>
                                    <a href="{{route('news.speeches.details')}}"
                                        class="btnCr d-inline-block align-top fontAlter">Continue
                                        Reading <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="npbBgPattern w-100 h-100 bgCover position-absolute inaccessible"
            style="background-image: url({{@asset('assets/images/bgPattern2.jpg')}});"></span>
    </section>
    <section class="exploreHeightsBlock pt-4 pb-6 pb-md-9 pt-lg-7 pb-lg-14 pt-xl-11 pb-xl-20">
        <div class="container">
            <header class="headingHead text-center mb-12">
                <h2 class="fwSemiBold">Tourism Destinations</h2>
            </header>
        </div>
        <div class="row">
            <div class="echSliderWrap overflow-hidden w-100">
                <div class="echSlider mx-auto w-100">
                    <div>
                        <div class="col-12">
                            <div class="echColumn d-block w-100 bgCover position-relative"
                                style="background-image: url({{asset('assets/images/img15.jpg')}});">
                                <a href="{{asset('assets/images/img15.jpg')}}"
                                    class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                                    data-fancybox="true">
                                    <i class="far fa-image icn"></i>
                                    6
                                </a>
                                <div
                                    class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Teso
                                            North</strong>
                                        <span class="d-block">Kakapel</span>
                                    </h3>
                                    <a href="{{route('destination')}}" class="d-inline-block"><i
                                            class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center bg-white text-dark spanLinkGo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-12">
                            <div class="echColumn d-block w-100 bgCover position-relative"
                                style="background-image: url({{asset('assets/images/img17.jpg')}});">
                                <a href="{{asset('assets/images/img17.jpg')}}"
                                    class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                                    data-fancybox="true">
                                    <i class="far fa-image icn"></i>
                                    6
                                </a>
                                <div
                                    class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="d-block font-weight-normal fontBase echCatTitle mb-1">Samia</strong>
                                        <span class="d-block">Sio Port</span>
                                    </h3>
                                    <a href="{{route('destination')}}" class="d-inline-block"><i
                                            class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center bg-white text-dark spanLinkGo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-12">
                            <div class="echColumn d-block w-100 bgCover position-relative"
                                style="background-image: url({{asset('assets/images/img14.jpg')}});">
                                <a href="{{asset('assets/images/img14.jpg')}}"
                                    class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                                    data-fancybox="true">
                                    <i class="far fa-image icn"></i>
                                    6
                                </a>
                                <div
                                    class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="d-block font-weight-normal fontBase echCatTitle mb-1">Business</strong>
                                        <span class="d-block">Mayor of Arsonia</span>
                                    </h3>
                                    <a href="{{route('destination')}}" class="d-inline-block"><i
                                            class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center bg-white text-dark spanLinkGo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-12">
                            <div class="echColumn d-block w-100 bgCover position-relative"
                                style="background-image: url({{asset('assets/images/img16.jpg')}});">
                                <a href="{{asset('assets/images/img16.jpg')}}"
                                    class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                                    data-fancybox="true">
                                    <i class="far fa-image icn"></i>
                                    6
                                </a>
                                <div
                                    class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong
                                            class="d-block font-weight-normal fontBase echCatTitle mb-1">Culture</strong>
                                        <span class="d-block">Melton Art Museum</span>
                                    </h3>
                                    <a href="{{route('destination')}}" class="d-inline-block"><i
                                            class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center bg-white text-dark spanLinkGo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-12">
                            <div class="echColumn d-block w-100 bgCover position-relative"
                                style="background-image: url({{asset('assets/images/img18.jpg')}});">
                                <a href="{{asset('assets/images/img18.jpg')}}"
                                    class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                                    data-fancybox="true">
                                    <i class="far fa-image icn"></i>
                                    6
                                </a>
                                <div
                                    class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                                    <h3 class="mb-0 text-white">
                                        <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Public
                                            Places</strong>
                                        <span class="d-block">Cinema Teatre</span>
                                    </h3>
                                    <a href="{{route('destination')}}" class="d-inline-block"><i
                                            class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center bg-white text-dark spanLinkGo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
