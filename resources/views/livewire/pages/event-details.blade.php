<main>
    @section('title')
    {{$event->title}}
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">Events</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('events')}}">Event</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event Details Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <article class="ItemfullBlock pt-7 pb-7 pt-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-22 pb-xl-19">
        <div class="container">
            <div class="row">
                <div class="mb-6 col-12 col-lg-9">
                    <div class="pr-lg-5 pr-xl-15 bodyFontAlter">
                        <header class="mb-10 dtlItemHeader mt-n1">
                            <strong class="dtlihTitle d-block">In <a
                                    href="javascript:void(0);">{{$event->category->name}}</a></strong>
                            <h2 class="mb-9">{{$event->title}}</h2>
                            <div class="imgHolder">
                                <img src="https://placehold.co/873x648" class="img-fluid w-100" alt="image description">
                            </div>
                            <address class="mb-0 dtlhDress fontAlter">
                                <div class="row no-gutters">
                                    <div class="px-4 pt-6 pb-12 col-12 col-sm-4 px-md-7">
                                        <strong class="mb-2 d-block title fwSemiBold">Date</strong>
                                        <span class="d-block">
                                            <time datetime="{{date('Y-m-d',strtotime($event->start_date_and_time))}}">
                                                {{date('M
                                                d,
                                                Y',strtotime($event->start_date_and_time))}}</time>
                                        </span>
                                        <i class="fa fa-calendar icnWatermark"><span class="sr-only">icon</span></i>
                                    </div>
                                    <div class="px-4 pt-6 pb-12 col-12 col-sm-4 px-md-7">
                                        <strong class="mb-2 d-block title fwSemiBold">Time</strong>
                                        <span class="d-block">
                                            <time datetime="{{date('Y-m-d',strtotime($event->start_date_and_time))}}">
                                                {{date('h:iA',strtotime($event->start_date_and_time))}}
                                                - {{date('h:iA',strtotime($event->end_date_and_time))}}</time>
                                        </span>
                                        <i class="fa fa-clock icnWatermark"><span class="sr-only">icon</span></i>
                                    </div>
                                    <div class="px-4 pt-6 pb-12 col-12 col-sm-4 px-md-7">
                                        <strong class="mb-2 d-block title fwSemiBold">Location</strong>
                                        <span class="d-block"
                                            style="text-transform: capitalize">{{$event->location}}</span>
                                        <i class="fa fa-map-marker icnWatermark"><span class="sr-only">icon</span></i>
                                    </div>
                                </div>
                            </address>
                        </header>
                        {!! $event->description !!}
                        <ul class="mb-8 nav nav-tabs scgTabList fontAlter" id="scgTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab"
                                    aria-controls="gallery" aria-selected="false">Gallery</a>
                            </li>
                        </ul>
                        <div class="mb-10 tab-content scgTabContent" id="scgTabsContent">
                            <div class="tab-pane fade show active" id="gallery" role="tabpanel"
                                aria-labelledby="gallery-tab">
                                <div class="overflow-hidden">
                                    <ul class="flex-wrap list-unstyled d-flex scgGalleryList">
                                        <li>
                                            <a href="{{route('event.details')}}" class="lightbox" data-fancybox="true">
                                                <img src="https://placehold.co/403x220" class="img-fluid"
                                                    alt="image description">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('event.details')}}" class="lightbox" data-fancybox="true">
                                                <img src="https://placehold.co/403x220" class="img-fluid"
                                                    alt="image description">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('event.details')}}" class="lightbox" data-fancybox="true">
                                                <img src="https://placehold.co/403x220" class="img-fluid"
                                                    alt="image description">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('event.details')}}" class="lightbox" data-fancybox="true">
                                                <img src="https://placehold.co/403x220" class="img-fluid"
                                                    alt="image description">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('event.details')}}" class="lightbox" data-fancybox="true">
                                                <img src="https://placehold.co/403x220" class="img-fluid"
                                                    alt="image description">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('event.details')}}" class="lightbox" data-fancybox="true">
                                                <img src="https://placehold.co/403x220" class="img-fluid"
                                                    alt="image description">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <aside class="text-center saShareAside d-flex justify-content-between align-items-center">
                            <strong class="mb-2 d-block text-lDark fwSemiBold fontAlter title">Share Event</strong>
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
                                        <i class="fab fa-twitter" aria-hidden="true"><span
                                                class="sr-only">twitter</span></i>
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
                    </div>
                </div>
                <div class="mb-6 col-12 col-lg-3">
                    <div class="ml-lg-n5">
                        <aside class="sidebar">
                            {{-- <section class="mb-6 widget widgetSearch mb-lg-10">
                                <form action="#" class="searchForm">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search Here&hellip;">
                                        <div class="input-group-append">
                                            <button
                                                class="btn btnTheme btnNoOver d-flex align-items-center justify-content-center"
                                                type="button">
                                                <i class="icomoon-search"><span class="sr-only">search</span></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section> --}}
                            @if ($featuredEvent->count()>0)
                            <section class="mb-6 widget widgetFeaturEvent mb-lg-10">
                                <h3 class="mb-5 fwMedium">Featured Event</h3>
                                @foreach ($featuredEvent as $item)
                                <article class="bg-white shadow ueEveColumn position-relative w-100">
                                    <div class="imgHolder position-relative">
                                        <a
                                            href="{{route('event.details',['slug'=>$item->slug,'reference'=>$item->reference])}}">
                                            <img src="https://placehold.co/383x285" class="img-fluid d-block w-100"
                                                alt="image description">
                                        </a>
                                        <time
                                            class="text-center bg-white ueTimeTag position-absolute d-flex fontAlter fwSemiBold text-lDark text-uppercase"
                                            datetime="2011-01-12">
                                            <span
                                                class="flex-shrink-0 text-white d-block textDay font-weight-bold">15</span>
                                            <span class="px-3 py-2 d-block">OCT 2022</span>
                                        </time>
                                    </div>
                                    <div class="px-5 pt-5 pb-8 ueDescriptionWrap">
                                        <strong
                                            class="mb-2 d-block ueCatTitle fwSemiBold text-secondary">{{$item->category->name}}</strong>
                                        <h3 class="mb-3 h3Small fwMedium">
                                            <a
                                                href="{{route('event.details',['slug'=>$item->slug,'reference'=>$item->reference])}}">{{$item->title}}
                                            </a>
                                        </h3>
                                        <address>
                                            <ul class="pl-0 list-unstyled ueScheduleList">
                                                <li>
                                                    <i class="fa fa-clock icn position-absolute"><span
                                                            class="sr-only">icon</span></i>
                                                    {{date('h:iA',strtotime($item->start_date_and_time))}}
                                                    - {{date('h:iA',strtotime($item->end_date_and_time))}}
                                                </li>
                                                <li>
                                                    <i class="fa fa-map-marker icn position-absolute"><span
                                                            class="sr-only">icon</span></i>
                                                    {{$item->location}}
                                                </li>
                                            </ul>
                                        </address>
                                        <a href="{{route('event.details',['slug'=>$item->slug,'reference'=>$item->reference])}}"
                                            class="p-0 mt-3 align-top border-0 btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative"
                                            data-hover="More Details">
                                            <span class="d-block btnText">More Details</span>
                                        </a>
                                    </div>
                                </article>
                                @endforeach

                            </section>
                            @endif

                            <nav class="mb-6 widget widgetArchiveList mb-lg-10">
                                <h3 class="mb-5 fwMedium">Categories</h3>
                                <ul class="pl-0 list-unstyled">
                                    @foreach ($eventCategories as $item)
                                    <li>
                                        <a href="javascript:void(0);">{{$item->name}}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </nav>
                            <nav class="mb-6 widget widgetUpcoming mb-lg-10">
                                <h3 class="mb-5 fwMedium">Related Events</h3>
                                <ul class="pl-0 list-unstyled mb-7">
                                    @foreach ($relatedEvents as $item)
                                    <li>
                                        <div class="flex-shrink-0 mt-1 mr-4 imgHolder">
                                            <img src="https://busia.mcomps.africa/assets/img/events/{{ $item->image }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="descrWrap">
                                            <h4 class="mb-1 fwMedium">
                                                <a
                                                    href="{{ route('event.details',['slug'=>$item->slug,'reference'=>$item->reference]) }}">{{$item->title}}</a>
                                            </h4>
                                            <time datetime="2011-01-12" class="d-block">{{date('M d,
                                                Y',strtotime($item->start_date_and_time))}} <br>@
                                                {{date('h:iA',strtotime($item->start_date_and_time))}}
                                                - {{date('h:iA',strtotime($item->end_date_and_time))}}</time>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                                <a href="{{route('events')}}" class="readMoreLink fontAlter fwMedium">View All Events <i
                                        class="fas fa-chevron-right btnRmlIcn" aria-hidden="true"><span
                                            class="sr-only">icon</span></i></a>
                            </nav>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>
