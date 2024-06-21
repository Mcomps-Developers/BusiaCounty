<main>
    @section('title')
    The Governor
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">H.E THE GOVERNOR</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="h/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">About</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">The Governor</a></li>
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
                <span class="flex-shrink-0 mx-auto imgHolder bgCover mx-lg-0 d-block"
                    style="background-image: url(https://busia.mcomps.africa/assets/img/about/governor/{{$Governor->photo}}); height:400; width:300"></span>
                <div class="px-5 pt-6 pb-6 descrWrap flex-grow-1 px-xl-12 pt-xl-9 pb-xl-12">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <h2 class="mb-1 fwMedium h3Small">{{$Governor->name}}</h2>
                            <h3 class="text-secondary fwSemiBold fontBase">Governor, {{ config('app.name') }}</h3>
                            <hr class="mx-0 mt-2 mb-3 mccSeprator">
                            <dl class="overflow-hidden tmcbInfosList">
                                <dt>Agenda:</dt>
                                <dd>{{$Governor->main_manifesto}}</dd>
                                <dt>Born:</dt>
                                <dd>{{date('D d M, Y')}}</dd>
                                <dt>Phone:</dt>
                                <dd>
                                    <a href="tel:+{{$Governor->office_phone}}">+{{$Governor->office_phone}}</a>
                                </dd>
                                <dt>Email:</dt>
                                <dd>
                                    <a href="mailto:{{$Governor->office_email}}">{{$Governor->office_email}}</a>
                                </dd>
                            </dl>
                            <ul class="flex-wrap mb-0 list-unstyled socialNetworks tmcbSocialNetworks d-flex mt-xl-6">
                                <li>
                                    <a href="{{$Governor->twitter}}">
                                        <i class="fab fa-twitter"><span class="sr-only">twitter</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$Governor->facebook}}">
                                        <i class="fab fa-facebook-square"><span class="sr-only">facebook</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$Governor->linkedin}}">
                                        <i class="fab fa-linkedin-in"><span class="sr-only">linkedin</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$Governor->instagram}}">
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
            {!! $Governor->about !!}
        </div>
    </article>
</main>
