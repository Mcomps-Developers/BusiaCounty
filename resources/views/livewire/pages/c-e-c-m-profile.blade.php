<main>
    @section('title')
        {{ $cecm->name }}
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{@asset('assets/images/img158.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">{{ $cecm->name }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="h/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">About</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $cecm->name }}</a></li>
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
                @if ($cecm->cecm_photo)
                    <img src="https://busia.mcomps.africa/assets/img/departments/cecm/{{ $cecm->cecm_photo }}"
                        class="img-fluid d-block w-100">
                @else
                    <img src="https://placehold.co/295x295" class="img-fluid d-block w-100">
                @endif
                <div class="px-5 pt-6 pb-6 descrWrap flex-grow-1 px-xl-12 pt-xl-9 pb-xl-12">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <h2 class="mb-1 fwMedium h3Small">{{ $cecm->cecm_name }}</h2>
                            <h3 class="text-secondary fwSemiBold fontBase">CECM {{ $cecm->title }}
                            </h3>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="pl-xl-10 pt-7 pt-md-0">
                                <h2 class="mb-1 fwMedium h3Small">CECM Profile</h2>
                                @if ($cecm->about_cecm)
                                    {!! $cecm->about_cecm !!}
                                @else
                                    <p>
                                        The text below acts as a placeholder when the chief CECM profile has not been
                                        added.
                                        The text below acts as a placeholder when the chief CECM profile has not been
                                        added.
                                        <br>
                                        The text below acts as a placeholder when the chief CECM profile has not been
                                        added.
                                        The text below acts as a placeholder when the chief CECM profile has not been
                                        added.
                                        <br>
                                        The text below acts as a placeholder when the chief CECM profile has not been
                                        added.
                                        The text below acts as a placeholder when the chief CECM profile has not been
                                        added.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </article>
</main>
