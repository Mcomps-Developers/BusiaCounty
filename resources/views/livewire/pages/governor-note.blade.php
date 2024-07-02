<main>
    @section('title')
        Governorship
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{@asset('assets/images/img158.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">GOVERNORSHIP</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">About</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Governorship</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <article class="tmContentBlock pt-7 pb-7 pt-md-10 pb-md-10 pt-lg-16 pb-lg-16 pt-xl-22 pb-xl-22">
        <div class="container">
            <header
                class="pt-4 overflow-hidden bg-white shadow tmcbDescriptionBox d-lg-flex pt-lg-0 position-relative mb-7 mb-md-10 mb-lg-15">
                <img class="img-fluid d-block w-100"
                    src="https://busia.mcomps.africa/assets/img/about/governor/{{ $Governor->photo }}"></img>
                <div class="px-5 pt-6 pb-6 descrWrap flex-grow-1 px-xl-12 pt-xl-9 pb-xl-12">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <h2 class="mb-1 fwMedium h3Small">{{ $Governor->name }}</h2>
                            <h3 class="text-secondary fwSemiBold fontBase">Governor, {{ config('app.name') }}</h3>
                            <hr class="mx-0 mt-2 mb-3 mccSeprator">
                            <dl class="overflow-hidden tmcbInfosList">
                                <dt>Agenda:</dt>
                                <dd>{{ $Governor->main_manifesto }}</dd>
                                <dt>Born:</dt>
                                <dd>{{ date('D d M, Y', strtotime($Governor->date_of_birth)) }}</dd>
                                <dt>Phone:</dt>
                                <dd>
                                    <a href="tel:+{{ $Governor->office_phone }}">+{{ $Governor->office_phone }}</a>
                                </dd>
                                <dt>Email:</dt>
                                <dd>
                                    <a href="mailto:{{ $Governor->office_email }}">{{ $Governor->office_email }}</a>
                                </dd>
                            </dl>
                            <ul class="flex-wrap mb-0 list-unstyled socialNetworks tmcbSocialNetworks d-flex mt-xl-6">
                                <li>
                                    <a href="{{ $Governor->twitter }}">
                                        <i class="fab fa-twitter"><span class="sr-only">twitter</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $Governor->facebook }}">
                                        <i class="fab fa-facebook-square"><span class="sr-only">facebook</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $Governor->linkedin }}">
                                        <i class="fab fa-linkedin-in"><span class="sr-only">linkedin</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $Governor->instagram }}">
                                        <i class="fab fa-instagram"><span class="sr-only">instagram</span></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="pl-xl-10 pt-7 pt-md-0">
                                {!! $Governor->welcome_message !!}
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            {{-- <header
                class="pt-4 overflow-hidden bg-white shadow tmcbDescriptionBox d-lg-flex pt-lg-0 position-relative mb-7 mb-md-10 mb-lg-15">
                <div style="margin: 15px;">
                    {!! $Governor->about !!}
                </div>
            </header> --}}
        </div>
    {{-- </article>
    <article class="pb-2 dsSingleContent pt-7 pt-md-10 pb-md-1 pt-lg-16 pb-lg-10 pt-xl-21 pb-xl-16"> --}}
        <div class="container">
            <div class="row">
                <div class="mb-6 col-12 col-lg-8 col-xl-9 order-lg-2">
                    <div class="pl-xl-14">
                        <header class="fzMedium mb-9">
                            @if ($department->cover_image)
                                <img class="alignHolder d-flex w-100 align-items-center"
                                    src="https://busia.mcomps.africa/assets/img/departments/{{ $department->cover_image }}">
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
                                Directorates
                            </h3>
                            <ul class="pl-0 mb-0 mb-3 list-unstyled mx-n2">
                                @foreach ($directors as $item)
                                    <li>
                                        <a
                                            href="{{ route('directorate.details', ['dir_id' => $item->id]) }}">{{ $item->title }}</a>
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
                        <p>Meet the governorship leadership team.</p>
                    </header>
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                <div class="imgHolder position-relative">
                                    <img src="https://busia.mcomps.africa/assets/img/about/deputy-governor/{{$deputyGovernor->photo}}"
                                        class="img-fluid d-block w-100" height="255" width="255">
                                    <div class="mcssHolder">
                                        <ul class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                            <li>
                                                <a href="{{$deputyGovernor->twitter}}" class="mcssLink" title="Twitter"><i
                                                        class="vssIcn fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{$deputyGovernor->facebook}}" class="mcssLink" title="Facebook"><i
                                                        class="vssIcn fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{$deputyGovernor->linkedin}}" class="mcssLink" title="Linkedin"><i
                                                        class="vssIcn fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{$deputyGovernor->instagram}}" class="mcssLink" title="Instagram"><i
                                                        class="vssIcn fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="px-5 pt-5 pb-4 mcCaptionWrap position-relative">
                                    <h3 class="mb-1 fwMedium h3Small">{{$deputyGovernor->name}}</h3>
                                    <h4 class="fwSemiBold fontBase text-secondary"><a href="{{route('deputy.governor')}}">Deputy
                                            Governor</a></h4>
                                    <hr class="mx-0 mt-4 mb-3 mccSeprator">
                                    <ul class="list-unstyled mccInfoList">
                                        @if ($deputyGovernor->email)
                                        <li>
                                            <a href="mailto:{{$deputyGovernor->email}}">
                                                <i class="mr-1 fas fa-envelope icn"><span class="sr-only">icon</span></i>
                                                {{$deputyGovernor->office_email}}
                                            </a>
                                        </li>
                                        @endif
                                        @if ($deputyGovernor->office_phone)
                                        <li>
                                            <a href="tel:+{{$deputyGovernor->office_phone}}">
                                                <i class="mr-1 fas fa-phone-alt icn"><span class="sr-only">icon</span></i>
                                                +{{$deputyGovernor->office_phone}}
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </article>
                        </div>
                        @foreach ($officers as $item)
                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                                    <div class="imgHolder position-relative">
                                        @if ($item->photo)
                                            <img src="https://busia.mcomps.africa/assets/img/departments/chief_officer/{{ $item->photo }}"
                                                class="img-fluid d-block w-100">
                                        @else
                                            <img src="https://placehold.co/200x300" class="img-fluid d-block w-100">
                                        @endif
                                        <div class="mcssHolder">
                                            <ul
                                                class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                                <li>
                                                    <a href="javascript:void(0);" class="mcssLink"
                                                        title="Officer Profile"><i class="vssIcn fa fa-eye"></i></a>
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
                                            <img src="https://busia.mcomps.africa/assets/img/directors/{{ $item->leader_photo }}"
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
        </div>
    </article>
</main>
