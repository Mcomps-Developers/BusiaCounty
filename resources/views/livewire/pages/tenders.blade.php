<main>
    @section('title')
    Tenders
    @endsection
    <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
        style="background-image: url({{@asset('assets/images/img62.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="text-white mb-2">Tenders</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Resources</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tenders</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <article class="dsSingleContent pt-7 pb-2 pt-md-10 pb-md-1 pt-lg-16 pb-lg-10 pt-xl-21 pb-xl-16">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 col-lg-8 col-xl-9 order-lg-2 mb-6">
                    <div class="pl-xl-14">
                        <header class="docHeadingHead mb-6">
                            <h2 class="h2vii fwSemiBold mb-1">Tenders</h2>
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
                                    class="drItemRow position-relative d-flex pl-3 pl-md-6 pr-3 pr-sm-27 pr-md-30 py-3 mb-4">
                                    <span class="icnWrap flex-shrink-0 pt-1 mr-3">
                                        <img src="{{asset('assets/images/icopdf.png')}}" class="img-fluid" alt="icon">
                                    </span>
                                    <div class="descrWrap">
                                        <h4 class="fontBase font-weight-normal mb-1">
                                            Company_Briefing_Update_for_the_Year.pdf</h4>
                                        <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        <a href="javascript:void(0);" class="btnDownload fwSemiBold">[ Download ]</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div
                                    class="drItemRow position-relative d-flex pl-3 pl-md-6 pr-3 pr-sm-27 pr-md-30 py-3 mb-4">
                                    <span class="icnWrap flex-shrink-0 pt-1 mr-3">
                                        <img src="{{asset('assets/images/icodoc2.png')}}" class="img-fluid" alt="icon">
                                    </span>
                                    <div class="descrWrap">
                                        <h4 class="fontBase font-weight-normal mb-1">
                                            Tax_Increment_Financing_Application.doc</h4>
                                        <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        <a href="javascript:void(0);" class="btnDownload fwSemiBold">[ Download ]</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div
                                    class="drItemRow position-relative d-flex pl-3 pl-md-6 pr-3 pr-sm-27 pr-md-30 py-3 mb-4">
                                    <span class="icnWrap flex-shrink-0 pt-1 mr-3">
                                        <img src="{{asset('assets/images/icopdf.png')}}" class="img-fluid" alt="icon">
                                    </span>
                                    <div class="descrWrap">
                                        <h4 class="fontBase font-weight-normal mb-1">
                                            Annual_Summary_of_Active_Tax_Increment_Financing.pdf</h4>
                                        <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        <a href="javascript:void(0);" class="btnDownload fwSemiBold">[ Download ]</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div
                                    class="drItemRow position-relative d-flex pl-3 pl-md-6 pr-3 pr-sm-27 pr-md-30 py-3 mb-4">
                                    <span class="icnWrap flex-shrink-0 pt-1 mr-3">
                                        <img src="{{asset('assets/images/icojpg.png')}}" class="img-fluid" alt="icon">
                                    </span>
                                    <div class="descrWrap">
                                        <h4 class="fontBase font-weight-normal mb-1">
                                            Financial_Briefing_Update_for_the_Year.jpg</h4>
                                        <strong class="d-block fileSize font-weight-normal">PDF (400kb)</strong>
                                        <a href="javascript:void(0);" class="btnDownload fwSemiBold">[ Download ]</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-3 order-lg-1 mb-6 position-static">
                    <aside class="dscSidebar pt-1 mr-xl-n5">
                        <div class="widget mb-6 mb-lg-10 widgetHelp bg-lDark pt-5 px-6 pb-8 position-relative">
                            <i class="icnWrap icomoon-chatq text-white d-block mb-3"><span
                                    class="sr-only">icon</span></i>
                            <h3 class="h3Medium text-white mb-2">Need any help?</h3>
                            <p>Here you can get your perfect answer for your problem.</p>
                            <a href="{{route('tenders')}}"
                                class="btn btnTheme btn-sm font-weight-bold text-capitalize position-relative border-0 p-0"
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
