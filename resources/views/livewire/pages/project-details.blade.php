<main>
    @section('title')
        {{ $project->title }}
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{@asset('assets/images/img158.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">DETAILS</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('projects') }}">Projects</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $project->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <article
        class="ItemfullBlock portfolioSingle bodyFontAlter pt-7 pb-7 pt-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-22 pb-xl-19">
        <div class="container">
            <div class="mb-3 row mb-md-8">
                <div class="col-12 col-sm-8 col-lg-8">
                    <img src="assets/img/projects/covers/{{ $project->cover_image }}"
                        class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8 col-xl-9">
                    <header class="mb-6 fzMedium">
                        <h2 class="mb-3 h2vii fwSemiBold mb-md-5 mb-xl-8">{{ $project->title }}</h2>
                        {!! $project->description !!}
                    </header>
                </div>
                <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                    <div class="px-4 pb-8 mt-5 bg-white shadow widget psShareWidget mt-md-0 px-lg-6 pt-7">
                        <ul class="p-0 m-0 psMetaList list-unstyled">
                            <li>
                                <strong class="mb-1 d-block fwSemiBold text-lDark fontAlter">Department:</strong>
                                <span class="d-block" style="text-transform: capitalize">
                                    @if ($project->department_id)
                                        {{ $project->department->title }}
                                    @else
                                        {{ $project->category_name }}
                                    @endif
                                </span>
                            </li>
                            <li>
                                <strong class="mb-1 d-block fwSemiBold text-lDark fontAlter">Date:</strong>
                                <span class="d-block">{{ date('d M Y', strtotime($project->created_at)) }}</span>
                            </li>
                            <li>
                                <strong class="mb-1 d-block fwSemiBold text-lDark fontAlter">Location:</strong>
                                <span class="d-block" style="text-transform: capitalize">{{ $project->location }}</span>
                            </li>
                            <li>
                                <strong class="mb-1 d-block fwSemiBold text-lDark fontAlter">Share:</strong>
                                <ul class="flex-wrap p-0 m-0 list-unstyled socialNetworks saSocialNetworks d-flex">
                                    <li>
                                        <a href="javascript:void(0);" class="facebook">
                                            <i class="fab fa-facebook-square" aria-hidden="true"><span
                                                    class="sr-only">facebook</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="twitter">
                                            <i class="fab fa-twitter" aria-hidden="true"><span
                                                    class="sr-only">twitter</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="pinterest">
                                            <i class="fab fa-pinterest" aria-hidden="true"><span
                                                    class="sr-only">pinterest</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="linkedin">
                                            <i class="fab fa-linkedin-in" aria-hidden="true"><span
                                                    class="sr-only">linkedin-in</span></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <section class="pt-8 pb-4 bgLight pt-md-12 pt-xl-16 pb-md-8 pb-xl-16">
        <div class="container">
            <h2 class="mb-5 text-center h2vii fwSemiBold mb-md-8">Related Projects</h2>
            <div class="row">
                @foreach ($relatedProjects as $item)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="mb-6 echColumn echColumnii d-block w-100 bgCover position-relative"
                            style="background-image: url(assets/img/projects/covers/{{ $item->cover_image }});">

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
        </div>
    </section>
</main>
