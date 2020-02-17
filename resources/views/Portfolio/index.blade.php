@extends("layouts.main")

@section("content")

    <!-- Hero Start -->
    <section class="bg-half-260 d-table w-100" style="background: url('images/work/bg-portfolio.jpg') center center;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center mt-5 pt-4">
                        <h1 class="display-1 font-weight-bold mb-3">Minimal Portfolio</h1>
                        <p class="para-desc mx-auto h6">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Work Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <ul class="col container-filter list-unstyled categories-filter text-center" id="filter">
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded active" data-filter="*">All</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" data-filter=".branding">Websites</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" data-filter=".designing">Android</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" data-filter=".photography">IOS</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" data-filter=".development">Macos</a></li>
                </ul>
            </div><!--end row-->
        </div><!--end container-->

        <div class="container-fluid">
            <div class="row container-grid">
                <div class="col-lg-3 col-md-6 spacing designing">
                    <div class="work-container position-relative d-block overflow-hidden rounded mt-3">
                        <a href="//google.com" class="mfp-image d-inline-block" title="">
                            <img src="images/work/13.jpg" class="img-fluid rounded" alt="work-image">
                        </a>
                        <div class="content personal-port">
                            <a href="page-work-detail.html" class="title text-white d-block font-weight-bold">whatever</a>
                        <small class="text-light">Category</small>
                        </div>
                        <div class="client personal-port">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 spacing photography">
                    <div class="work-container position-relative d-block overflow-hidden rounded mt-3">
                        <a class="mfp-image d-inline-block" href="images/work/14.jpg" title="">
                            <img src="images/work/14.jpg" class="img-fluid rounded" alt="work-image">
                            <div class="overlay-work"></div>
                        </a>
                        <div class="content personal-port">
                            <a href="page-work-detail.html" class="title text-white d-block font-weight-bold">Colors Magazine</a>
                            <small class="text-light">Web Design</small>
                        </div>
                        <div class="client personal-port">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 spacing designing">
                    <div class="work-container position-relative d-block overflow-hidden rounded mt-3">
                        <a class="mfp-image d-inline-block" href="images/work/15.jpg" title="">
                            <img src="images/work/15.jpg" class="img-fluid rounded" alt="work-image">
                            <div class="overlay-work"></div>
                        </a>
                        <div class="content personal-port">
                            <a href="page-work-detail.html" class="title text-white d-block font-weight-bold">Spa Cosmetics</a>
                            <small class="text-light">Developing</small>
                        </div>
                        <div class="client personal-port">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 spacing photography">
                    <div class="work-container position-relative d-block overflow-hidden rounded mt-3">
                        <a class="mfp-image d-inline-block" href="images/work/16.jpg" title="">
                            <img src="images/work/16.jpg" class="img-fluid rounded" alt="work-image">
                            <div class="overlay-work"></div>
                        </a>
                        <div class="content personal-port">
                            <a href="page-work-detail.html" class="title text-white d-block font-weight-bold">Riser Coffee</a>
                            <small class="text-light">Branding</small>
                        </div>
                        <div class="client personal-port">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 spacing branding">
                    <div class="work-container position-relative d-block overflow-hidden rounded mt-3">
                        <a class="mfp-image d-inline-block" href="images/work/17.jpg" title="">
                            <img src="images/work/17.jpg" class="img-fluid rounded" alt="work-image">
                            <div class="overlay-work"></div>
                        </a>
                        <div class="content personal-port">
                            <a href="page-work-detail.html" class="title text-white d-block font-weight-bold">Dancing With Myself</a>
                            <small class="text-light">Photography</small>
                        </div>
                        <div class="client personal-port">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 spacing development">
                    <div class="work-container position-relative d-block overflow-hidden rounded mt-3">
                        <a class="mfp-image d-inline-block" href="images/work/18.jpg" title="">
                            <img src="images/work/18.jpg" class="img-fluid rounded" alt="work-image">
                            <div class="overlay-work"></div>
                        </a>
                        <div class="content personal-port">
                            <a href="page-work-detail.html" class="title text-white d-block font-weight-bold">New trends in SEO</a>
                            <small class="text-light">Business</small>
                        </div>
                        <div class="client personal-port">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 spacing branding">
                    <div class="work-container position-relative d-block overflow-hidden rounded mt-3">
                        <a class="mfp-image d-inline-block" href="images/work/19.jpg" title="">
                            <img src="images/work/19.jpg" class="img-fluid rounded" alt="work-image">
                            <div class="overlay-work"></div>
                        </a>
                        <div class="content personal-port">
                            <a href="page-work-detail.html" class="title text-white d-block font-weight-bold">Spa Cosmetics</a>
                            <small class="text-light">Developing</small>
                        </div>
                        <div class="client personal-port">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 spacing development">
                    <div class="work-container position-relative d-block overflow-hidden rounded mt-3">
                        <a class="mfp-image d-inline-block" href="images/work/20.jpg" title="">
                            <img src="images/work/20.jpg" class="img-fluid rounded" alt="work-image">
                            <div class="overlay-work"></div>
                        </a>
                        <div class="content personal-port">
                            <a href="page-work-detail.html" class="title text-white d-block font-weight-bold">Riser Coffee</a>
                            <small class="text-light">Branding</small>
                        </div>
                        <div class="client personal-port">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Let's talk about your portfolio</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>

                        <div class="mt-3">
                            <a href="javascript:void(0)" class="btn btn-primary">Get Started Now</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </section><!--end section-->
    <!-- Work End -->

@endsection
