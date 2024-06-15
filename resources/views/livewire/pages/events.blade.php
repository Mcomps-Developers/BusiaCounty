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
            <header class="px-4 pt-4 pb-3 ifbFilterHead bg-light px-lg-8 pt-lg-7 pb-lg-6">
                <div class="form-row mx-n3 align-items-end">
                    <div class="px-3 formCol">
                        <div class="form-group">
                            <label class="mb-2 d-block fwMedium fontAlter text-lDark">Start Date</label>
                            <input type="date"
                                class="shadow form-control inputHeightMedium inputBdrTransparent d-block w-">
                        </div>
                    </div>
                    <div class="px-3 formCol">
                        <div class="form-group">
                            <label class="mb-2 d-block fwMedium fontAlter text-lDark">End Date</label>
                            <input type="date"
                                class="shadow form-control inputHeightMedium inputBdrTransparent d-block w-">
                        </div>
                    </div>
                    <div class="px-3 formCol">
                        <div class="form-group">
                            <label class="mb-2 d-block fwMedium fontAlter text-lDark">Event Type</label>
                            <select class="shadow custom-select inputHeightMedium inputBdrTransparent">
                                <option selected>Event Type</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <button type="button"
                        class="p-0 mt-4 ml-auto mr-auto border-0 btn btnTheme ml-lg-3 mt-lg-0 mr-lg-0 font-weight-bold btnMinSm text-capitalize position-relative"
                        data-hover="Find Events">
                        <span class="d-block btnText">Find Events</span>
                    </button>
                </div>
            </header>
            <div class="pt-8 row justify-content-center pt-lg-11 pt-xl-14">
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="mb-6 bg-white shadow ueEveColumn position-relative mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="https://placehold.co/403x300" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="text-center bg-white ueTimeTag position-absolute d-flex fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="flex-shrink-0 text-white d-block textDay font-weight-bold">01</span>
                                <span class="px-3 py-2 d-block">OCT 2022</span>
                            </time>
                        </div>
                        <div class="px-5 pt-5 pb-8 ueDescriptionWrap">
                            <strong class="mb-2 d-block ueCatTitle fwSemiBold text-secondary">Entertainement</strong>
                            <h3 class="mb-3 h3Small fwMedium">
                                <a href="{{route('event.details')}}">Organizing City Photography Contest-2022</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        9:30am - 1:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        Mayor Office, Texas city
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="p-0 mt-3 align-top border-0 btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="mb-6 bg-white shadow ueEveColumn position-relative mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="https://placehold.co/403x300" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="text-center bg-white ueTimeTag position-absolute d-flex fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="flex-shrink-0 text-white d-block textDay font-weight-bold">15</span>
                                <span class="px-3 py-2 d-block">OCT 2022</span>
                            </time>
                        </div>
                        <div class="px-5 pt-5 pb-8 ueDescriptionWrap">
                            <strong class="mb-2 d-block ueCatTitle fwSemiBold text-secondary">Entertainement</strong>
                            <h3 class="mb-3 h3Small fwMedium">
                                <a href="{{route('event.details')}}">Cultural Festival &amp; Concert at domanion</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        1:00pm - 5:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        32 Quincy Street, Cambridge, MA
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="p-0 mt-3 align-top border-0 btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="mb-6 bg-white shadow ueEveColumn position-relative mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="https://placehold.co/403x300" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="text-center bg-white ueTimeTag position-absolute d-flex fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="flex-shrink-0 text-white d-block textDay font-weight-bold">08</span>
                                <span class="px-3 py-2 d-block">NOV 2022</span>
                            </time>
                        </div>
                        <div class="px-5 pt-5 pb-8 ueDescriptionWrap">
                            <strong class="mb-2 d-block ueCatTitle fwSemiBold text-secondary">Conference</strong>
                            <h3 class="mb-3 h3Small fwMedium">
                                <a href="{{route('event.details')}}">Annual Cycling Race 2020 for the Covid-19
                                    Donation</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        3:00pm - 7:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        32 Quincy Street, Cambridge, MA
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="p-0 mt-3 align-top border-0 btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="mb-6 bg-white shadow ueEveColumn position-relative mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="https://placehold.co/403x300" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="text-center bg-white ueTimeTag position-absolute d-flex fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="flex-shrink-0 text-white d-block textDay font-weight-bold">23</span>
                                <span class="px-3 py-2 d-block">NOV 2022</span>
                            </time>
                        </div>
                        <div class="px-5 pt-5 pb-8 ueDescriptionWrap">
                            <strong class="mb-2 d-block ueCatTitle fwSemiBold text-secondary">Health &amp;
                                Sports</strong>
                            <h3 class="mb-3 h3Small fwMedium">
                                <a href="{{route('event.details')}}">Celebrating World Fiteness Day at White
                                    Corner’20</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        3:00pm - 7:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        Millenia Orlando, USA
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="p-0 mt-3 align-top border-0 btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="mb-6 bg-white shadow ueEveColumn position-relative mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="https://placehold.co/403x300" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="text-center bg-white ueTimeTag position-absolute d-flex fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="flex-shrink-0 text-white d-block textDay font-weight-bold">03</span>
                                <span class="px-3 py-2 d-block">DEC 2022</span>
                            </time>
                        </div>
                        <div class="px-5 pt-5 pb-8 ueDescriptionWrap">
                            <strong class="mb-2 d-block ueCatTitle fwSemiBold text-secondary">Meeting</strong>
                            <h3 class="mb-3 h3Small fwMedium">
                                <a href="{{route('event.details')}}">City Innovation and Technology Committee
                                    Meeting</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        1:00pm - 5:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        Mastanow City Council
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="p-0 mt-3 align-top border-0 btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="mb-6 bg-white shadow ueEveColumn position-relative mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="https://placehold.co/403x300" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="text-center bg-white ueTimeTag position-absolute d-flex fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="flex-shrink-0 text-white d-block textDay font-weight-bold">16</span>
                                <span class="px-3 py-2 d-block">DEC 2022</span>
                            </time>
                        </div>
                        <div class="px-5 pt-5 pb-8 ueDescriptionWrap">
                            <strong class="mb-2 d-block ueCatTitle fwSemiBold text-secondary">Workshop</strong>
                            <h3 class="mb-3 h3Small fwMedium">
                                <a href="{{route('event.details')}}">Faith Forward Future - Social Awareness Seminar</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        9:30am - 1:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        15 Champions Center, Crewey
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="p-0 mt-3 align-top border-0 btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
            <nav aria-label="Page navigation">
                <ul class="pt-2 pagination justify-content-center">
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
