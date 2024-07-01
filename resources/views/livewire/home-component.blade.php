<main>
    <style>
        .ibSlider .dotsList {
            position: absolute;
            left: 15px;
            bottom: 20px;
            right: 15px;
            z-index: 2;
        }

        .ibColumn {
            z-index: 1;
            min-height: 90vh;
            /* Default for larger screens */
        }

        @media (max-width: 480px) {
            .ibColumn {
                min-height: unset;
                /* Remove any minimum height set for larger screens */
                max-height: 90vh;
                /* Maximum height for mobile devices */
            }
        }

        @media (max-width: 600px) {
            .ibColumn {
                min-height: unset;
                /* Remove any minimum height set for larger screens */
                max-height: 90vh;
                /* Maximum height for mobile devices */
            }
        }

        @media (min-width: 601px) and (max-width: 1024px) {
            .ibColumn {
                min-height: 90vh;
                /* Example height for tablets */
            }
        }

        @media (min-width: 1025px) and (max-width: 1440px) {
            .ibColumn {
                min-height: 85vh;
                /* Example height for small desktops */
            }
        }

        @media (min-width: 1441px) {
            .ibColumn {
                min-height: 90vh;
                /* Default height for large desktops */
            }
        }
    </style>
    @section('title')
        The County Government of Busia
    @endsection
    <style>
        .ibBgImage {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
        }

        .ibColumn {
            height: 810px;
            /* Fixed height for the aspect ratio */
        }

        @media (max-width: 1920px) {
            .ibColumn {
                height: auto;
                /* Adjust the height on smaller screens */
            }
        }

        @media (max-width: 767px) {
            .featuresAsideBlock {
                /* display: none; */
            }
        }
    </style>
    <div class="introBlock ibSlider">
        @foreach ($sliders as $item)
            <div>
                <article class="overflow-hidden text-center text-white card d-flex w-100 position-relative ibColumn">
                    <div class="alignHolder d-flex align-items-center w-100">
                        <div class="pt-20 pb-20 align w-100 pt-md-40 pb-md-30 px-md-17">
                            <div class="container position-relative">
                                <div class="row">
                                    <div
                                        class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2 fzMedium px-xlwd-10">
                                        {{-- <p>{{$item->heading}}</p> --}}
                                        @if ($item->button_text)
                                            <a href="{{ $item->button_url }}"
                                                class="p-0 mt-6 border-0 btn btnTheme font-weight-bold btnMinSm text-capitalize position-relative"
                                                data-hover="Discover More">
                                                <span class="d-block btnText">{{ $item->button_text }}</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="ibBgImage bgCover position-absolute"
                        style="background-image: url(https://busia.mcomps.africa/assets/img/sliders/{{ $item->image }}); opacity:100%;"></span>
                </article>
            </div>
        @endforeach
    </div>
    <aside class="text-white featuresAsideBlock position-relative">
        <div class="container">
            <div class="flatpWrap position-relative mt-n8 mt-md-n18" style="transform: scale(0.5)">
                <ul class="flex-wrap mb-0 overflow-hidden list-unstyled fabFeaturesList d-flex" style="background-color: #9ECA3E">
                    <li>
                        <a href="{{ route('executive') }}" class="px-2 pt-4 pb-10 text-center fflColumn d-block w-100">
                            <span
                                class="mx-auto mb-4 icnWrap d-flex align-items-center justify-content-center rounded-circle">
                                <i class="fa fa-landmark"></i>
                            </span>
                            <h2 class="mb-0">The Executive</h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('jobs') }}" class="px-2 pt-4 pb-10 text-center fflColumn d-block w-100">
                            <span
                                class="mx-auto mb-4 icnWrap d-flex align-items-center justify-content-center rounded-circle">
                                <i class="fa fa-briefcase"></i>
                            </span>
                            <h2 class="mb-0">Jobs</h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('investor') }}" class="px-2 pt-4 pb-10 text-center fflColumn d-block w-100">
                            <span
                                class="mx-auto mb-4 icnWrap d-flex align-items-center justify-content-center rounded-circle">
                                <i class="fa fa-dollar-sign"></i>
                            </span>
                            <h2 class="mb-0">Invest</h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tenders') }}" class="px-2 pt-4 pb-10 text-center fflColumn d-block w-100">
                            <span
                                class="mx-auto mb-4 icnWrap d-flex align-items-center justify-content-center rounded-circle">
                                <i class="fa fa-folder-open"></i>
                            </span>
                            <h2 class="mb-0">Tenders</h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('eservices') }}" class="px-2 pt-4 pb-10 text-center fflColumn d-block w-100">
                            <span
                                class="mx-auto mb-4 icnWrap d-flex align-items-center justify-content-center rounded-circle">
                                <i class="fa fa-laptop"></i>
                            </span>
                            <h2 class="mb-0">E-Services</h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="px-2 pt-4 pb-10 text-center fflColumn d-block w-100">
                            <span
                                class="mx-auto mb-4 icnWrap d-flex align-items-center justify-content-center rounded-circle">
                                <i class="fa fa-ambulance"></i>
                            </span>
                            <h2 class="mb-0">Emergency</h2>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- <div class="pt-6 pb-6 text-center fabBtNoteTextWrap fontAlter fzMedium pt-md-10 pb-md-10 pb-lg-14">
            <div class="container">
                <div class="d-lg-flex justify-content-center align-items-center">
                    <p class="mb-lg-0">Partner with {{ config('app.name') }} and invest in an ocean of opportunities.
                    </p>
                    <a href="{{ route('investor') }}"
                        class="p-0 border-0 btn btn-dark btnSwitchDark fwMedium position-relative btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
                        data-hover="Let’s explore more"><span class="d-block btnText fwMedium">Let’s explore
                            more</span></a>
                </div>
            </div>
        </div> --}}
    </aside>
    <div class="supportWidgetSection position-relative" style="margin-top: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rounded spwWrap d-flex flex-column flex-md-row hasShadow mt-n10 mt-lg-n15 bg-dark">
                        <div class="text-center text-white spwCol d-flex w-100 align-items-center position-relative">
                            <div class="px-3 py-6 spwInerWrap px-lg-5 py-sm-10 py-md-6 py-lgwd-8 w-100">
                                <h2 class="mb-1 text-white h2 fwSemiBold">Vision</h2>
                                <p class="mb-4">To be a prosperous County where residents enjoy high quality of life
                                    in
                                    a sustainable environment.</p>
                            </div>
                            {{-- <span class="spwIcn position-absolute"><img src="{{ asset('assets/images/img198.png') }}"
                                    class="img-fluid" alt="image description"></span> --}}
                        </div>
                        <div
                            class="text-center text-white spwCol d-flex w-100 align-items-center position-relative bg-success" style="background-color: #9ECA3E">
                            <div class="px-3 py-6 spwInerWrap px-lg-5 py-sm-10 py-md-6 py-lgwd-8 w-100">
                                <h2 class="mb-1 text-white h2 fwSemiBold">Mission</h2>
                                <p class="mb-4">To foster equitable and sustainable economic development through
                                    effective and efficient mobilization and utilization of available resources.</p>
                            </div>
                            {{-- <span class="spwIcn position-absolute"><img src="{{ asset('assets/images/img199.png') }}"
                                    class="img-fluid" alt="image description"></span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <article class="aboutMayorBlock pt-md-7 pt-xl-11 pb-7 pb-md-13 pb-lg-20 pb-xl-28">
        <div class="container">
            <div class="row">
                <div class="pt-4 col-12 col-md-6">
                    <h2 class="mb-6 lh44">{{ $note->title }}</h2>
                    {!! $note->message !!}
                    <blockquote
                        class="py-1 pl-4 mt-6 meetQuote fontAlter text-lDark pl-lg-8 pr-md-12 pr-lg-20 pr-xl-28">
                        <q class="mb-4 d-block">{{ $note->quoted_text }}</q>
                        <cite class="d-block fsNormal">{{ $note->name }}, <span
                                class="fontBase ctSubtitleText">{{ $note->designation }}</span></cite>
                    </blockquote>
                    {{-- <a href="https://www.youtube.com/watch7eaa.html?v=_sI_Ps7JSEk"
                        class="mt-4 align-top btnPlayLink fontAlter position-relative d-inline-block mt-lg-7 lightbox"
                        data-fancybox="true">
                        <i
                            class="icnPlay d-flex align-items-center justify-content-center position-absolute fa fa-play rounded-circle"><span
                                class="sr-only">icon</span></i>
                        <div class="bplTextWrap">
                            <em class="d-block fsNormal">
                                <span class="d-block">Welcome Speech</span>
                                <span class="d-block">Video Formart</span>
                            </em>
                        </div>
                    </a> --}}
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-20 imgTwoImageHolder position-relative mt-7 mt-md-0 mb-md-0">
                        <span class="img img1 position-relative d-block">
                            @if ($note->photo)
                                <img src="https://busia.mcomps.africa/assets/img/governors/{{ $note->photo }}"
                                    class="img-fluid" height="700" width="500">
                            @else
                                <img src="https://placehold.co/600x650" class="img-fluid">
                            @endif

                        </span>

                    </div>
                </div>
            </div>
        </div>
    </article>
    <aside class="text-center text-white counterftAsideBlock position-relative d-flex bg-dark">
        <div class="alignHolder d-flex align-items-center w-100 position-relative">
            <div class="pb-5 align w-100 pt-9">
                <div class="container">
                    <ul class="flex-wrap mb-0 list-unstyled cfbFeatList d-flex justify-content-center">
                        <li>
                            <span class="mb-4 icnWrap d-flex align-items-center justify-content-center w-100">
                                <i class="fa fa-users"></i>
                            </span>
                            <h3 class="mb-3 text-white fwSemiBold textCount"><span class="">
                                    @if ($homeStats->population > 999999)
                                        {{ number_format($homeStats->population / 1000000) }}M
                                    @elseif ($homeStats->population > 999)
                                        {{ number_format($homeStats->population / 1000) }}K
                                    @else
                                        {{ $homeStats->population }}
                                    @endif
                                </span>
                            </h3>
                            <h4 class="mb-0 subtitle font-weight-normal">Population</h4>
                        </li>
                        <li>
                            <span class="mb-4 icnWrap d-flex align-items-center justify-content-center w-100">
                                <i class="fa fa-map"></i>
                            </span>
                            <h3 class="mb-3 text-white fwSemiBold textCount"><span
                                    class="">{{ $homeStats->land_coverage }}</span><small> (Sq Km)</small>
                            </h3>
                            <h4 class="mb-0 subtitle font-weight-normal">Coverrage
                            </h4>
                        </li>
                        <li>
                            <span class="mb-4 icnWrap d-flex align-items-center justify-content-center w-100">
                                <i class="fa fa-map-marker"></i>
                            </span>
                            <h3 class="mb-3 text-white fwSemiBold textCount"><span
                                    class="">{{ number_format($subcounties) }}</span>
                            </h3>
                            <h4 class="mb-0 subtitle font-weight-normal">Sub-Counties
                            </h4>
                        </li>
                        <li>
                            <span class="mb-4 icnWrap d-flex align-items-center justify-content-center w-100">
                                <i class="fa fa-location"></i>
                            </span>
                            <h3 class="mb-3 text-white fwSemiBold textCount"><span
                                    class="">{{ number_format($wards) }}
                            </h3>
                            <h4 class="mb-0 subtitle font-weight-normal">Wards
                            </h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <span class="cfbBgWrap bgCover position-absolute h-100 w-100 inaccessible"
            style="background-image: url({{ @asset('assets/images/bg01.png') }});"></span>
    </aside>
    <section class="pb-3 upcomeventsBlock position-relative pt-7 pt-md-9 pb-md-6 pt-lg-14 pb-lg-11 pt-xl-20 pb-xl-16">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="pr-lg-8">
                        <header class="mb-6 headingHead mb-lg-8 mb-xl-12">
                            <div class="row align-items-end">
                                <div class="col-12 col-sm-6 col-md-7">
                                    <h2 class="mb-sm-0 fwSemiBold h2Small">Events</h2>
                                    <p>Take a look at our most recent events.</p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-5 d-sm-flex justify-content-sm-end">
                                    <a href="{{ route('events') }}" class="btn-link fontAlter">See All Events
                                        <i class="fa fa-chevron-right blIcn"></i></a>
                                </div>
                            </div>
                        </header>
                        <div class="row">
                            @foreach ($recentEvents as $item)
                                <div class="col-12 col-md-6">
                                    <article class="mb-6 bg-white shadow ueEveColumn position-relative">
                                        <div class="imgHolder position-relative">
                                            <a
                                                href="{{ route('event.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}">
                                                <img src="https://busia.mcomps.africa/assets/img/events/{{ $item->image }}"
                                                    class="img-fluid d-block w-100">
                                            </a>
                                            <time
                                                class="text-center bg-white ueTimeTag position-absolute d-flex fontAlter fwSemiBold text-lDark text-uppercase"
                                                datetime="{{ date('Y-m-d', strtotime($item->start_date_and_time)) }}">
                                                <span
                                                    class="flex-shrink-0 text-white d-block textDay font-weight-bold">{{ date('d', strtotime($item->start_date_and_time)) }}</span>
                                                <span
                                                    class="px-3 py-2 d-block">{{ date(
                                                        'M
                                                                                                                                                                                                                                                                                                                    Y',
                                                        strtotime($item->start_date_and_time),
                                                    ) }}</span>
                                                <span
                                                    class="flex-shrink-0 text-white d-block textDay font-weight-bold">
                                                    @if (\Carbon\Carbon::parse($item->start_date_and_time) > \Carbon\Carbon::now())
                                                        Upcoming
                                                    @elseif (\Carbon\Carbon::parse($item->end_date_and_time) < \Carbon\Carbon::now())
                                                        Ended
                                                    @else
                                                        Ongoing
                                                    @endif
                                                </span>
                                            </time>
                                        </div>
                                        <div class="px-5 pt-5 pb-8 ueDescriptionWrap">
                                            <strong
                                                class="mb-2 d-block ueCatTitle fwSemiBold text-secondary">{{ $item->category->name }}</strong>
                                            <h3 class="mb-3 h3Small fwMedium">
                                                <a
                                                    href="{{ route('event.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}">{{ $item->title }}</a>
                                            </h3>
                                            <address>
                                                <ul class="list-unstyled ueScheduleList">
                                                    <li>
                                                        <i class="fa fa-clock"></i>
                                                        {{ date('h:iA', strtotime($item->start_date_and_time)) }} -
                                                        {{ date('h:iA', strtotime($item->end_date_and_time)) }}
                                                    </li>
                                                    <li style="text-transform: capitalize">
                                                        <i class="fa fa-map-marker"></i>
                                                        {{ $item->location }}
                                                    </li>
                                                </ul>
                                            </address>
                                            <a href="{{ route('event.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}"
                                                class="p-0 mt-3 align-top border-0 btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative"
                                                data-hover="More Details">
                                                <span class="d-block btnText">More Details</span>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <aside class="col-12 col-lg-4 uecColBg position-static">
                    <div class="pl-lg-5">
                        <header class="mb-6 headingHead mb-lg-8 mb-xl-12">
                            <h2 class="mb-0 fwSemiBold h2Small">Recent Documents</h2>
                        </header>
                        <article class="px-6 pt-6 pb-5 mb-6 bg-white shadow cdColumnWidget">
                            <i class="mb-6 rounded-lg fa fa-file-alt"
                                style="display:flex; max-width:100%; align-items:center; justify-content:center; color:white"></i>
                            <ul class="mb-0 list-unstyled cdDocsList">
                                @foreach ($recentDocuments as $item)
                                    <li>
                                        <h3 class="mb-1 font-weight-normal cdTitle">
                                            <a href="https://busia.mcomps.africa/assets/documents/uploads/{{ $item->document }}"
                                                target="_/blank">
                                                <i class="fa fa-file-pdf f-2x"></i>{{ $item->title }}</a>
                                        </h3>
                                        <time datetime="2011-01-12"
                                            class="d-block">{{ date('M d, Y', strtotime($item->created_at)) }}</time>
                                    </li>
                                @endforeach

                            </ul>
                            <footer class="pt-4 mt-2 text-center ccwFoot">
                                <a href="{{ route('downloads') }}" class="btn-link fontAlter">More Documents <i
                                        class="fa fa-chevron-right blIcn"></i></a>
                            </footer>
                        </article>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <section
        class="pb-4 overflow-hidden newsPulicationsBlock position-relative bg-light pt-7 pt-md-10 pb-md-4 pt-lg-16 pb-lg-10 pt-xl-22 pb-xl-16">
        <div class="container position-relative npbHolder">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <header class="pt-2 headingHead mb-7 mb-lg-0">
                        <h2 class="mb-2 fwSemiBold">News and Publications</h2>
                        <p>The most recent news, publications and speeches.</p>
                        <a href="{{ route('news.speeches') }}"
                            class="p-0 mt-5 border-0 btn btn-outline-secondary bdrWidthAlter text-capitalize position-relative btnXsMinWidth"
                            data-hover="More News">
                            <span class="d-block btnText">More News</span>
                        </a>
                    </header>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        @foreach ($recentBlogs as $item)
                            <div class="col-12 col-md-6 col-xl-4">
                                <article class="mb-6 bg-white shadow npbColumn">
                                    <div class="imgHolder position-relative">
                                        <a href="javascript:void(0);">
                                            <img src="https://busia.mcomps.africa/assets/img/blogs/{{ $item->image }}"
                                                class="img-fluid w-100 d-block">
                                        </a>
                                        <time datetime="2011-01-12"
                                            class="px-2 py-1 text-white npbTimeTag font-weight-bold fontAlter position-absolute">{{ date('d M Y', strtotime($item->created_at)) }}</time>
                                    </div>
                                    <div class="px-5 pt-8 pb-5 npbDescriptionWrap">
                                        <strong class="mb-1 d-block npbcmWrap font-weight-normal">
                                            <span class="mr-5">{{ $item->category->name }}</span>
                                            <i class="fa fa-eye"></i> {{ $item->views }}
                                        </strong>
                                        <h3 class="mb-6 fwSemiBold">
                                            <a
                                                href="{{ route('news.speeches.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}">{{ $item->title }}</a>
                                        </h3>
                                        <a href="{{ route('news.speeches.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}"
                                            class="align-top btnCr d-inline-block fontAlter">Continue
                                            Reading <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <span class="npbBgPattern w-100 h-100 bgCover position-absolute inaccessible"
            style="background-image: url({{ @asset('assets/images/bgPattern2.jpg') }});"></span>
    </section>
    <section class="pt-4 pb-6 exploreHeightsBlock pb-md-9 pt-lg-7 pb-lg-14 pt-xl-11 pb-xl-20">
        <div class="container">
            <header class="mb-12 text-center headingHead">
                <h2 class="fwSemiBold">Recent Projects</h2>
            </header>
        </div>
        <div class="row">
            <div class="overflow-hidden echSliderWrap w-100">
                <div class="mx-auto echSlider w-100">
                    @foreach ($projects as $item)
                        <div>
                            <div class="col-12">
                                <div class="echColumn d-block w-100 bgCover position-relative"
                                    style="background-image: url(https://busia.mcomps.africa/assets/img/projects/covers/{{ $item->cover_image }});">
                                    <div
                                        class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                        <h3 class="mb-0 text-white">
                                            <strong
                                                class="mb-1 d-block font-weight-normal fontBase echCatTitle">{{ $item->department->title }}</strong>
                                            <span class="d-block">{{ $item->title }}</span>
                                        </h3>
                                        <a href="{{ route('project.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}"
                                            class="d-inline-block"><i
                                                class="bg-white rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center text-dark spanLinkGo"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</main>
