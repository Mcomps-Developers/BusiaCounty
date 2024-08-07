<main>
    @section('title')
    County Executive
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{@asset('assets/images/img158.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">THE EXECUTIVE</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">About</a></li>
                            <li class="breadcrumb-item active" aria-current="page">County Executive</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="pt-3 pb-6 meetCouncilBlock noOverlay position-relative pt-md-4 pt-lg-6 pt-xl-11 pb-lg-10">
        <div class="container">
            <header class="text-center headingHead cdTitle mb-7 mb-md-13">
                <h2 class="mb-4 fwSemiBold">County Executive Committee Members</h2>
                <p>Meet the executive committee members of The County Government of Busia</p>
            </header>
            <div class="row justify-content-center">
                {{-- <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                        <div class="imgHolder position-relative">
                            <img src="assets/img/about/governor/{{$governor->photo}}"
                                class="img-fluid d-block w-100" height="255" width="255">
                            <div class="mcssHolder">
                                <ul class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                    <li>
                                        <a href="{{$governor->twitter}}" class="mcssLink" title="Twitter"><i
                                                class="vssIcn fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$governor->facebook}}" class="mcssLink" title="Facebook"><i
                                                class="vssIcn fab fa-facebook-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$governor->linkedin}}" class="mcssLink" title="Linkedin"><i
                                                class="vssIcn fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$governor->instagram}}" class="mcssLink" title="Instagram"><i
                                                class="vssIcn fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pt-5 pb-4 mcCaptionWrap position-relative">
                            <h3 class="mb-1 fwMedium h3Small">{{$governor->name}}</h3>
                            <h4 class="fwSemiBold fontBase text-secondary"><a href="{{route('governor')}}">The
                                    Governor</a>
                            </h4>
                            <hr class="mx-0 mt-4 mb-3 mccSeprator">
                            <ul class="list-unstyled mccInfoList">
                                @if ($governor->email)
                                <li>
                                    <a href="mailto:{{$governor->email}}">
                                        <i class="mr-1 fas fa-envelope icn"><span class="sr-only">icon</span></i>
                                        {{$governor->office_email}}
                                    </a>
                                </li>
                                @endif
                                @if ($governor->office_phone)
                                <li>
                                    <a href="tel:+{{$governor->office_phone}}">
                                        <i class="mr-1 fas fa-phone-alt icn"><span class="sr-only">icon</span></i>
                                        +{{$governor->office_phone}}
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </article>
                </div> --}}
                {{-- <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                        <div class="imgHolder position-relative">
                            <img src="assets/img/about/deputy-governor/{{$deputyGovernor->photo}}"
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
                </div> --}}
                @foreach ($departments as $item)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                        <div class="imgHolder position-relative">
                            @if ($item->cecm_photo)
                            <img src="assets/img/departments/cecm/{{$item->cecm_photo}}"
                                class="img-fluid d-block w-100" alt="image description">
                            @else
                            <img src="https://placehold.co/295x295" class="img-fluid d-block w-100">
                            @endif
                            <div class="mcssHolder">
                                <ul class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                    <li>
                                        <a href="{{ route('cecm.profile', ['profile_id' => $item->id]) }}"
                                            class="mcssLink" title="CECM Profile"><i class="vssIcn fa fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pt-5 pb-4 mcCaptionWrap position-relative">
                            <h3 class="mb-1 fwMedium h3Small">{{$item->cecm_name}}</h3>
                            <h4 class="fwSemiBold fontBase text-secondary"><a
                                    href="{{ route('department.details', ['slug' => $item->slug]) }}">CECM
                                    {{$item->title}}</a>
                            </h4>
                            <hr class="mx-0 mt-4 mb-3 mccSeprator">
                            <ul class="list-unstyled mccInfoList">
                                @if ($item->cecm_department_email)
                                <li>
                                    <a href="mailto:{{$item->cecm_department_email}}">
                                        <i class="mr-1 fas fa-envelope icn"><span class="sr-only">icon</span></i>
                                        {{$item->cecm_department_email}}
                                    </a>
                                </li>
                                @endif
                                @if ($item->cecm_department_phone)
                                <li>
                                    <a href="tel:+{{$item->cecm_department_phone}}">
                                        <i class="mr-1 fas fa-phone-alt icn"><span class="sr-only">icon</span></i>
                                        +{{$item->cecm_department_phone}}
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
</main>
