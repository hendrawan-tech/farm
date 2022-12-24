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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/styleGallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
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
    
    
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Berkah Istiqomah Farm Galeri</h2>
                <p class="text-center">Koleksi Galeri Kami</p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/desk.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/loft.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/loft.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/desk.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
            </div>
        </div>
    </div>
  

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>
