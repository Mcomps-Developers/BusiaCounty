<main>
    @section('title')
        Sub-Counties
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{ @asset('assets/images/img158.jpg') }});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">SUB-COUNTIES</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Administration</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sub-Counties</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="pb-4 servicesBlock pt-7 pt-md-9 pb-md-7 pt-lg-13 pb-lg-11 pt-xl-20 pb-xl-17">
        <div class="container">
            <header class="mb-8 text-center headingHead mb-lg-12">
                <h2 class="fwSemiBold">Sub-Counties in Busia County</h2>
                <p>Busia County is organized into {{ $subcounties->count() }} sub counties.</p>
            </header>
            <div class="row justify-content-center">
                @foreach ($subcounties as $item)
                    <div class="col-12 col-md-6 col-lg-6">
                        <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                            <div class="alignHolder w-100 d-flex align-items-center">
                                <div class="px-3 py-2 align w-100 px-xl-6">
                                    <i class="mb-4 fa fa-map-marker d-flex align-items-center icnWrap"><span
                                            class="sr-only">icon</span></i>
                                    <h3 class="fwMedium">{{ $item->name }} &nbsp; &nbsp; &nbsp;<i
                                            class="fas fa-chevron-down"></i>
                                    </h3>
                                    <div class="dcscCaptionWrap">
                                        <div class="description">
                                            {!! $item->short_description !!}
                                        </div>

                                        <style>
                                            .description {
                                                max-height: 450px;
                                                /* Adjust height as needed */
                                                overflow-y: auto;
                                                position: relative;
                                            }

                                            .button-outline {
                                                display: inline-block;
                                                padding: 10px 20px;
                                                margin: 5px;
                                                border: 2px solid #000;
                                                /* Change color as needed */
                                                background-color: transparent;
                                                color: #000;
                                                /* Change color as needed */
                                                text-decoration: none;
                                                text-transform: uppercase;
                                                font-weight: bold;
                                                transition: background-color 0.3s, color 0.3s;
                                            }

                                            .button-outline:hover {
                                                background-color: #000;
                                                /* Change color as needed */
                                                color: #fff;
                                                /* Change color as needed */
                                            }

                                            .fa-chevron-down {
                                                position: relative;
                                                display: block;
                                            }

                                            .fa-chevron-down:first-of-type {
                                                top: 8px;
                                                /* Adjust spacing between chevrons */
                                            }

                                            .fa-chevron-down:last-of-type {
                                                top: -4px;
                                                /* Adjust spacing between chevrons */
                                            }
                                        </style>

                                        @if ($item->mp_name)
                                            <a class="readMoreLink fontAlter button-outline"
                                                style="text-transform: uppercase">
                                                <strong>MP:</strong> {{ $item->mp_name }}
                                            </a>
                                        @endif
                                        @if ($item->website_url)
                                            <a href="{{ $item->website_url }}"
                                                class="btn btn-secondary button-outline btn-sm" target="_/blank">
                                                Website <i class="fas fa-external-link" aria-hidden="true"><span
                                                        class="sr-only">icon</span></i>
                                            </a>
                                            <i class="ml-1 fa fa-map-marker icnWatermark position-absolute">
                                                <span class="sr-only">icon</span>
                                            </i>
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
