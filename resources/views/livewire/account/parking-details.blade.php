<div>
    @section('title')
Parking
    @endsection
    <div class="text-white subvisual-block subvisual-theme-1 bg-dark-green d-flex pt-60 pt-md-90 pt-lg-150 pb-30">
        <div class="pattern-image"><img src="{{ asset('e-services/images/bg-pattern-overlay.jpg') }}" width="1920"
                height="570" alt="Pattern">
        </div>
        <div class="container text-center position-relative">
            <div class="row">
                <div class="col-12" style="padding-top: 60px">
                    <div class="subvisual-textbox">
                        <h1>Parking</h1>
                        <p>Parking License</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        <!-- Featured Jobs Section -->
        <section
            class="section section-categories section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-95 pb-35 pb-md-50 pb-xl-75">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
                                <!-- Featured Category Box -->
                                <a href="{{ route('daily.parking') }}" class="featured-category-box alt2">
                                    <div class="wrap">
                                        <div class="img-holder">
                                            <img src="{{ asset('e-services/images/company-logo02.jpg') }}"
                                                alt="Javascript Developer">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6">Daily Parking</strong>
                                            <p class="location"><i class="fa fa-info-circle"></i>Apply for unified
                                                business permit. At the end, you will
                                                be able to download the permit available for e-verify.</p>
                                            <div class="tag-wrap">
                                                <span class="btn btn-success btn-sm">Apply Now</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
                                <!-- Featured Category Box -->
                                <a href="javascript:void(0);" class="featured-category-box alt2">
                                    <div class="wrap">
                                        <div class="img-holder">
                                            <img src="{{ asset('e-services/images/company-logo03.jpg') }}"
                                                alt="Javascript Developer">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6">Seasonal Parking</strong>
                                            <p class="location"><i class="fa fa-info-circle"></i>Apply for a specific period of time.
                                            </p>
                                            <div class="tag-wrap">
                                                <span class="btn btn-success btn-sm">Apply Now</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
                                <!-- Featured Category Box -->
                                <a href="javascript:void(0);" class="featured-category-box alt2">
                                    <div class="wrap">
                                        <div class="img-holder">
                                            <img src="{{ asset('e-services/images/company-logo04.jpg') }}"
                                                alt="Javascript Developer">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6">Reserved Parking</strong>
                                            <address class="location"><i class="fa fa-info-circle"></i><span
                                                    class="text">Apply for Loading Zone,Trailer parking bay, PSV parking bay, Parking bay event hiring.</span></address>
                                            <div class="tag-wrap">
                                                <span class="btn btn-success btn-sm">Apply Now</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Downloads Section -->
        <section
            class="section section-theme-1 section-downloads pt-35 pt-md-60 pb-50 pb-md-75 pb-lg-75 pb-xl-110 pb-xxl-140">
            <div class="container">
                <!-- Section header -->
                <header class="text-center section-header mb-30 mb-md-40 mb-lg-50">
                    <h2>Download our mobile app</h2>
                    <p>Getting eServices closer and better.<br> Stay update and receive notifications directly into your
                        phone.</p>
                </header>
                <div class="app-buttons">
                    <a class="btn-app btn-play-store" href="{{ route('business.add') }}">
                        <div class="store-icon">
                            <img src="{{ asset('e-services/images/icon-play-store.pn') }}g" width="28"
                                height="30" alt="Google Play">
                        </div>
                        <div class="btn-text">
                            Download From <span>Google Play</span>
                        </div>
                    </a>
                    <a class="btn-app btn-app-store" href="{{ route('business.add') }}">
                        <div class="store-icon">
                            <img src="{{ asset('e-services/images/icon-app-store.png') }}" width="32"
                                height="38" alt="App Store">
                        </div>
                        <div class="btn-text">
                            Download From <span>App Store</span>
                        </div>
                    </a>
                </div>
                <div class="icon ico01"><img src="{{ asset('e-services/images/ico-app01.png') }}"
                        alt="Image Description">
                </div>
                <div class="icon ico02"><img src="{{ asset('e-services/images/ico-app02.png') }}"
                        alt="Image Description">
                </div>
                <div class="icon ico03"><img src="{{ asset('e-services/images/ico-app03.png') }}"
                        alt="Image Description">
                </div>
                <div class="icon ico04"><img src="{{ asset('e-services/images/ico-app04.png') }}"
                        alt="Image Description">
                </div>
            </div>
        </section>
    </main>
</div>
