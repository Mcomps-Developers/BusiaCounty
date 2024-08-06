<main>
    @section('title')
    Departments
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{@asset('assets/images/img158.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">Departments</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Departments</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="pt-8 pb-4 exploreDepartmentsBlock pt-md-10 pb-md-7 pb-lg-10 pt-lg-14 pt-xl-20">
        <div class="container">
            <header class="mb-8 text-center headingHead mb-lg-13">
                <h2 class="mb-2">Explore Departments</h2>
                <p>Get to know each department</p>
            </header>
            <div class="row justify-content-center">
                @foreach ($departments as $item)
                <div class="col-12 col-sm-6 col-lg-4 d-sm-flex">
                    <article
                        class="mx-auto mb-6 text-center bg-white shadow egdColumn position-relative w-100 mb-lg-12">
                        <div class="mb-5 imgHolder position-relative">
                            @if ($item->cover_image)
                            <img src="http://dashboard.localhost/assets/img/departments/{{$item->cover_image}}"
                                class="img-fluid w-100">
                            @else
                            <img src="https://placehold.co/403x220" class="img-fluid w-100">
                            @endif
                            <i
                                class="shadow fa fa-home position-absolute icnWrap rounded-circle d-flex align-items-center justify-content-center"><span
                                    class="sr-only">icon</span></i>
                        </div>
                        <div class="px-3 py-4 egdcCaption py-md-8 px-md-6">
                            <h3 class="fwMedium" style="text-transform: capitalize">{{$item->title}}</h3>
                            <p>Click the button below to view detailed information and download documents in the
                                Department of {{$item->title}}.</p>
                            <a href="{{ route('department.details', ['slug' => $item->slug]) }}"
                                class="btn btn-outline-light btnNoOver d-block w-100 mt-7">Read More <i
                                    class="mx-1 fas btnBnoIcn fa-arrow-right"><span class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</main>
