<main>
    @section('title')
    Departments
    @endsection
    <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
        style="background-image: url({{@asset('assets/images/img23.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="text-white mb-2">Departments</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Departments</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="exploreDepartmentsBlock pt-8 pb-4 pt-md-10 pb-md-7 pb-lg-10 pt-lg-14 pt-xl-20">
        <div class="container">
            <header class="headingHead text-center mb-8 mb-lg-13">
                <h2 class="mb-2">Explore Our Goverment <br>Departments</h2>
                <p>We are offering the following information's about us that what we actually.</p>
            </header>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-lg-4 d-sm-flex">
                    <article
                        class="egdColumn shadow bg-white position-relative w-100 mb-6 mb-lg-12 text-center mx-auto">
                        <div class="imgHolder position-relative mb-5">
                            <img src="{{asset('assets/images/img24.jpg')}}" class="img-fluid w-100"
                                alt="image description">
                            <i
                                class="icomoon-ico11 position-absolute icnWrap rounded-circle d-flex align-items-center justify-content-center shadow"><span
                                    class="sr-only">icon</span></i>
                        </div>
                        <div class="egdcCaption py-4 px-3 py-md-8 px-md-6">
                            <h3 class="fwMedium">Business &amp; Administration</h3>
                            <p>County employment issue opportunities are position descriptions are listed.</p>
                            <a href="{{route('department.details')}}"
                                class="btn btn-outline-light btnNoOver d-block w-100 mt-7">Read More <i
                                    class="fas btnBnoIcn fa-arrow-right mx-1"><span class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-sm-flex">
                    <article
                        class="egdColumn shadow bg-white position-relative w-100 mb-6 mb-lg-12 text-center mx-auto">
                        <div class="imgHolder position-relative mb-5">
                            <img src="{{asset('assets/images/img28.jpg')}}" class="img-fluid w-100"
                                alt="image description">
                            <i
                                class="icomoon-ico12 position-absolute icnWrap rounded-circle d-flex align-items-center justify-content-center shadow"><span
                                    class="sr-only">icon</span></i>
                        </div>
                        <div class="egdcCaption py-4 px-3 py-md-8 px-md-6">
                            <h3 class="fwMedium">Finance and Economy</h3>
                            <p>We differentiate ourselves from all the other australian by the real factors.</p>
                            <a href="{{route('department.details')}}"
                                class="btn btn-outline-light btnNoOver d-block w-100 mt-7">Read More <i
                                    class="fas btnBnoIcn fa-arrow-right mx-1"><span class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-sm-flex">
                    <article
                        class="egdColumn shadow bg-white position-relative w-100 mb-6 mb-lg-12 text-center mx-auto">
                        <div class="imgHolder position-relative mb-5">
                            <img src="{{asset('assets/images/img26.jpg')}}" class="img-fluid w-100"
                                alt="image description">
                            <i
                                class="icomoon-ico13 position-absolute icnWrap rounded-circle d-flex align-items-center justify-content-center shadow"><span
                                    class="sr-only">icon</span></i>
                        </div>
                        <div class="egdcCaption py-4 px-3 py-md-8 px-md-6">
                            <h3 class="fwMedium">Constution and Law</h3>
                            <p>County employment issue opportunities are position descriptions are listed.</p>
                            <a href="{{route('department.details')}}"
                                class="btn btn-outline-light btnNoOver d-block w-100 mt-7">Read More <i
                                    class="fas btnBnoIcn fa-arrow-right mx-1"><span class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-sm-flex">
                    <article
                        class="egdColumn shadow bg-white position-relative w-100 mb-6 mb-lg-12 text-center mx-auto">
                        <div class="imgHolder position-relative mb-5">
                            <img src="{{asset('assets/images/img27.jpg')}}" class="img-fluid w-100"
                                alt="image description">
                            <i
                                class="icomoon-ico14 position-absolute icnWrap rounded-circle d-flex align-items-center justify-content-center shadow"><span
                                    class="sr-only">icon</span></i>
                        </div>
                        <div class="egdcCaption py-4 px-3 py-md-8 px-md-6">
                            <h3 class="fwMedium">Art and Culture</h3>
                            <p>County employment issue opportunities are position descriptions are listed.</p>
                            <a href="{{route('department.details')}}"
                                class="btn btn-outline-light btnNoOver d-block w-100 mt-7">Read More <i
                                    class="fas btnBnoIcn fa-arrow-right mx-1"><span class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-sm-flex">
                    <article
                        class="egdColumn shadow bg-white position-relative w-100 mb-6 mb-lg-12 text-center mx-auto">
                        <div class="imgHolder position-relative mb-5">
                            <img src="{{asset('assets/images/img28.jpg')}}" class="img-fluid w-100"
                                alt="image description">
                            <i
                                class="icomoon-ico15 position-absolute icnWrap rounded-circle d-flex align-items-center justify-content-center shadow"><span
                                    class="sr-only">icon</span></i>
                        </div>
                        <div class="egdcCaption py-4 px-3 py-md-8 px-md-6">
                            <h3 class="fwMedium">Roads and Transport</h3>
                            <p>We differentiate ourselves from all the other australian by the real factors.</p>
                            <a href="{{route('department.details')}}"
                                class="btn btn-outline-light btnNoOver d-block w-100 mt-7">Read More <i
                                    class="fas btnBnoIcn fa-arrow-right mx-1"><span class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-sm-flex">
                    <article
                        class="egdColumn shadow bg-white position-relative w-100 mb-6 mb-lg-12 text-center mx-auto">
                        <div class="imgHolder position-relative mb-5">
                            <img src="{{asset('assets/images/img29.jpg')}}" class="img-fluid w-100"
                                alt="image description">
                            <i
                                class="icomoon-ico16 position-absolute icnWrap rounded-circle d-flex align-items-center justify-content-center shadow"><span
                                    class="sr-only">icon</span></i>
                        </div>
                        <div class="egdcCaption py-4 px-3 py-md-8 px-md-6">
                            <h3 class="fwMedium">Housing and Land</h3>
                            <p>County employment issue opportunities are position descriptions are listed.</p>
                            <a href="{{route('department.details')}}"
                                class="btn btn-outline-light btnNoOver d-block w-100 mt-7">Read More <i
                                    class="fas btnBnoIcn fa-arrow-right mx-1"><span class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-sm-flex">
                    <article
                        class="egdColumn shadow bg-white position-relative w-100 mb-6 mb-lg-12 text-center mx-auto">
                        <div class="imgHolder position-relative mb-5">
                            <img src="{{asset('assets/images/img30.jpg')}}" class="img-fluid w-100"
                                alt="image description">
                            <i
                                class="icomoon-ico17 position-absolute icnWrap rounded-circle d-flex align-items-center justify-content-center shadow"><span
                                    class="sr-only">icon</span></i>
                        </div>
                        <div class="egdcCaption py-4 px-3 py-md-8 px-md-6">
                            <h3 class="fwMedium">Park and Recreation</h3>
                            <p>County employment issue opportunities are position descriptions are listed.</p>
                            <a href="{{route('department.details')}}"
                                class="btn btn-outline-light btnNoOver d-block w-100 mt-7">Read More <i
                                    class="fas btnBnoIcn fa-arrow-right mx-1"><span class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-sm-flex">
                    <article
                        class="egdColumn shadow bg-white position-relative w-100 mb-6 mb-lg-12 text-center mx-auto">
                        <div class="imgHolder position-relative mb-5">
                            <img src="{{asset('assets/images/img31.jpg')}}" class="img-fluid w-100"
                                alt="image description">
                            <i
                                class="icomoon-ico18 position-absolute icnWrap rounded-circle d-flex align-items-center justify-content-center shadow"><span
                                    class="sr-only">icon</span></i>
                        </div>
                        <div class="egdcCaption py-4 px-3 py-md-8 px-md-6">
                            <h3 class="fwMedium">Policing and Crime</h3>
                            <p>We differentiate ourselves from all the other australian by the real factors.</p>
                            <a href="{{route('department.details')}}"
                                class="btn btn-outline-light btnNoOver d-block w-100 mt-7">Read More <i
                                    class="fas btnBnoIcn fa-arrow-right mx-1"><span class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-sm-flex">
                    <article
                        class="egdColumn shadow bg-white position-relative w-100 mb-6 mb-lg-12 text-center mx-auto">
                        <div class="imgHolder position-relative mb-5">
                            <img src="{{asset('assets/images/img32.jpg')}}" class="img-fluid w-100"
                                alt="image description">
                            <i
                                class="icomoon-ico19 position-absolute icnWrap rounded-circle d-flex align-items-center justify-content-center shadow"><span
                                    class="sr-only">icon</span></i>
                        </div>
                        <div class="egdcCaption py-4 px-3 py-md-8 px-md-6">
                            <h3 class="fwMedium">Agriculture and Food</h3>
                            <p>County employment issue opportunities are position descriptions are listed.</p>
                            <a href="{{route('department.details')}}"
                                class="btn btn-outline-light btnNoOver d-block w-100 mt-7">Read More <i
                                    class="fas btnBnoIcn fa-arrow-right mx-1"><span class="sr-only">icon</span></i></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>
