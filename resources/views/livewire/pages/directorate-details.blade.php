<main>
    @section('title')
        {{ $directorate->title }}
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{@asset('assets/images/img158.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">Directorate</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="h/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">About</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $directorate->title }}</a></li>
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
                @if ($directorate->leader_photo)
                    <img src="https://busia.mcomps.africa/assets/img/directors/{{ $directorate->leader_photo }}"
                        class="img-fluid d-block w-100">
                @else
                    <img src="https://placehold.co/295x295" class="img-fluid d-block w-100">
                @endif
                <div class="px-5 pt-6 pb-6 descrWrap flex-grow-1 px-xl-12 pt-xl-9 pb-xl-12">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <h2 class="mb-1 fwMedium h3Small">{{ $directorate->leader_name }}</h2>
                            <h3 class="text-secondary fwSemiBold fontBase">Director, {{ $directorate->title }}
                            </h3>
                            <hr class="mx-0 mt-2 mb-3 mccSeprator">
                            <dl class="overflow-hidden tmcbInfosList">
                                <dt>Born:</dt>
                                @if ($directorate->date_of_birth)
                                    <dd>{{ date('D d M, Y', strtotime($directorate->date_of_birth)) }}</dd>
                                @else
                                    <dd>Not Added</dd>
                                @endif

                                <dt>Phone:</dt>
                                <dd>
                                    @if ($directorate->office_phone)
                                        <a
                                            href="tel:+{{ $directorate->office_phone }}">+{{ $directorate->office_phone }}</a>
                                    @else
                                        Not Added
                                    @endif
                                </dd>
                                <dt>Email:</dt>
                                <dd>
                                    @if ($directorate->office_email)
                                        <a
                                            href="mailto:{{ $directorate->office_email }}">{{ $directorate->office_email }}</a>
                                    @else
                                        Not Added
                                    @endif
                                </dd>
                            </dl>
                            <ul class="flex-wrap mb-0 list-unstyled socialNetworks tmcbSocialNetworks d-flex mt-xl-6">
                                <li>
                                    <a href="{{ $directorate->twitter }}">
                                        <i class="fab fa-twitter"><span class="sr-only">twitter</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $directorate->facebook }}">
                                        <i class="fab fa-facebook-square"><span class="sr-only">facebook</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $directorate->linkedin }}">
                                        <i class="fab fa-linkedin-in"><span class="sr-only">linkedin</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $directorate->instagram }}">
                                        <i class="fab fa-instagram"><span class="sr-only">instagram</span></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="pl-xl-10 pt-7 pt-md-0">
                                <h2 class="mb-1 fwMedium h3Small">Director Profile</h2>
                                @if ($directorate->director_profile)
                                    {!! $directorate->director_profile !!}
                                @else
                                    <p>
                                        The text below acts as a placeholder when the director profile has not been
                                        added.
                                        The text below acts as a placeholder when the director profile has not been
                                        added.
                                        <br>
                                        The text below acts as a placeholder when the director profile has not been
                                        added.
                                        The text below acts as a placeholder when the director profile has not been
                                        added.
                                        <br>
                                        The text below acts as a placeholder when the director profile has not been
                                        added.
                                        The text below acts as a placeholder when the director profile has not been
                                        added.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <header class="card d-flex col-12 bg-white shadow">
                <div class="col-lg-12 col-md-12" style="paddind: 12px">
                    {!! $directorate->about !!}
                </div>

            </header>
        </div>
    </article>
</main>
