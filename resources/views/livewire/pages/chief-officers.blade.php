<main>
    @section('title')
    County Chief Officers
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">County Chief Officers</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">About</a></li>
                            <li class="breadcrumb-item active" aria-current="page">County Chief Officers</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="pt-3 pb-6 meetCouncilBlock noOverlay position-relative pt-md-4 pt-lg-6 pt-xl-11 pb-lg-10">
        <div class="container">
            <header class="text-center headingHead cdTitle mb-7 mb-md-13">
                <h2 class="mb-4 fwSemiBold">County Chief Officers</h2>
                <p>These are the very able individuals who are the accounting officers of the various departments.</p>
            </header>
            <div class="row justify-content-center">
                @foreach ($departments as $item)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="mx-auto mb-6 bg-white shadow mccColumn mx-sm-0">
                        <div class="imgHolder position-relative">
                            @if ($item->chief_officer_photo)
                            <img src="https://busia.mcomps.africa/assets/img/departments/chief_officer/{{$item->chief_officer_photo}}"
                                class="img-fluid d-block w-100">
                            @else
                            <img src="https://placehold.co/295x295" class="img-fluid d-block w-100">
                            @endif
                            <div class="mcssHolder">
                                <ul class="p-0 m-0 overflow-hidden bg-white mcssList list-unstyled rounded-pill d-flex">
                                    <li>
                                        <a href="{{ route('department.details', ['slug' => $item->slug]) }}"
                                            class="mcssLink" title="Twitter"><i class="vssIcn fab fa-eye"></i>
                                            Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-5 pt-5 pb-4 mcCaptionWrap position-relative">
                            <h3 class="mb-1 fwMedium h3Small">{{$item->chief_officer_name}}</h3>
                            <h4 class="fwSemiBold fontBase text-secondary"><a
                                    href="{{ route('department.details', ['slug' => $item->slug]) }}">
                                    {{$item->title}}</a>
                            </h4>
                            <hr class="mx-0 mt-4 mb-3 mccSeprator">
                            <ul class="list-unstyled mccInfoList">
                                @if ($item->officer_email)
                                <li>
                                    <a href="mailto:{{$item->officer_email}}">
                                        <i class="mr-1 fas fa-envelope icn"><span class="sr-only">icon</span></i>
                                        {{$item->officer_email}}
                                    </a>
                                </li>
                                @endif
                                @if ($item->officer_phone)
                                <li>
                                    <a href="tel:+{{$item->officer_phone}}">
                                        <i class="mr-1 fas fa-phone-alt icn"><span class="sr-only">icon</span></i>
                                        +{{$item->officer_phone}}
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
