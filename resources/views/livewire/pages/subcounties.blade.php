<main>
    @section('title')
    Constituencies
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">CONSTITUENCIES</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Administration</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Constituencies</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="pb-4 servicesBlock pt-7 pt-md-9 pb-md-7 pt-lg-13 pb-lg-11 pt-xl-20 pb-xl-17">
        <div class="container">
            <header class="mb-8 text-center headingHead mb-lg-12">
                <h2 class="fwSemiBold">Constituencies in {{config('app.name')}}</h2>
                <p>{{config('app.name')}} is organized into {{$subcounties->count()}} sub counties.</p>
            </header>
            <div class="row justify-content-center">
                @foreach ($subcounties as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 fa fa-map-marker d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">{{$item->name}}</h3>
                                <div class="dcscCaptionWrap">
                                    {!! $item->short_description !!}
                                    @if ($item->mp_name)
                                    <a class="readMoreLink fontAlter"><i class="fas fa-user btnRmlIcn"
                                            aria-hidden="true"><span class="sr-only">icon</span></i> {{
                                        $item->mp_name}}</a>
                                    @endif
                                    @if ($item->website_url)
                                    <a href="{{$item->website_url}}" class="readMoreLink fontAlter" target="_/blank"><i
                                            class="fas fa-external-link btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i> Website</a>
                                    <i class="ml-1 fa fa-map-marker icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</main>
