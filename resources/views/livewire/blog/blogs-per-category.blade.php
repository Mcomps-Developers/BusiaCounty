<main>
    @section('title')
    {{$category->name}}
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{@asset('assets/images/img158.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white" style="text-transform: capitalize">{{$category->name}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Resources</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize">
                                {{$category->name}}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="ItemfullBlock pt-7 pb-7 pt-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-22 pb-xl-19">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $item)
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <article class="mb-6 bg-white shadow npbColumn mb-xl-12">
                        <div class="imgHolder position-relative">
                            <a
                                href="{{ route('news.speeches.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}">
                                <img src="assets/img/blogs/{{ $item->image }}"
                                    class="img-fluid w-100 d-block">
                            </a>
                            <time datetime="2011-01-12"
                                class="px-2 py-1 text-white npbTimeTag font-weight-bold fontAlter position-absolute">{{
                                date('M d, Y',strtotime($item->created_at)) }}</time>
                        </div>
                        <div class="px-5 pt-8 pb-5 npbDescriptionWrap">
                            <strong class="mb-1 d-block npbcmWrap font-weight-normal">
                                <span class="mr-5">{{ $item->category->name }}</span>
                                <i class="fa fa-eye"></i> {{$item->views}}
                            </strong>
                            <h3 class="mb-5 fwSemiBold">
                                <a style="text-transform: capitalize;"
                                    href="{{ route('news.speeches.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}">{{
                                    $item->title }}</a>
                            </h3>
                            <a href="{{ route('news.speeches.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}"
                                class="align-top btnCr d-inline-block fontAlter">Continue Reading
                                <i class="ml-2 align-middle fa fa-arrow-right bcIcn"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                @endforeach


            </div>
            <nav aria-label="Page navigation">
                <ul class="pt-2 pagination justify-content-center">
                    {{ $blogs->links('pagination::bootstrap-5') }}
                </ul>
            </nav>
        </div>
    </section>
</main>
