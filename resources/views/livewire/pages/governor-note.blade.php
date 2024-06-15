<main>
    @section('title')
    Governor's Note
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">H.E. Dr. Paul Nyongesa Otuoma</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="h/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">About</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Governor's Note</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <article class="tmContentBlock pt-7 pb-7 pt-md-10 pb-md-10 pt-lg-16 pb-lg-16 pt-xl-22 pb-xl-22">
        <div class="container">
            <header
                class="pt-4 overflow-hidden bg-white shadow tmcbDescriptionBox d-lg-flex pt-lg-0 position-relative mb-7 mb-md-10 mb-lg-15">
                <span class="flex-shrink-0 mx-auto imgHolder bgCover mx-lg-0 d-block"
                    style="background-image: url(https://placehold.co/1200x800);"></span>
                <div class="px-5 pt-6 pb-6 descrWrap flex-grow-1 px-xl-12 pt-xl-9 pb-xl-12">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <h2 class="mb-1 fwMedium h3Small">H.E. Name Here</h2>
                            <h3 class="text-secondary fwSemiBold fontBase">Governor, {{ config('app.name') }}</h3>
                            <hr class="mx-0 mt-2 mb-3 mccSeprator">
                            <dl class="overflow-hidden tmcbInfosList">
                                <dt>agenda:</dt>
                                <dd>Strategy, Leadership</dd>
                                <dt>age:</dt>
                                <dd>xx Years</dd>
                                <dt>Phone:</dt>
                                <dd>
                                    <a href="tel:+254xxxxxxxxx">+254xxxxxxxxx</a>
                                </dd>
                                <dt>Email:</dt>
                                <dd>
                                    <a href="mailto:example@domain.com">example@domain.com</a>
                                </dd>
                            </dl>
                            <ul class="flex-wrap mb-0 list-unstyled socialNetworks tmcbSocialNetworks d-flex mt-xl-6">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fab fa-twitter"><span class="sr-only">twitter</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fab fa-facebook-square"><span class="sr-only">facebook</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fab fa-linkedin-in"><span class="sr-only">linkedin</span></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fab fa-instagram"><span class="sr-only">instagram</span></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="pl-xl-10 pt-7 pt-md-0">
                                <div class="mb-5 fzMedium">
                                    <p>In many countries, a mayor is the highest ranking official in a municipal such as
                                        that of a city or a town and top executive rank or commanding officer.</p>
                                </div>
                                <p>Worldwide, there is a wide variance in local laws and customs regarding the powers
                                    and responsibilities of a mayor.</p>
                                <span class="mt-4 signIcn d-block">
                                    <img src="{{asset('assets/images/signature1.png')}}" class="img-fluid"
                                        alt="signature">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <i class="icomoon-ico23 position-absolute icnWatermark"><span class="sr-only">icon</span></i>
            </header>
            <h2 class="mb-5 h2vii fwSemiBold">Biography</h2>
            <p class="mb-5">Jaye launched his career in politics with stints in advance, labor organizing and political
                journalism. He began work as an account executive and then Senior Vice President and Creative Director
                at Clinton Reilly Campaigns, at the time the nation’s largest political consulting firm. In 1990, he
                founded his own firm, Terris and Jaye, which grew into one of the nation’s largest political consulting
                firms. In 2001, he founded Storefront Political Media to provide political client.</p>
            <p class="mb-5">Every one of his works is covered with a mantle of sacredness, through which he demonstrates
                the importance of architecture as a means of expression of human memory. In 1998, he founded his own
                firm, Terris and Jaye, which grew into one of the nation’s largest political consulting firms. In 2006,
                he founded Storefront Political Media to provide political clients the full range of media and message
                services..</p>
            <div class="mb-2 row mt-7 mt-md-10">
                <div class="col-12 col-lg-6">
                    <h2 class="mb-5 h2vii fwSemiBold">Education</h2>
                    <ul class="flex-wrap list-unstyled edupiInfosList d-flex">
                        <li>
                            <div class="pb-5 pl-4 edupiilWrap position-relative">
                                <strong
                                    class="mb-2 d-block fwMedium text-lDark fontAlter timeTitle position-relative">
                                    <time datetime="2011-01-12">1979 – 1983</time>
                                </strong>
                                <strong class="fwSemiBold d-block text-lDark">Master of Political Science</strong>
                                <strong class="font-weight-normal d-block">Columbia University, CL</strong>
                            </div>
                        </li>
                        <li>
                            <div class="pb-5 pl-4 edupiilWrap position-relative">
                                <strong
                                    class="mb-2 d-block fwMedium text-lDark fontAlter timeTitle position-relative">
                                    <time datetime="2011-01-12">1984 – 1987</time>
                                </strong>
                                <strong class="fwSemiBold d-block text-lDark">UG Degree of Politics</strong>
                                <strong class="font-weight-normal d-block">University of Chicago School</strong>
                            </div>
                        </li>
                        <li>
                            <div class="pb-5 pl-4 edupiilWrap position-relative">
                                <strong
                                    class="mb-2 d-block fwMedium text-lDark fontAlter timeTitle position-relative">
                                    <time datetime="2011-01-12">1992 – 2004</time>
                                </strong>
                                <strong class="fwSemiBold d-block text-lDark">Diplamo of Business Management</strong>
                                <strong class="font-weight-normal d-block">University of Business. NY</strong>
                            </div>
                        </li>
                        <li>
                            <div class="pb-5 pl-4 edupiilWrap position-relative">
                                <strong
                                    class="mb-2 d-block fwMedium text-lDark fontAlter timeTitle position-relative">
                                    <time datetime="2011-01-12">2004 – 2008</time>
                                </strong>
                                <strong class="fwSemiBold d-block text-lDark">Higher School Education</strong>
                                <strong class="font-weight-normal d-block">School of Losangle</strong>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
            <h2 class="mb-5 h2vii fwSemiBold">Professional Info</h2>
            <p>he bodies were lying in the streets un-buried. All railroads and vessels carrying food and such things
                into the great city had ceased runnings and mobs of the hungry poor were pillaging the stores and
                warehouses. Murder and robbery and drunkenness were everywhere. Already the people had fled from the
                city by millions at first the rich, in their private motor-cars and dirigibles, and then the great mass
                of the population. They normally work full-time and often times work weekends plus overtime. They are
                mostly employed by private businesses or are self-employed. The risk of injury or illness is higher than
                average.</p>
           
        </div>
    </article>
</main>
