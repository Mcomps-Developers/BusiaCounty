<main>
    @section('title')
        {{ $blog->title }}
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">{{ $blog->title }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('news.speeches') }}">{{ $blog->category->name }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }} Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <article class="pb-2 newsSingleWrap pt-7 pt-md-9 pb-md-4 pt-lg-14 pb-lg-8 pt-xl-22 pb-xl-13">
        <div class="container">
            <div class="row">
                <div class="mb-6 col-12 col-lg-8 col-xl-9">
                    <div class="pr-xl-14">
                        <div class="mb-4 imgHolder mb-md-8 position-relative">
                            <div class="nrcImageSlider">
                                <div>
                                    <div class="imgWrap">
                                        <img src="https://busia.mcomps.africa/assets/img/blogs/{{ $blog->image }}"
                                            class="img-fluid w-100" alt="image description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <header class="nrcHead">
                            <strong class="mb-1 d-block fwMedium title">
                                <i class="Theme fwMedium fa fa-calendar"><span class="sr-only">icon</span></i>
                                <time datetime="2011-01-12">{{ date('M d, Y', strtotime($blog->created_at)) }}</time>
                                - In
                                <a href="javascript:void(0);" class="text-lDark">{{ $blog->category->name }}</a>
                                By
                                <a href="javascript:void(0);" class="text-lDark">{{ $blog->author->name }}</a>
                                &nbsp;&nbsp;
                                <i class="fa fa-eye"></i>
                                {{$blog->views}}
                            </strong>
                            <h2 class="mb-5 h2vii fwSemiBold">{{ $blog->title }}</h2>
                        </header>
                        {!! $blog->content !!}
                        <div
                            class="mb-10 text-center newsTagWrap text-sm-left d-sm-flex mt-11 align-items-sm-center justify-content-sm-between justify-content-center">
                            <div class="widgetTags fontAlter d-sm-flex align-items-center">
                                <strong class="mb-2 mr-2 txtDark font-weight-normal ntwTagTitle">Tags:</strong>
                                <ul
                                    class="flex-wrap p-0 m-0 tagList list-unstyled d-flex justify-content-center justify-content-sm-start fwMedium">
                                    <li>
                                        <a href="javascript:void(0);">County</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="active">Development</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Road</a>
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="text-center saShareAside d-sm-flex align-items-center justify-content-center justify-content-end">
                                <strong
                                    class="mb-2 d-block text-lDark font-weight-normal fontAlter title">Share</strong>
                                <ul
                                    class="flex-wrap mb-0 list-unstyled socialNetworks saSocialNetworks d-flex justify-content-center">
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
                            </div>
                        </div>
                        <div class="commentFormWrap">
                            <h2 class="mb-6 fwSemiBold h2vii">Leave your Comments</h2>
                            <form action="#" class="commentForm">
                                <div class="row mx-n2">
                                    <div class="px-2 col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100 d-block" placeholder="Write your comment&hellip;"></textarea>
                                        </div>
                                    </div>
                                    <div class="px-2 col-12">
                                        <div class="form-group">
                                            <input class="form-control w-100 d-block" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="px-2 col-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control d-block w-100" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="px-2 col-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control d-block w-100"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <button type="button"
                                    class="p-0 mt-2 border-0 btn btnTheme d-flex font-weight-bold text-capitalize position-relative btnWidthSmall"
                                    data-hover="Post Now">
                                    <span class="d-block btnText">Post Comment</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mb-6 col-12 col-lg-4 col-xl-3">
                    <aside class="pt-1 dscSidebar ml-xl-n5">
                        <aside class="sidebar">
                            <section class="mb-6 widget widgetSearch mb-lg-10">
                                <form action="#" class="searchForm">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search Here…">
                                        <div class="input-group-append">
                                            <button
                                                class="btn btnTheme btnNoOver d-flex align-items-center justify-content-center"
                                                type="button">
                                                <i class="icomoon-search"><span class="sr-only">search</span></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <nav class="mb-6 widget widgetArchiveList mb-lg-10">
                                <h3 class="mb-5 fwMedium">Categories</h3>
                                <ul class="pl-0 list-unstyled">
                                    @foreach ($categories as $item)
                                        <li>
                                            <a href="javascript:void(0);">{{ $item->name }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </nav>
                            <nav class="mb-6 widget widgetUpcoming mb-lg-10">
                                <h3 class="mb-5 fwMedium">Related News</h3>
                                <ul class="pl-0 list-unstyled mb-7">
                                    @foreach ($relatedBlogs as $item)
                                        <li>
                                            <div class="flex-shrink-0 mt-1 mr-4 imgHolder">
                                                <img src="https://busia.mcomps/assets/img/blogs/{{ $item->image }}"
                                                    class="img-fluid" alt="image description">
                                            </div>
                                            <div class="descrWrap">
                                                <h4 class="mb-1 fwMedium">
                                                    <a
                                                        href="{{ route('news.speeches.details', ['slug' => $item->slug, 'reference' => $item->reference]) }}">{{ $item->title }}</a>
                                                </h4>
                                                <time datetime="2011-01-12" class="d-block"><i
                                                        class="mr-1 fa fa-calendar"></i>{{ date('M d, Y', strtotime($item->created_at)) }}</time>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </nav>
                            <section class="mb-6 widget widgetTags mb-lg-10">
                                <h3 class="mb-5 fwMedium">Tags</h3>
                                <ul class="flex-wrap pl-0 list-unstyled d-flex fontAlter">
                                    <li>
                                        <a href="javascript:void(0);">County</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Developement</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Road</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Design</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Smart County</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Goverment</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Announcement</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Meeting</a>
                                    </li>
                                </ul>
                            </section>
                            <article class="px-6 widget widgetVote bgCover py-9"
                                style="background-image: url(https://placehold.co/317x508);">
                                <h3 class="h3Large">Advertise Here
                                </h3>
                                <a href="javascript:void(0);"
                                    class="p-0 mt-2 border-0 btn btnDarkAlter text-capitalize btn-sm position-relative"
                                    data-hover="Action Button">
                                    <span class="d-block btnText">Action Button</span>
                                </a>
                            </article>
                        </aside>
                    </aside>
                </div>
            </div>
        </div>
    </article>
</main>
