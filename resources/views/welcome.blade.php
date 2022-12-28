<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Berkah Istiqomah Farm</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-144098545-1"); 
    </script>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader"></div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Mouse cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container bg-black">
            <!-- Logo -->
            <div class="logo-wrapper valign">
                <div class="logo">
                    <h2><a href="index.html">Berkah Istiqomah</a><span>Farm</span></h2>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="ti-line-double"></i></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-scroll-nav="0">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="1">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="2">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="3">Galeri</a>
                    </li>
                    <!-- <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="4">Chef</a>
            </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="5">Berita</a>
                    </li>
                    <!-- <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="6">Kontak</a>
            </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Slider -->
    <header class="header slider-fade" data-scroll-index="0">
        <div class="owl-carousel owl-theme">
            @foreach ($sliders as $item)
                <div class="text-left item bg-img" data-overlay-dark="4"
                    data-background="{{ asset('public/' . $item->image) }}">
                    <div class="v-middle caption mt-30">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="o-hidden">
                                        <h4>{{ $item->badge }}</h4>
                                        <h1>{{ $item->title }}</h1>
                                        <a href="{{ $item->link }}" target="_blank" class="butn butn-dark">
                                            <span>{{ $item->button }}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </header>
    <!-- About -->
    <section class="section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-60 animate-box" data-animate-effect="fadeInUp">
                    <span class="section-subtitle">Tentang Kami</span>
                    <h2 class="section-title">{{ $about->title }}</span>
                    </h2>
                    {!! $about->description !!}
                </div>
                <div class="col-md-6 about mb-60 animate-box" data-animate-effect="fadeInUp">
                    <div class="about-frame">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="frame-img">
                                    <div class="img mb-20">
                                        <img src="{{ asset($about->image) }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Menus -->
    <section class="menus menu section-padding bg-darkcolor" data-scroll-index="2">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 mb-30 text-center">
                    <h2 class="section-title">Menu <span>List</span></h2>
                    <hr class="line line-hr-center" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="tabs-icon mb-40 col-md-10 offset-md-1 text-center">
                            <div class="owl-carousel owl-theme">
                                @foreach ($categories as $key => $item)
                                    <div id="{{ $item->slug }}" class="{{ $key == 0 ? 'item' : 'active item' }}">
                                        <span class="icon flaticon-022-tray"></span>
                                        <h6>{{ $item->name }}</h6>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="menus-content col-md-12">
                            @foreach ($categories as $item)
                                <div id="{{ $item->slug }}-content" class="cont active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            @foreach ($item->products as $product)
                                                <div class="menu-info">
                                                    <h5>{{ $product->name }} <span
                                                            class="price">{{ $product->price }}</span></h5>
                                                    <p>
                                                        {{ $product->description }}
                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery -->
    <section class="section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="section-subtitle">Galeri Kami</span>
                    <h2 class="section-title">BIF <span>Gallery</span></h2>
                </div>
            </div>
            <div class="row winta-photos" id="winta-section-photos">
                @foreach ($galleries as $item)
                    <div class="col-md-4 gallery-item">
                        <a href="{{ asset('public/' . $item->image) }}" title="{{ $item->name }}" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img">
                                    <img src="{{ asset('public/' . $item->image) }}" class="img-fluid mx-auto d-block"
                                        alt="work-img" />
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Team -->
    <!-- Testimonials -->
    {{-- <section class="testimonials section-padding bg-img bg-fixed pos-re" data-overlay-dark="6"
        data-background="img/gallery/4.jpg">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <div class="owl-carousel owl-theme text-center">
                        <div class="item">
                            <div class="client-area">
                                <h6>Jonathan Lee</h6>
                                <span>California, USA</span>
                            </div>
                            <p>
                                The name Winta, in principle, quite fully describes the
                                restaurant's concept: red meat and red wine - what else is
                                needed for a steakhouse!
                            </p>
                        </div>
                        <div class="item">
                            <div class="client-area">
                                <h6>Emma White</h6>
                                <span>Madrid, Spain</span>
                            </div>
                            <p>
                                The name Winta, in principle, quite fully describes the
                                restaurant's concept: red meat and red wine - what else is
                                needed for a steakhouse!
                            </p>
                        </div>
                        <div class="item">
                            <div class="client-area">
                                <h6>Drana Moss</h6>
                                <span>Roma, Italy</span>
                            </div>
                            <p>
                                The name Winta, in principle, quite fully describes the
                                restaurant's concept: red meat and red wine - what else is
                                needed for a steakhouse!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- News -->
    <section class="newshome section-padding" data-scroll-index="5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <span class="section-subtitle">Berita Terbaru</span>
                    <h2 class="section-title">Berita dan Blog <span>Kami</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($articles as $item)
                            <div class="col-md-4">
                                <div class="item animate-box" data-animate-effect="fadeInUp">
                                    <div class="post-img">
                                        <div class="img">
                                            <img src="{{ asset('public/' . $item->image) }}" alt="img" />
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <h6><a href="#">{{ $item->title }}</a></h6>
                                        <p>
                                            {{ $item->description }}
                                        </p>
                                        <a href="{{ route('detail') }}" class="more">Lanjut Membaca <i
                                                class="ti-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="main-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 mb-30">
                    <div class="item abot">
                        <div class="logo mb-20">
                            <h2>
                                <a href="index.html">Berkah Istiqomah</a><span> Farm</span>
                            </h2>
                        </div>
                        <p>
                            {{ $about->sort_description }}
                        </p>
                        <div class="social-icon">
                            <a href="index.html"><i class="ti-facebook"></i></a>
                            <a href="index.html"><i class="ti-twitter"></i></a>
                            <a href="index.html"><i class="ti-instagram"></i></a>
                            <a href="index.html"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 offset-md-1 mb-30">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Phone & Email</h6>
                        </div>
                        <p>{{ $about->phone }}</p>
                        <p>{{ $about->email }}</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3 offset-md-1 mb-30">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Our Address</h6>
                        </div>
                        <p>
                            {{ $about->address }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="text-left">
                            <p>© 2022, {{ $about->title }}. All right reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="right"><a href="#">Terms & Conditions</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('js/pace.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/scrollIt.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/YouTubePopUp.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
