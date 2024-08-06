<main>
    @section('title')
        {{ $department->title }}
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{@asset('assets/images/img158.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('departments') }}">Departments</a></li>
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
                                {{ $department->title }}</h2>

                            @if ($department->cover_image)
                                <img class="alignHolder d-flex w-100 align-items-center"
                                    src="http://dashboard.localhost/assets/img/departments/{{ $department->cover_image }}">
                            @endif
                        </header>

                        <div class="mb-6 dcsPatchWrap mb-lg-11">
                            {!! $department->description !!}
                        </div>
                    </div>
                </div>
                <div class="mb-6 col-12 col-lg-4 col-xl-3 order-lg-1">
                    <aside class="pt-1 dscSidebar mr-xl-n5">
                        <nav class="px-6 py-5 mb-6 widget mb-lg-10 widgetDepartsNav widgetBgLight">
                            <h3 class="mb-4 fwSemiBold">
                                <a href="{{ route('departments') }}" class="mr-1 align-middle btnDcsBack"><i
                                        class="fas fa-chevron-left"><span class="sr-only">icon</span></i></a>
                                All Departments
                            </h3>
                            <ul class="pl-0 mb-0 mb-3 list-unstyled mx-n2">
                                @foreach ($departments as $item)
                                    <li class="{{ request()->route('slug') === $item->slug ? 'active' : '' }}">
                                        <a
                                            href="{{ route('department.details', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
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
                        <h2 class="mb-4 fwSemiBold">Administration</h2>
                        <p>Meet the department leadership team.</p>
                    </header>
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                <div class="imgHolder position-relative">
                                    @if ($department->cecm_photo)
                                        <img src="http://dashboard.localhost/assets/img/departments/cecm/{{ $department->cecm_photo }}"
                                            class="img-fluid d-block w-100" alt="image description">
                                    @else
                                        <img src="https://placehold.co/295x295" class="img-fluid d-block w-100">
                                    @endif

                                    <div class="mcssHolder">
                                        <ul
                                            class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                            <li>
                                                <a href="{{ route('cecm.profile', ['profile_id' => $item->id]) }}"
                                                    class="mcssLink" title="CECM Profile"><i
                                                        class="vssIcn fab fa-eye"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="px-5 pt-5 pb-4 mcCaptionWrap position-relative">
                                    <h3 class="mb-1 fwMedium h3Small">{{ $department->cecm_name }}</h3>
                                    <h4 class="fwSemiBold fontBase text-secondary">CECM, {{ $department->title }}
                                    </h4>
                                </div>
                            </article>
                        </div>
                        @foreach ($officers as $item)
                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                    <div class="imgHolder position-relative">
                                        @if ($item->photo)
                                            <img src="http://dashboard.localhost/assets/img/departments/chief_officer/{{ $item->photo }}"
                                                class="img-fluid d-block w-100">
                                        @else
                                            <img src="https://placehold.co/200x300" class="img-fluid d-block w-100">
                                        @endif
                                        <div class="mcssHolder">
                                            <ul
                                                class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                                <li>
                                                    <a href="{{ route('officer.profile', ['profile_id' => $item->id]) }}"
                                                        class="mcssLink" title="Officer Profile"><i
                                                            class="vssIcn fa fa-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="px-5 pt-5 pb-4 mcCaptionWrap position-relative">
                                        <h3 class="mb-1 fwMedium h3Small">{{ $item->name }}</h3>
                                        <h4 class="fwSemiBold fontBase text-secondary"><a href="javascript:void(0);">
                                                {{ $item->designation }}</a>
                                        </h4>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                        @foreach ($directors as $item)
                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                    <div class="imgHolder position-relative">
                                        @if ($item->leader_photo)
                                            <img src="http://dashboard.localhost/assets/img/directors/{{ $item->leader_photo }}"
                                                class="img-fluid d-block w-100">
                                        @else
                                            <img src="https://placehold.co/295x295" class="img-fluid d-block w-100">
                                        @endif
                                        <div class="mcssHolder">
                                            <ul
                                                class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                                <li>
                                                    <a href="{{ route('directorate.details', ['dir_id' => $item->id]) }}"
                                                        class="mcssLink" title="Details"><i
                                                            class="vssIcn fa fa-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="px-5 pt-5 pb-4 mcCaptionWrap position-relative">
                                        <h3 class="mb-1 fwMedium h3Small">{{ $item->leader_name }}</h3>
                                        <h4 class="fwSemiBold fontBase text-secondary">Director {{ $item->title }}
                                        </h4>
                                        <hr class="mx-0 mt-4 mb-3 mccSeprator">
                                        <ul class="list-unstyled mccInfoList">
                                            @if ($item->office_email)
                                                <li>
                                                    <a href="mailto:{{ $item->office_email }}">
                                                        <i class="mr-1 fas fa-envelope icn"><span
                                                                class="sr-only">icon</span></i>
                                                        {{ $item->office_email }}
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($item->office_phone)
                                                <li>
                                                    <a href="tel:+{{ $item->office_phone }}">
                                                        <i class="mr-1 fas fa-phone-alt icn"><span
                                                                class="sr-only">icon</span></i>
                                                        +{{ $item->office_phone }}
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
            @if ($projects->count() > 0)
                <section class="py-8 exploreDepartmentsBlock py-md-10 py-lg-14 py-xl-22">
                    <div class="container">
                        <header class="text-center headingHead cdTitle mb-7 mb-md-13">
                            <h2 class="mb-4 fwSemiBold">Our Projects</h2>
                            <p>Explore Our Projects</p>
                        </header>

                        <div class="mb-8 row justify-content-center isoContentHolder">
                            @foreach ($projects as $item)
                                <div class="col-12 col-md-6 col-lg-4 isoCol business">
                                    <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                                        style="background-image: url(http://dashboard.localhost/assets/img/projects/covers/{{ $item->cover_image }});">
                                        <div
                                            class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                            <h3 class="mb-0 text-white">
                                                <strong class="mb-1 d-block font-weight-normal fontBase echCatTitle"
                                                    style="text-transform: capitalize">
                                                    @if ($item->department_id)
                                                        {{ $item->department->title }}
                                                    @else
                                                        {{ $item->category_name }}
                                                    @endif

                                                </strong>
                                                <span class="d-block" style="">{{ $item->title }}</span>
                                            </h3>
                                            <a href="{{ route('project.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}"
                                                class="d-inline-block"><i
                                                    class="bg-white rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center text-dark spanLinkGo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center">
                            {{ $projects->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </section>
            @endif
        </div>
    </article>
</main>
