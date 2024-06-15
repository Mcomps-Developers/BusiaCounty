<main>
    @section('title')
    Sub-Counties
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">Sub-Counties</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Administration</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sub-Counties</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="pb-4 servicesBlock pt-7 pt-md-9 pb-md-7 pt-lg-13 pb-lg-11 pt-xl-20 pb-xl-17">
        <div class="container">
            <header class="mb-8 text-center headingHead mb-lg-12">
                <h2 class="fwSemiBold">Sub-Counties in {{config('app.name')}}</h2>
                <p>{{config('app.name')}} is organized into seven sub counties.</p>
            </header>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 fa fa-map-marker d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Teso North Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>TesoNorth Sub-County is comprised of six wards namely: Malaba South, Malaba
                                        Central, Malaba North, Ang’urai East, Ang’urai South and Ang’urai North.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 fa fa-map-marker icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 fa fa-map-marker d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Teso South Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Teso South is made of six wards namely: Amukura West, Amukura East, Amukura
                                        Central, Angorom, Chakol North and Chakol South. The main town, which also
                                        serves as its administrative headquarters, is Amukura.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 fa fa-map-marker icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 fa fa-map-marker d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Nambale Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Nambale is administratively divided into four different wards which include:
                                        Nambale Township, Bukhayo East, Bukhayo North/Walatsi and Bukhayo Central.
                                        Together, these wards occupy an area of 237.8Km2.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 fa fa-map-marker icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 fa fa-map-marker d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Matayos Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>It is located in the lower region of Busia County. It has five wards namely:
                                        Mayenje, Burumba, Matayos South, Busibwabo and Bukhayo West wards. It is majorly
                                        occupied by Bakhayo sub tribe,Teso and Luo tribes.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 fa fa-map-marker icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 fa fa-map-marker d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Butula Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>It's one of the Sub Counties located in the lower region of Busia County. It
                                        borders Siaya County and Kakamega County. It has 6 wards namely : Marachi West,
                                        Marachi North, Marachi Central, Kingandole and Elugulu wards.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 fa fa-map-marker icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 fa fa-map-marker d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Samia Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Samia Sub Countyis located in the lower region of Busia county. Its administered
                                        by Ms. Caroline Oduor, as Sub County administrator and it comprises four wards
                                        namely:Bwiri, Agenga/Nanguba, Namboboto/Nambuku and Nangina wards.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 fa fa-map-marker icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 fa fa-map-marker d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Bunyala Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Bunyala Sub County is located in the lower region of Busia county. It borders
                                        SamiaSub County, Siaya county and Uganda.The Sub County is administered by a Sub
                                        County Administrator, Mr.Nelson Otando.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 fa fa-map-marker icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <aside class="pt-4 text-center helpAsideBlock pb-7 pt-md-7 pb-md-10 pb-lg-16 pb-xl-22">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
                    <strong class="mb-2 d-block habTitle fontAlter font-weight-normal">Do you need help?</strong>
                    <h2>If you have any question, <br>Feel free to contact us</h2>
                    <a href="{{route('contact')}}"
                        class="p-0 mt-5 border-0 btn btnTheme text-capitalize position-relative minWidthMedium btnxLarge"
                        data-hover="Contact Us Now">
                        <span class="d-block btnText">Contact Us Now</span>
                    </a>
                </div>
            </div>
        </div>
    </aside>
</main>
