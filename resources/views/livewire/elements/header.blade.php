<div class="phStickyWrap">

    <!-- pageHeader -->
    <header id="pageHeader" class="bg-white">
        <div class="py-2 hdTopBar py-xl-3 bg-dark d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <ul class="flex-wrap mb-0 text-white list-unstyled hdScheduleList d-flex align-items-center">
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="text-white fa fa-phone"></span></i>
                                    +254xxxxxxxxx
                                </a>
                            </li>
                            <li>
                                <time datetime="2011-01-12">
                                    <i class="text-white fa fa-calendar"></span></i>
                                    Mon - Fri 8.00 am - 5.00 pm
                                </time>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="flex-wrap mb-0 text-white list-unstyled hdAlterLinksList d-flex justify-content-end">
                            <li>
                                <a href="https://mail.busiacounty.go.ke">Staff Mail</a>
                            </li>
                            <li>
                                <a href="{{ route('jobs') }}">Careers</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Report Corruption</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-2 hdFixerWrap py-md-3 py-xl-5 sSticky" style="background-color: #9ECA3E">
            <div class="container">
                <nav class="p-0 navbar navbar-expand-md navbar-light">
                    <div class="flex-shrink-0 mr-3 logo mr-xl-8 mr-xlwd-16">
                        <a href="/">
                            <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="Busia County">
                        </a>
                    </div>
                    <div
                        class="hdNavWrap flex-grow-1 d-flex align-items-center justify-content-end justify-content-lg-start">
                        <div class="mt-2 collapse navbar-collapse pageMainNavCollapse mt-md-0" id="pageMainNavCollapse">
                            <ul class="navbar-nav mainNavigation">
                                <li class="nav-item">
                                    <a class="nav-link" href="/"
                                        onclick="event.preventDefault(); window.location.href = this.getAttribute('href');">Home</a>
                                </li>
                                <li class="nav-item dropdown ddohOpener">
                                    <a class="nav-link dropdown-toggle dropIcn" href="javascript:void(0);" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                                    <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                        <ul class="mb-0 list-unstyled hdDropdownList">
                                            <li><a class="dropdown-item" href="{{ route('about') }}">History of Busia
                                                    County</a></li>
                                            <li class="dropdown-submenu">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item dropdown-toggle dropIcn" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">County Structure</a>
                                                <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                                    <ul class="mb-0 list-unstyled hdDropdownList">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('governor') }}">Governorship</a></li>
                                                        {{-- <li><a class="dropdown-item"
                                                                href="{{ route('deputy.governor') }}">Deputy
                                                                Governor</a></li> --}}
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('public.service') }}">County Public
                                                                Service Board</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('secretary') }}">County Secretary</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="{{ route('executive') }}">The
                                                                Executive</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('chief.officers') }}">Chief
                                                                Officers</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('directors') }}">Directors</a></li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item dropdown-toggle dropIcn" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Municipalities</a>
                                                <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                                    <ul class="mb-0 list-unstyled hdDropdownList">
                                                        @foreach ($mucipality as $item)
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('municipality', ['slug' => $item->slug]) }}">{{
                                                                $item->name }}</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('subcounties') }}">Constituencies</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('wards') }}">Wards</a>
                                            </li>
                                            <li><a class="dropdown-item" target="_/blank"
                                                    href="https://busiaassembly.go.ke/">County Assembly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown ddohOpener">
                                    <a class="nav-link dropdown-toggle dropIcn" href="javascript:void(0);" role="button"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Departments</a>
                                    <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                        <ul class="mb-0 list-unstyled hdDropdownList">
                                            @foreach ($departments as $item)
                                            <li><a class="dropdown-item"
                                                    href="{{ route('department.details', ['slug' => $item->slug]) }}"
                                                    style="text-transform:capitalize">{{ $item->title }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown ddohOpener">
                                    <a class="nav-link dropdown-toggle dropIcn" href="javascript:void(0);" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
                                    <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                        <ul class="mb-0 list-unstyled hdDropdownList">
                                            @foreach ($categories as $item)
                                            <li><a class="dropdown-item"
                                                    href="{{ route('blogs.per.category', ['slug' => $item->slug]) }}">{{
                                                    $item->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('projects') }}"
                                        onclick="event.preventDefault(); window.location.href = this.getAttribute('href');">Projects</a>
                                </li>
                                <li class="nav-item dropdown ddohOpener">
                                    <a class="nav-link dropdown-toggle dropIcn" href="javascript:void(0);" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
                                    <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                        <ul class="mb-0 list-unstyled hdDropdownList">
                                            <li><a class="dropdown-item" href="{{ route('downloads') }}">Downloads</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('events') }}">County Events</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('tenders') }}">Tenders</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('budget') }}">Budget
                                                    Documents</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}"
                                        onclick="event.preventDefault(); window.location.href = this.getAttribute('href');">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <form action="#" class="ml-3 hdSearchForm ml-xl-6">
                            <a class="hdSearchOpener" data-toggle="collapse" href="#hdSearchCollapse" role="button"
                                aria-expanded="false" aria-controls="hdSearchCollapse">
                                <i class="fa fa-search text-primary"></span></i>
                            </a>
                            <div class="collapse hdSearchCollapse d-block position-fixed" id="hdSearchCollapse">
                                <div class="d-flex w-100 h-100 align-items-center jusity-content-center">
                                    <div class="container text-center d-block text-light">
                                        <div class="row">
                                            <div class="col-12 col-md-8 offset-md-2">
                                                <div class="mb-3 input-group">
                                                    <input type="search" class="text-left form-control"
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
                                <a class="text-white position-absolute rounded-circle bg-danger btnClose d-flex align-items-center justify-content-center"
                                    data-toggle="collapse" href="#hdSearchCollapse" role="button" aria-expanded="true"
                                    aria-controls="hdSearchCollapse">
                                    <i class="fas fa-times"><span class="sr-only">search</span></i>
                                </a>
                            </div>
                        </form>
                    </div>
                    <div class="hdRighterWrap d-flex align-items-center justify-content-end">
                        <div class="dropdown hdLangDropdown ddohOpener d-none d-lg-block">
                            <a class="align-top d-inline-block dropdown-toggle dropIcn" href="javascript:void(0);"
                                role="button" id="hdLanguagedropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Eng</a>
                            <div class="p-0 overflow-hidden rounded-lg dropdown-menu dropdown-menu-right desktopDropOnHover"
                                aria-labelledby="hdLanguagedropdown">
                                <a class="text-center dropdown-item active" href="javascript:void(0);">Eng</a>
                                <a class="text-center dropdown-item" href="javascript:void(0);">Swa</a>

                            </div>
                        </div>
                        <a href="{{ route('eservices') }}"
                            class="p-0 ml-3 border-0 btn btn-outline-secondary bdrWidthAlter ml-xl-6 btnHd d-none d-lg-block text-capitalize position-relative"
                            data-hover="E-Services Portal">
                            <span class="d-block btnText">E-Services Portal</span>
                        </a>
                        <button class="ml-2 navbar-toggler pgNavOpener bdrWidthAlter position-relative" type="button"
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
