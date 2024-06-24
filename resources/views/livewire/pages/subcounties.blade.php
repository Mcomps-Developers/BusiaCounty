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
                <div class="col-12 col-md-6 col-lg-6">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 fa fa-map-marker d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">{{$item->name}} &nbsp; &nbsp; &nbsp; <i
                                        class="fa fa-chevron-down-outline"></i></h3>
                                <div class="dcscCaptionWrap">
                                    <div class="description">
                                        {!! $item->short_description !!}
                                        <span class="icon-circle">
                                            <i class="fas fa-chevron-down"></i>
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                    </div>

                                    <style>
                                        .description {
                                            max-height: 450px;
                                            /* Adjust height as needed */
                                            overflow-y: auto;
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

                                        .icon-circle {
                                            display: inline-block;
                                            width: 40px;
                                            /* Adjust size as needed */
                                            height: 40px;
                                            /* Adjust size as needed */
                                            border: 2px solid #000;
                                            /* Change color as needed */
                                            border-radius: 50%;
                                            text-align: center;
                                            line-height: 36px;
                                            /* Adjust for vertical alignment */
                                            position: absolute;
                                        }

                                        .fa-chevron-down {
                                            position: absolute;
                                            left: 50%;
                                            transform: translateX(-50%);
                                        }

                                        .fa-chevron-down:first-of-type {
                                            top: 8px;
                                            /* Adjust spacing between chevrons */
                                        }

                                        .fa-chevron-down:last-of-type {
                                            top: 18px;
                                            /* Adjust spacing between chevrons */
                                        }
                                    </style>

                                    @if ($item->mp_name)
                                    <a class="readMoreLink fontAlter button-outline" style="text-transform: uppercase">
                                        <strong>MP:</strong> {{ $item->mp_name}}
                                    </a>
                                    @endif
                                    @if ($item->website_url)
                                    <a href="{{$item->website_url}}" class="readMoreLink fontAlter button-outline"
                                        target="_/blank">
                                        Website <i class="fas fa-external-link" aria-hidden="true"><span
                                                class="sr-only">icon</span></i>
                                    </a>
                                    <i class="ml-1 fa fa-map-marker icnWatermark position-absolute">
                                        <span class="sr-only">icon</span>
                                    </i>
                                    <span class="icon-circle">
                                        <i class="fas fa-chevron-up"></i>
                                        <i class="fas fa-chevron-up"></i>
                                    </span>
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
