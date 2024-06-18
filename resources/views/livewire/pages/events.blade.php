<main>
    @section('title')
    Events
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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Resources</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="ItemfullBlock pt-7 pb-7 pt-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-22 pb-xl-19">
        <div class="container">
            <div class="pt-8 row justify-content-center pt-lg-11 pt-xl-14">
                @foreach ($events as $item)
                <div class="col-12 col-md-3">
                    <article class="mb-6 bg-white shadow ueEveColumn position-relative">
                        <div class="imgHolder position-relative">
                            <a href="{{ route('event.details',['slug'=>$item->slug,'reference'=>$item->reference]) }}">
                                <img src="https://busia.mcomps.africa/assets/img/events/{{ $item->image }}"
                                    class="img-fluid d-block w-100">
                            </a>
                            <time
                                class="text-center bg-white ueTimeTag position-absolute d-flex fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="{{date('Y-m-d',strtotime($item->start_date_and_time))}}">
                                <span
                                    class="flex-shrink-0 text-white d-block textDay font-weight-bold">{{date('d',strtotime($item->start_date_and_time))}}</span>
                                <span class="px-3 py-2 d-block">{{date('M
                                    Y',strtotime($item->start_date_and_time))}}</span>
                                <span class="flex-shrink-0 text-white d-block textDay font-weight-bold">
                                    @if (\Carbon\Carbon::parse($item->start_date_and_time)>
                                    \Carbon\Carbon::now())
                                    Upcoming
                                    @elseif (\Carbon\Carbon::parse($item->end_date_and_time)< \Carbon\Carbon::now() )
                                        Ended @else Ongoing @endif </span>
                            </time>
                        </div>
                        <div class="px-5 pt-5 pb-8 ueDescriptionWrap">
                            <strong
                                class="mb-2 d-block ueCatTitle fwSemiBold text-secondary">{{$item->category->name}}</strong>
                            <h3 class="mb-3 h3Small fwMedium">
                                <a
                                    href="{{ route('event.details',['slug'=>$item->slug,'reference'=>$item->reference]) }}">{{$item->title}}</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="fa fa-clock"></i>
                                        {{date('h:iA',strtotime($item->start_date_and_time))}} -
                                        {{date('h:iA',strtotime($item->end_date_and_time))}}
                                    </li>
                                    <li style="text-transform: capitalize">
                                        <i class="fa fa-map-marker"></i>
                                        {{$item->location}}
                                    </li>
                                </ul>
                            </address>
                            <a href="{{ route('event.details',['slug'=>$item->slug,'reference'=>$item->reference]) }}"
                                class="p-0 mt-3 align-top border-0 btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <nav aria-label="Page navigation">
                <ul class="pt-2 pagination justify-content-center">
                    {{ $events->links('pagination::bootstrap-5') }}
                </ul>
            </nav>
        </div>
    </section>
</main>
