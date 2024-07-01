<main>
    @section('title')
        Projects
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{ @asset('assets/images/img23.jpg') }});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">PROJECTS</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="py-8 exploreDepartmentsBlock py-md-10 py-lg-14 py-xl-22">
        <div class="container">
            <div class="mb-8 row justify-content-center isoContentHolder">
                @foreach ($projects as $item)
                    <div class="col-12 col-md-6 col-lg-4 isoCol business">
                        <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                            style="background-image: url(https://busia.mcomps.africa/assets/img/projects/covers/{{ $item->cover_image }});">

                            <div class="px-3 py-2 text-white echcCaptionWrap position-absolute w-100 px-sm-5 py-sm-4">
                                <h3 class="mb-0 text-white">
                                    <strong class="mb-1 d-block font-weight-normal fontBase echCatTitle"
                                        style="text-transform: capitalize">
                                        @if ($item->department_id)
                                            {{ $item->department->title }}
                                        @else
                                            {{ $item->category_name }}
                                        @endif

                                    </strong>
                                    <span class="d-block" style="">{{ $item->title }}</span>
                                </h3>
                                <a
                                    href="{{ route('project.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}"><i
                                        class="rounded-circle fa fa-arrow-right d-flex align-items-center justify-content-center spanLinkGo"><span
                                            class="sr-only">icon</span></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $projects->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
</main>
