<main>
    @section('title')
    Sub-Counties
    @endsection
    <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
        style="background-image: url({{@asset('assets/images/img58.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="text-white mb-2">Sub-Counties</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
                            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Administration</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sub-Counties</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="servicesBlock pt-7 pb-4 pt-md-9 pb-md-7 pt-lg-13 pb-lg-11 pt-xl-20 pb-xl-17">
        <div class="container">
            <header class="headingHead text-center mb-8 mb-lg-12">
                <h2 class="fwSemiBold">Sub-Counties in {{config('app.name')}}</h2>
                <p>{{config('app.name')}} is organized into seven sub counties.</p>
            </header>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="dcsColumn d-flex position-relative bg-white overflow-hidden mb-6">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="align w-100 py-2 px-3 px-xl-6">
                                <i class="icomoon-ico1 d-flex align-items-center icnWrap mb-4"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Teso North Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>TesoNorth Sub-County is comprised of six wards namely: Malaba South, Malaba
                                        Central, Malaba North, Ang’urai East, Ang’urai South and Ang’urai North.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="icomoon-ico1 icnWatermark position-absolute ml-1"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="dcsColumn d-flex position-relative bg-white overflow-hidden mb-6">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="align w-100 py-2 px-3 px-xl-6">
                                <i class="icomoon-ico2 d-flex align-items-center icnWrap mb-4"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Teso South Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Teso South is made of six wards namely: Amukura West, Amukura East, Amukura
                                        Central, Angorom, Chakol North and Chakol South. The main town, which also
                                        serves as its administrative headquarters, is Amukura.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="icomoon-ico2 icnWatermark position-absolute ml-1"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="dcsColumn d-flex position-relative bg-white overflow-hidden mb-6">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="align w-100 py-2 px-3 px-xl-6">
                                <i class="icomoon-ico3 d-flex align-items-center icnWrap mb-4"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Nambale Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Nambale is administratively divided into four different wards which include:
                                        Nambale Township, Bukhayo East, Bukhayo North/Walatsi and Bukhayo Central.
                                        Together, these wards occupy an area of 237.8Km2.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="icomoon-ico3 icnWatermark position-absolute ml-1"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="dcsColumn d-flex position-relative bg-white overflow-hidden mb-6">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="align w-100 py-2 px-3 px-xl-6">
                                <i class="icomoon-ico4 d-flex align-items-center icnWrap mb-4"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Matayos Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>It is located in the lower region of Busia County. It has five wards namely:
                                        Mayenje, Burumba, Matayos South, Busibwabo and Bukhayo West wards. It is majorly
                                        occupied by Bakhayo sub tribe,Teso and Luo tribes.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="icomoon-ico4 icnWatermark position-absolute ml-1"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="dcsColumn d-flex position-relative bg-white overflow-hidden mb-6">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="align w-100 py-2 px-3 px-xl-6">
                                <i class="icomoon-ico17 d-flex align-items-center icnWrap mb-4"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Butula Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>It's one of the Sub Counties located in the lower region of Busia County. It
                                        borders Siaya County and Kakamega County. It has 6 wards namely : Marachi West,
                                        Marachi North, Marachi Central, Kingandole and Elugulu wards.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="icomoon-ico17 icnWatermark position-absolute ml-1"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="dcsColumn d-flex position-relative bg-white overflow-hidden mb-6">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="align w-100 py-2 px-3 px-xl-6">
                                <i class="icomoon-ico6 d-flex align-items-center icnWrap mb-4"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Samia Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Samia Sub Countyis located in the lower region of Busia county. Its administered
                                        by Ms. Caroline Oduor, as Sub County administrator and it comprises four wards
                                        namely:Bwiri, Agenga/Nanguba, Namboboto/Nambuku and Nangina wards.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="icomoon-ico6 icnWatermark position-absolute ml-1"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="dcsColumn d-flex position-relative bg-white overflow-hidden mb-6">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="align w-100 py-2 px-3 px-xl-6">
                                <i class="icomoon-ico24 d-flex align-items-center icnWrap mb-4"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Bunyala Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Bunyala Sub County is located in the lower region of Busia county. It borders
                                        SamiaSub County, Siaya county and Uganda.The Sub County is administered by a Sub
                                        County Administrator, Mr.Nelson Otando.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="icomoon-ico24 icnWatermark position-absolute ml-1"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <aside class="helpAsideBlock text-center pt-4 pb-7 pt-md-7 pb-md-10 pb-lg-16 pb-xl-22">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
                    <strong class="d-block habTitle fontAlter font-weight-normal mb-2">Do you need help?</strong>
                    <h2>If you have any question, <br>Feel free to contact us</h2>
                    <a href="{{route('contact')}}"
                        class="btn btnTheme text-capitalize position-relative border-0 p-0 minWidthMedium btnxLarge mt-5"
                        data-hover="Contact Us Now">
                        <span class="d-block btnText">Contact Us Now</span>
                    </a>
                </div>
            </div>
        </div>
    </aside>
</main>
