<main>
    @section('title')
    Investors Guide
    @endsection
    <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
        style="background-image: url({{@asset('assets/images/img126.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="text-white mb-2">Invest in {{config('app.name')}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
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
    <section class="contentWrapper py-8 py-sm-14 py-md-18 py-lg-22">
        <div class="container">
            <div class="row mx-lg-n5">
                <div class="col-12 col-md-6 px-lg-5">
                    <!-- extraWrap -->
                    <div class="extraWrap mb-10 mb-md-0">
                        <!-- titleWrap -->
                        <header class="fzMedium mb-6">
                            <h2 class="fwSemiBold h2vii mb-6">Partner with Us! Invest in a pool of opportunities!</h2>
                            <p class="text-lDark mb-6">We want to save lives at some of your favorite concerts,
                                festivals and events. A gift from you will allow us to:</p>
                        </header>
                        <p>Hackathon interaction design channels crowdsource holy grail backing funding success scrum
                            project growth hacking influencer twitter beta prototype. Crowdfunding user experience Look.
                        </p>
                        <!-- imgWarp -->
                        <div class="imgWarp my-6 my-md-8 mt-xl-12 mb-xl-10">
                            <img src="{{asset('assets/images/img127.jpg')}}" class="img-fluid" alt="image description">
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
                    <aside class="widget widgetForm mb-0 fontCabin mt-0 bg-white shadow overflow-hidden">
                        <form action="#" class="pt-10 px-4 px-sm-7 pb-8 becomeVolunteerForm">
                            <header class="widgetFormtHead mb-4 mb-md-8">
                                <h2 class="fwSemiBold h2vii mb-3">New Volunteer?</h2>
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
                                <div class="form-group col-12 col-xl-6 mt-1 mt-sm-0">
                                    <label class="fLabel fontAlter fwMedium d-block">City<span
                                            class="text-danger fsSmall">*</span></label>
                                    <div class="coolSelectWrapper">
                                        <!-- coolSelect -->
                                        <select class="coolSelect form-control" id="city">
                                            <option value="1" disabled="">Select City</option>
                                            <option value="2">United States</option>
                                            <option value="3">China</option>
                                            <option value="4" selected="">Ohio</option>
                                            <option value="5">United Kingdom (UK)</option>
                                            <option value="6">Irland</option>
                                            <option value="7">Scottland</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- form-group  -->
                                <div class="form-group col-12 col-xl-6">
                                    <label class="fLabel fontAlter fwMedium d-block">State/Region<span
                                            class="text-danger fsSmall">*</span></label>
                                    <div class="coolSelectWrapper">
                                        <!-- coolSelect -->
                                        <select class="coolSelect form-control" id="state">
                                            <option value="1" disabled="">Select State/Region</option>
                                            <option value="2">United States</option>
                                            <option value="3">China</option>
                                            <option value="4" selected="">Albama</option>
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
                                <div class="form-group col-12 mb-6">
                                    <label class="fLabel fontAlter fwMedium d-block">Country</label>
                                    <div class="coolSelectWrapper">
                                        <!-- coolSelect -->
                                        <select class="coolSelect form-control" id="country">
                                            <option value="1" disabled="">Select Country</option>
                                            <option value="2">United States</option>
                                            <option value="3">China</option>
                                            <option value="4" selected="">Australia</option>
                                            <option value="5">United Kingdom (UK)</option>
                                            <option value="6">Irland</option>
                                            <option value="7">Scottland</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <!-- form-group  -->
                                <div class="form-group col-12 mb-0">
                                    <button type="submit"
                                        class="btn btnTheme text-capitalize position-relative border-0 p-0 minWidthMedium btnxLarge w-100"
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
        class="vibrantAsideBlock noFixHeight noOverLay position-relative text-center text-white overflow-hidden d-flex pt-8 pb-4 pb-md-10 pb-lg-15 py-xl-21">
        <div class="alignHolder w-100 d-flex align-items-center">
            <div class="container align">
                <header class="mb-7 mb-md-10">
                    <h2 class="mb-0 text-white">Why we need your help?</h2>
                </header>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <!-- gbfColumn  -->
                        <article
                            class="gbfColumn gbfcVII bg-white shadow text-center pt-5 pb-7 px-3 px-sm-6 px-md-5 px-lg-9 px-xl-14 mb-6">
                            <i
                                class="icnWrap icomoon-ico29 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"><span
                                    class="sr-only"></span></i>
                            <h3 class="mb-0 fwMedium h3Small position-relative pb-4">We want to help to as many as we
                                can</h3>
                        </article>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- gbfColumn  -->
                        <article
                            class="gbfColumn gbfcVII bg-white shadow text-center pt-5 pb-7 px-3 px-sm-6 px-md-5 px-lg-9 px-xl-14 mb-6">
                            <i
                                class="icnWrap icomoon-ico30 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"><span
                                    class="sr-only"></span></i>
                            <h3 class="mb-0 fwMedium h3Small position-relative pb-4">Your support will bring more energy
                            </h3>
                        </article>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- gbfColumn  -->
                        <article
                            class="gbfColumn gbfcVII bg-white shadow text-center pt-5 pb-7 px-3 px-sm-6 px-md-5 px-lg-9 px-xl-14 mb-6">
                            <i
                                class="icnWrap icomoon-ico31 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"><span
                                    class="sr-only"></span></i>
                            <h3 class="mb-0 fwMedium h3Small position-relative pb-4">We always have believe in team work
                            </h3>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallaxWindow w-100 position-absolute" data-parallax="scroll" data-image-src="images/img128.jpg">
        </div>
    </aside>
    <!-- testimonialsBlock -->
    <article class="testimonialsBlock bgLight position-relative pt-12 pb-8 pb-md-10 pb-lg-15 py-xl-21">
        <div class="container">
            <header class="watermarkHeadingHead text-center position-relative mb-7 mb-lg-10"
                data-watermark="Testimonials">
                <h3 class="h3 h3vvii mb-0">Feedback From Visitors</h3>
            </header>
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 px-xl-13">
                    <!-- quotesSlider -->
                    <div class="quotesSlider">
                        <div>
                            <!-- clientQuote -->
                            <blockquote
                                class="clientQuote fontAlter position-relative pt-25 pt-sm-0 pl-sm-40 pl-lg-50 mb-0">
                                <q class="d-block position-relative mb-4 mb-md-6 mb-lg-7 pt-4 pl-8 pl-sm-0">BNI India is
                                    India’s largest and most successful business net working organisation. We offer our
                                    members the opportunity to share ideas, contacts, and most importantly!</q>
                                <cite class="d-block pl-8 pl-sm-0">
                                    <!-- profilePicWrap -->
                                    <span class="profilePicWrap position-absolute overflow-hidden rounded-circle">
                                        <img src="{{asset('assets/images/img129.png')}}"
                                            class="img-fluid w-100 h-100 imgFit rounded-circle"
                                            alt="Donald Salvor || Global Initiative">
                                    </span>
                                    <span class="eWrap d-block">
                                        <strong class="d-block fwMedium text-capitalize mb-1">Dr. Kristina
                                            Castle</strong>
                                        <strong class="d-block subtitle font-weight-normal fontBase">Global
                                            Initiative</strong>
                                    </span>
                                </cite>
                            </blockquote>
                        </div>
                        <div>
                            <!-- clientQuote -->
                            <blockquote
                                class="clientQuote fontAlter position-relative pt-25 pt-sm-0 pl-sm-40 pl-lg-50 mb-0">
                                <q class="d-block position-relative mb-4 mb-md-6 mb-lg-7 pt-4 pl-8 pl-sm-0">BNI India is
                                    India’s largest and most successful business net working organisation. We offer our
                                    members the opportunity to share ideas, contacts, and most importantly!</q>
                                <cite class="d-block pl-8 pl-sm-0">
                                    <!-- profilePicWrap -->
                                    <span class="profilePicWrap position-absolute overflow-hidden rounded-circle">
                                        <img src="{{asset('assets/images/img22.jpg"')}} class="img-fluid w-100 h-100 imgFit rounded-circle"
                                            alt="Donald Salvor || Global Initiative">
                                    </span>
                                    <span class="eWrap d-block">
                                        <strong class="d-block fwMedium text-capitalize mb-1">Donald Salvor</strong>
                                        <strong class="d-block subtitle font-weight-normal fontBase">Medical
                                            Scientist</strong>
                                    </span>
                                </cite>
                            </blockquote>
                        </div>
                        <div>
                            <!-- clientQuote -->
                            <blockquote
                                class="clientQuote fontAlter position-relative pt-25 pt-sm-0 pl-sm-40 pl-lg-50 mb-0">
                                <q class="d-block position-relative mb-4 mb-md-6 mb-lg-7 pt-4 pl-8 pl-sm-0">BNI India is
                                    India’s largest and most successful business net working organisation. We offer our
                                    members the opportunity to share ideas, contacts, and most importantly!</q>
                                <cite class="d-block pl-8 pl-sm-0">
                                    <!-- profilePicWrap -->
                                    <span class="profilePicWrap position-absolute overflow-hidden rounded-circle">
                                        <img src="{{asset(' assets/images/img07.jpg"')}}
                                            class="img-fluid w-100 h-100 imgFit rounded-circle"
                                            alt="Donald Salvor || Global Initiative">
                                    </span>
                                    <span class="eWrap d-block">
                                        <strong class="d-block fwMedium text-capitalize mb-1">Anthony Wills</strong>
                                        <strong class="d-block subtitle font-weight-normal fontBase">City
                                            Mayor-Danya</strong>
                                    </span>
                                </cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- helpAsideBlock -->
    <aside class="helpAsideBlock text-center py-8 py-md-10 py-lg-21">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
                    <strong class="d-block habTitle fontAlter font-weight-normal mb-2">Do you need help?</strong>
                    <h2>If you have any question, <br>Feel free to call us</h2>
                    <p>Call Us Today At 1-800-500-7600 We are available to help 24 hours.</p>
                    <a href="contact-1.html"
                        class="btn btnTheme text-capitalize position-relative border-0 p-0 minWidthMedium btnxLarge mt-5"
                        data-hover="Contact Us Now">
                        <span class="d-block btnText">Contact Us Now</span>
                    </a>
                </div>
            </div>
        </div>
    </aside>
</main>
