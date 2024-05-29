<div class="phStickyWrap">

    <!-- pageHeader -->
    <header id="pageHeader" class="bg-white">
        <div class="hdTopBar py-2 py-xl-3 bg-dark d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <ul class="list-unstyled hdScheduleList mb-0 d-flex flex-wrap align-items-center">
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-phone text-secondary"></span></i>
                                    Call on: 1800 123 4567
                                </a>
                            </li>
                            <li>
                                <time datetime="2011-01-12">
                                    <i class="fa fa-calendar text-secondary"></span></i>
                                    Open Hours: Mon - Fri 8.00 am - 5.00 pm
                                </time>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="list-unstyled hdAlterLinksList d-flex justify-content-end flex-wrap mb-0">
                            <li>
                                <a href="https://mail.busiacounty.go.ke">Staff Mail</a>
                            </li>
                            <li>
                                <a href="{{route('jobs')}}">Careers</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Report Corruption</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hdFixerWrap py-2 py-md-3 py-xl-5 sSticky bg-white">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light p-0">
                    <div class="logo flex-shrink-0 mr-3 mr-xl-8 mr-xlwd-16">
                        <a href="/">
                            <img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="Busia County">
                        </a>
                    </div>
                    <div
                        class="hdNavWrap flex-grow-1 d-flex align-items-center justify-content-end justify-content-lg-start">
                        <div class="collapse navbar-collapse pageMainNavCollapse mt-2 mt-md-0" id="pageMainNavCollapse">
                            <ul class="navbar-nav mainNavigation">
                                <li class="nav-item">
                                    <a class="nav-link" href="/"
                                        onclick="event.preventDefault(); window.location.href = this.getAttribute('href');">Home</a>
                                </li>
                                <li class="nav-item dropdown ddohOpener">
                                    <a class="nav-link dropdown-toggle dropIcn" href="javascript:void(0);" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                                    <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                        <ul class="list-unstyled mb-0 hdDropdownList">
                                            <li class="dropdown-submenu">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item dropdown-toggle dropIcn" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Municipalities</a>
                                                <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                                    <ul class="list-unstyled mb-0 hdDropdownList">
                                                        <li><a class="dropdown-item"
                                                                href="{{route('municipality')}}">Busia
                                                                Municipality</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{route('municipality')}}">Malaba
                                                                Municipality</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a class="dropdown-item" href="{{route('about')}}">About Busia
                                                    County</a></li>
                                            <li><a class="dropdown-item" href="{{route('governors.note')}}">Governor's
                                                    Note</a></li>
                                            <li><a class="dropdown-item" href="{{route('executive')}}">The Executive</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{route('chief.officers')}}">Chief
                                                    Officers</a></li>
                                            <li><a class="dropdown-item" href="{{route('public.service')}}">Public
                                                    Service</a></li>
                                            <li><a class="dropdown-item" target="_/blank"
                                                    href="https://busiaassembly.go.ke/">County Assembly</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{route('subcounties')}}">Sub-Counties</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown ddohOpener">
                                    <a class="nav-link dropdown-toggle dropIcn" href="javascript:void(0);" role="button"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Departments</a>
                                    <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                        <ul class="list-unstyled mb-0 hdDropdownList">
                                            <li><a class="dropdown-item" href="{{route('departments')}}">All
                                                    Departments</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{route('department.details')}}">Labour</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{route('department.details')}}">Health</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{route('department.details')}}">Education</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{route('department.details')}}">Lands</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown ddohOpener">
                                    <a class="nav-link dropdown-toggle dropIcn" href="javascript:void(0);" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
                                    <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                        <ul class="list-unstyled mb-0 hdDropdownList">
                                            <li><a class="dropdown-item" href="{{route('downloads')}}">Downloads</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{route('news.speeches')}}">News &amp;
                                                    Speeches</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{route('events')}}">Events</a></li>
                                            <li><a class="dropdown-item" href="{{route('tenders')}}">Tenders</a></li>
                                            <li><a class="dropdown-item" href="{{route('budget')}}">Budgets</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('eservices')}}"
                                        onclick="event.preventDefault(); window.location.href = this.getAttribute('href');">E-Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('projects')}}"
                                        onclick="event.preventDefault(); window.location.href = this.getAttribute('href');">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}"
                                        onclick="event.preventDefault(); window.location.href = this.getAttribute('href');">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <form action="#" class="hdSearchForm ml-3 ml-xl-6">
                            <a class="hdSearchOpener" data-toggle="collapse" href="#hdSearchCollapse" role="button"
                                aria-expanded="false" aria-controls="hdSearchCollapse">
                                <i class="fa fa-search text-primary"></span></i>
                            </a>
                            <div class="collapse hdSearchCollapse d-block position-fixed" id="hdSearchCollapse">
                                <div class="d-flex w-100 h-100 align-items-center jusity-content-center">
                                    <div class="container d-block text-center text-light">
                                        <div class="row">
                                            <div class="col-12 col-md-8 offset-md-2">
                                                <div class="input-group mb-3">
                                                    <input type="search" class="form-control text-left"
                                                        placeholder="Search&hellip;">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary" type="button">Search</button>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Popular searches: <br class="d-md-none"><a
                                                        href="javascript:void(0);">Tenders</a>, <a
                                                        href="javascript:void(0);"> Careers</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="position-absolute rounded-circle bg-danger text-white btnClose d-flex align-items-center justify-content-center"
                                    data-toggle="collapse" href="#hdSearchCollapse" role="button" aria-expanded="true"
                                    aria-controls="hdSearchCollapse">
                                    <i class="fas fa-times"><span class="sr-only">search</span></i>
                                </a>
                            </div>
                        </form>
                    </div>
                    <div class="hdRighterWrap d-flex align-items-center justify-content-end">
                        <div class="dropdown hdLangDropdown ddohOpener d-none d-lg-block">
                            <a class="d-inline-block align-top dropdown-toggle dropIcn" href="javascript:void(0);"
                                role="button" id="hdLanguagedropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Eng</a>
                            <div class="dropdown-menu dropdown-menu-right rounded-lg overflow-hidden desktopDropOnHover p-0"
                                aria-labelledby="hdLanguagedropdown">
                                <a class="dropdown-item text-center active" href="javascript:void(0);">Eng</a>
                                <a class="dropdown-item text-center" href="javascript:void(0);">Fre</a>
                                <a class="dropdown-item text-center" href="javascript:void(0);">Ara</a>
                            </div>
                        </div>
                        <a href="{{route('eservices')}}"
                            class="btn btn-outline-secondary bdrWidthAlter ml-3 ml-xl-6 btnHd d-none d-lg-block text-capitalize position-relative border-0 p-0"
                            data-hover="Report an Issues">
                            <span class="d-block btnText">E-Services Portal</span>
                        </a>
                        <button class="navbar-toggler pgNavOpener ml-2 bdrWidthAlter position-relative" type="button"
                            data-toggle="collapse" data-target="#pageMainNavCollapse"
                            aria-controls="pageMainNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</div>
