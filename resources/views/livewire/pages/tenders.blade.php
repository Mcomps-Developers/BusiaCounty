<main>
    @section('title')
    Tenders
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">Tenders</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Resources</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tenders</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <article class="pb-2 dsSingleContent pt-7 pt-md-10 pb-md-1 pt-lg-16 pb-lg-10 pt-xl-21 pb-xl-16">
        <div class="container position-relative">
            <div class="row">
                <div class="mb-6 col-12 col-lg-8 col-xl-9 order-lg-2">
                    <div class="pl-xl-14">
                        <header class="mb-6 docHeadingHead">
                            <h2 class="mb-1 h2vii fwSemiBold">Tenders</h2>
                            <div class="fzMedium">
                                <p>We help our clients to build their best possible economic We understand you’re saving
                                    for all different life events: retirement, a house, simply to build wealth, or all
                                    of the above. Your investment account should adjust to your life — not the other way
                                    around.</p>
                            </div>
                        </header>

                        <h3 class="fwSemiBold mb-7">Attached Documents</h3>
                        <ul class="list-unstyled drItemsList mb-11">
                            <li>
                                <div
                                    class="py-3 pl-3 pr-3 mb-4 drItemRow position-relative d-flex pl-md-6 pr-sm-27 pr-md-30">
                                    <span class="flex-shrink-0 pt-1 mr-3 icnWrap">
                                        <img src="{{asset('assets/images/icopdf.png')}}" class="img-fluid" alt="icon">
                                    </span>
                                    <div class="descrWrap">
                                        <h4 class="mb-1 fontBase font-weight-normal">
                                            Company_Briefing_Update_for_the_Year.pdf</h4>
                                        <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        <a href="javascript:void(0);" class="btnDownload fwSemiBold"><i class="fa fa-cloud-download"></i> Download</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div
                                    class="py-3 pl-3 pr-3 mb-4 drItemRow position-relative d-flex pl-md-6 pr-sm-27 pr-md-30">
                                    <span class="flex-shrink-0 pt-1 mr-3 icnWrap">
                                        <img src="{{asset('assets/images/icodoc2.png')}}" class="img-fluid" alt="icon">
                                    </span>
                                    <div class="descrWrap">
                                        <h4 class="mb-1 fontBase font-weight-normal">
                                            Tax_Increment_Financing_Application.doc</h4>
                                        <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        <a href="javascript:void(0);" class="btnDownload fwSemiBold"><i class="fa fa-cloud-download"></i> Download</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div
                                    class="py-3 pl-3 pr-3 mb-4 drItemRow position-relative d-flex pl-md-6 pr-sm-27 pr-md-30">
                                    <span class="flex-shrink-0 pt-1 mr-3 icnWrap">
                                        <img src="{{asset('assets/images/icopdf.png')}}" class="img-fluid" alt="icon">
                                    </span>
                                    <div class="descrWrap">
                                        <h4 class="mb-1 fontBase font-weight-normal">
                                            Annual_Summary_of_Active_Tax_Increment_Financing.pdf</h4>
                                        <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        <a href="javascript:void(0);" class="btnDownload fwSemiBold"><i class="fa fa-cloud-download"></i> Download</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div
                                    class="py-3 pl-3 pr-3 mb-4 drItemRow position-relative d-flex pl-md-6 pr-sm-27 pr-md-30">
                                    <span class="flex-shrink-0 pt-1 mr-3 icnWrap">
                                        <img src="{{asset('assets/images/icojpg.png')}}" class="img-fluid" alt="icon">
                                    </span>
                                    <div class="descrWrap">
                                        <h4 class="mb-1 fontBase font-weight-normal">
                                            Financial_Briefing_Update_for_the_Year.jpg</h4>
                                        <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        <a href="javascript:void(0);" class="btnDownload fwSemiBold"><i class="fa fa-cloud-download"></i> Download</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mb-6 col-12 col-lg-4 col-xl-3 order-lg-1 position-static">
                    <aside class="pt-1 dscSidebar mr-xl-n5">
                        <div class="px-6 pt-5 pb-8 mb-6 widget mb-lg-10 widgetHelp bg-lDark position-relative">
                            <i class="mb-3 text-white icnWrap icomoon-chatq d-block"><span
                                    class="sr-only">icon</span></i>
                            <h3 class="mb-2 text-white h3Medium">Need any help?</h3>
                            <p>Here you can get your perfect answer for your problem.</p>
                            <a href="{{route('tenders')}}"
                                class="p-0 border-0 btn btnTheme btn-sm font-weight-bold text-capitalize position-relative"
                                data-hover="Contact now">
                                <span class="d-block btnText">Contact now</span>
                            </a>
                            <i class="whWatermarkIcn icomoon-helpc position-absolute"><span
                                    class="sr-only">icon</span></i>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </article>
</main>
