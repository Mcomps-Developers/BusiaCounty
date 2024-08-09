<main>
    @section('title')
        County Treasury
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{ @asset('assets/images/img23.jpg') }});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">County Treasury</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">County Treasury</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <article class="pb-2 dsSingleContent pt-7 pt-md-10 pb-md-1 pt-lg-16 pb-lg-10 pt-xl-21 pb-xl-16">
        <div class="container position-relative hasFilterPositioned">
            <div class="row">
                <div class="mb-6 col-12 col-lg-8 col-xl-9 order-lg-2">
                    <div class="pl-xl-14">
                        <div class="row isoContentHolder">
                            @foreach ($budgets as $item)
                                <div class="col-12 col-xl-6 {{ $item->type }} isoCol">
                                    <div class="pb-6 mb-6 bg-white shadow drDocColumn position-relative px-7 pt-7">
                                        <div class="mb-3 d-flex">
                                            <span class="flex-shrink-0 pt-1 mr-3 icnWrap">
                                                <img src="{{ asset('assets/images/icodoc.png') }}" class="img-fluid"
                                                    alt="icon">
                                            </span>
                                            <div class="descrWrap">
                                                <h2 class="fwSemiBold">
                                                    <a href="assets/documents/uploads/{{ $item->document }}"
                                                        style="text-transform: capitalize"
                                                        target="_/blank">{{ $item->title }}</a>
                                                </h2>
                                                <strong
                                                    class="d-block fileSize font-weight-normal">{{ date('M d, Y', strtotime($item->created_at)) }}
                                                    - Size: <a href="javascript:void(0);" class="text-lDark"
                                                        style="text-transform: capitalize">
                                                        {{-- Size --}}
                                                    </a></strong>
                                            </div>
                                        </div>
                                        <a href="assets/documents/uploads/{{ $item->document }}"
                                            class="btn btn-outline-light btnAlterDark btnNoOver btn-sm"
                                            target="_/blank"><i class="fa fa-cloud-download"></i> View Document</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $budgets->links('pagination::bootstrap-5') }}
                    </div>
                </div>
                <div class="mb-6 col-12 col-lg-4 col-xl-3 order-lg-1 position-static">
                    <aside class="pt-1 dscSidebar mr-xl-n5">
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
        </div>
    </article>
</main>
