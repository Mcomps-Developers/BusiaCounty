<main>
    @section('title')
    Investors Guide
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{@asset('assets/images/img158.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">Invest in {{config('app.name')}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Business</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Invest in {{config('app.name')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- contentWrapper -->
    <section class="py-8 contentWrapper py-sm-14 py-md-18 py-lg-22">
        <div class="container">
            <div class="row mx-lg-n5">
                <div class="col-12 col-md-6 px-lg-5">
                    <!-- extraWrap -->
                    <div class="mb-10 extraWrap mb-md-0">
                        <!-- titleWrap -->
                        <header class="mb-6 fzMedium">
                            <h2 class="mb-6 fwSemiBold h2vii">Partner with Us! Invest in a pool of opportunities!</h2>
                            <p class="mb-6 text-lDark">We are working with partners and investors to grow the economy of
                                {{config('app.name')}}. This is your opportunity to invest and be part or our story.</p>
                        </header>
                        <p>Border to border investments. Join us to explore our full potential. Help narture talents in
                            our young and youthful generation.
                        </p>
                        <!-- imgWarp -->
                        <div class="my-6 imgWarp my-md-8 mt-xl-12 mb-xl-10">
                            <img src="https://placehold.co/608x260" class="img-fluid" alt="image description">
                        </div>
                        <h5 class="mb-3 mb-md-6 h3Small fwSemibold">Membership Requirements:</h5>
                        <!-- flItemsList -->
                        <ul class="list-unstyled coDefaultList">
                            <li>Recruit volunteers from our corporate partners</li>
                            <li>Match volunteers to the specific skills you need</li>
                            <li>Automatically send documents to potential volunteers</li>
                            <li>Manage your photos and videos</li>
                            <li>Track and report opportunity metrics</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 px-lg-5">
                    <aside class="mt-0 mb-0 overflow-hidden bg-white shadow widget widgetForm fontCabin">
                        <form action="#" class="px-4 pt-10 pb-8 px-sm-7 becomeVolunteerForm">
                            <header class="mb-4 widgetFormtHead mb-md-8">
                                <h2 class="mb-3 fwSemiBold h2vii">Joining us?</h2>
                                <p>THE FOLLOWING INFO IS REQUIRED</p>
                            </header>
                            <div class="form-row">
                                <!-- form-group  -->
                                <div class="form-group col-12">
                                    <label class="fLabel fontAlter fwMedium d-block">Name<span
                                            class="text-danger fsSmall">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <!-- form-group  -->
                                <div class="form-group col-12">
                                    <label class="fLabel fontAlter fwMedium d-block">Email Address<span
                                            class="text-danger fsSmall">*</span></label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <!-- form-group  -->
                                <div class="form-group col-12">
                                    <label class="fLabel fontAlter fwMedium d-block">Phone Number<span
                                            class="text-danger fsSmall">*</span></label>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <!-- form-group  -->
                                <div class="form-group col-12">
                                    <label class="fLabel fontAlter fwMedium d-block">Address<span
                                            class="text-danger fsSmall">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <!-- form-group  -->
                                <div class="mt-1 form-group col-12 col-xl-6 mt-sm-0">
                                    <label class="fLabel fontAlter fwMedium d-block">Country<span
                                            class="text-danger fsSmall">*</span></label>
                                    <div class="coolSelectWrapper">
                                        <!-- coolSelect -->
                                        <select class="coolSelect form-control" id="city">
                                            <option value="1" disabled="">Select Country</option>
                                            <option value="2">United States</option>
                                            <option value="3">China</option>
                                            <option value="4" selected="">Ohio</option>
                                            <option value="5">United Kingdom (UK)</option>
                                            <option value="6">Irland</option>
                                            <option value="7">Scottland</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <!-- form-group  -->
                                <div class="form-group col-12">
                                    <label class="fLabel fontAlter fwMedium d-block">Zip/Postal Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <!-- form-group  -->
                                <div class="mb-0 form-group col-12">
                                    <button type="submit"
                                        class="p-0 border-0 btn btnTheme text-capitalize position-relative minWidthMedium btnxLarge w-100"
                                        data-hover="Send Inquiry">
                                        <span class="d-block btnText">Send Inquiry</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- vibrantAsideBlock  -->
    <aside
        class="pt-8 pb-4 overflow-hidden text-center text-white vibrantAsideBlock noFixHeight noOverLay position-relative d-flex pb-md-10 pb-lg-15 py-xl-21">
        <div class="alignHolder w-100 d-flex align-items-center">
            <div class="container align">
                <header class="mb-7 mb-md-10">
                    <h2 class="mb-0 text-white">Why we need you</h2>
                </header>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <!-- gbfColumn  -->
                        <article
                            class="px-3 pt-5 mb-6 text-center bg-white shadow gbfColumn gbfcVII pb-7 px-sm-6 px-md-5 px-lg-9 px-xl-14">
                            <i
                                class="mx-auto mb-3 icnWrap fa fa-users rounded-circle d-flex align-items-center justify-content-center"><span
                                    class="sr-only"></span></i>
                            <h3 class="pb-4 mb-0 fwMedium h3Small position-relative">We want to help to as many as we
                                can</h3>
                        </article>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- gbfColumn  -->
                        <article
                            class="px-3 pt-5 mb-6 text-center bg-white shadow gbfColumn gbfcVII pb-7 px-sm-6 px-md-5 px-lg-9 px-xl-14">
                            <i
                                class="mx-auto mb-3 icnWrap fa fa-users rounded-circle d-flex align-items-center justify-content-center"><span
                                    class="sr-only"></span></i>
                            <h3 class="pb-4 mb-0 fwMedium h3Small position-relative">Your support will bring more energy
                            </h3>
                        </article>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- gbfColumn  -->
                        <article
                            class="px-3 pt-5 mb-6 text-center bg-white shadow gbfColumn gbfcVII pb-7 px-sm-6 px-md-5 px-lg-9 px-xl-14">
                            <i
                                class="mx-auto mb-3 icnWrap fa fa-users rounded-circle d-flex align-items-center justify-content-center"><span
                                    class="sr-only"></span></i>
                            <h3 class="pb-4 mb-0 fwMedium h3Small position-relative">We always have believe in team work
                            </h3>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallaxWindow w-100 position-absolute" data-parallax="scroll"
            data-image-src="https://placehold.co/1920x568">
        </div>
    </aside>
</main>
