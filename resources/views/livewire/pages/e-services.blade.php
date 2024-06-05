<div>
    @section('title')
        Busia Services
    @endsection
    <div class="pb-20 visual-block visal-theme-6 pt-120 pt-md-140 pt-xl-160 pb-md-70"
        style="background-image: url('{{ @asset('e-services/images/bg-visual-6.png') }}');">
        <div class="container position-relative">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-7 col-xl-6">
                    <!-- visual textbox -->
                    <div class="text-black visual-textbox">
                        <h1>Welcome to Busia County
                            eServices Portal.</h1>
                        <p>Access our services easily and quickly. Create an account and get to enjoy Busia County
                            services online.</p>

                        <div class="pt-10 buttons-block pb-30 pt-lg-50">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ route('dashboard') }}" class="btn"><span>Account</span></a>
                                    <a href="{{ route('logout') }}" class="btn btn-gray"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>Logout</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="btn"><span>Login</span></a>
                                    <a href="{{ route('register') }}" class="btn btn-gray"><span>Register</span></a>
                                @endauth
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="image-holder"><img src="{{ asset('e-services/images/visual-image-6.png') }}"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="main">

        <!-- Browse By Categories -->
        <section
            class="bg-white section section-theme-10 pt-35 pt-md-50 pt-lg-75 pt-xxl-120 pb-35 pb-md-50 pb-lg-65 pb-xxl-100">
            <div class="container">
                <!-- Section header -->
                <header class="text-center section-header d-flex flex-column-reverse mb-50 mb-lg-75">
                    <h2>Services</h2>
                    <p>E-Services available online</p>
                </header>
                <div class="cats-block">
                    <div class="cat-box">
                        <a href="{{ route('service.details') }}">
                            <div class="icon-box"><img src="{{ asset('e-services/images/cat-ico1.svg') }}"
                                    alt="icon">
                            </div>
                            <div class="cat-text">
                                <strong class="title">Unified Business License</strong>
                                <p>Access unified business licensing services.</p>
                            </div>
                        </a>
                    </div>
                    <div class="cat-box">
                        <a href="javascript:void(0);">
                            <div class="icon-box"><img src="{{ asset('e-services/images/cat-ico2.svg') }}"
                                    alt="icon">
                            </div>
                            <div class="cat-text">
                                <strong class="title">Land Services</strong>
                                <p>2 Services available</p>
                            </div>
                        </a>
                    </div>
                    <div class="cat-box">
                        <a href="javascript:void(0);">
                            <div class="icon-box"><img src="{{ asset('e-services/images/cat-ico3.svg') }}"
                                    alt="icon">
                            </div>
                            <div class="cat-text">
                                <strong class="title">Property Services</strong>
                                <p>2 Services available</p>
                            </div>
                        </a>
                    </div>
                    <div class="cat-box">
                        <a href="javascript:void(0);">
                            <div class="icon-box"><img src="{{ asset('e-services/images/cat-ico4.svg') }}"
                                    alt="icon">
                            </div>
                            <div class="cat-text">
                                <strong class="title">Advertisement</strong>
                                <p>2 Services available</p>
                            </div>
                        </a>
                    </div>
                    <div class="cat-box">
                        <a href="javascript:void(0);">
                            <div class="icon-box"><img src="{{ asset('e-services/images/cat-ico5.svg') }}"
                                    alt="icon">
                            </div>
                            <div class="cat-text">
                                <strong class="title">Licensing</strong>
                                <p>2 Services available</p>
                            </div>
                        </a>
                    </div>
                    <div class="cat-box">
                        <a href="{{ route('parking.details') }}">
                            <div class="icon-box"><img src="{{ asset('e-services/images/cat-ico6.svg') }}"
                                    alt="icon">
                            </div>
                            <div class="cat-text">
                                <strong class="title">Parking</strong>
                                <p>3 Services available</p>
                            </div>
                        </a>
                    </div>
                    <div class="cat-box">
                        <a href="javascript:void(0);">
                            <div class="icon-box"><img src="{{ asset('e-services/images/cat-ico7.svg') }}"
                                    alt="icon">
                            </div>
                            <div class="cat-text">
                                <strong class="title">Health Services</strong>
                                <p>2 Services available</p>
                            </div>
                        </a>
                    </div>
                    <div class="cat-box">
                        <a href="javascript:void(0);">
                            <div class="icon-box"><img src="{{ asset('e-services/images/cat-ico8.svg') }}"
                                    alt="icon">
                            </div>
                            <div class="cat-text">
                                <strong class="title">Other Services</strong>
                                <p>2 Services available</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
