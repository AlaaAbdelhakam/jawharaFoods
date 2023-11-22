<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jawhara Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assetsGallery/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsGallery/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsGallery/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsGallery/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsGallery/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsGallery/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assetsGallery/css/style.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('contactus/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('contactus/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="{{ asset('contactus/css/style.css') }}" rel="stylesheet">
    @stack('styles')

    <style>
        .dropdown-item:active {
    background-color:#234b91 ; /* Change to your preferred color */
}
        .mybtn:hover {
    background-color:#234b91 ; /* Change to your preferred color */
}
        .bg-white{
            background-color: white !important;
        }
         .btn-primary {
            /* Your styles for the .btn.btn-warning combination here */
            color: #212529 !important;
            /* Adjust text color as needed */
            background-color: #EDDD5E !important;
            /* Adjust background color for the warning style */
            border-color: #EDDD5E !important;
            /* Adjust border color for the warning style */
        }
          .mybtn-link::before {
    /* Your styles for the ::before pseudo-element here */
    content: "\f105"; /* This is required for the pseudo-element */
    position: relative;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px; /* This creates a circular shape, adjust as needed */
}
        /* Basic styles for btn class */
.mybtn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

/* Styles for btn-link class */
.mybtn-link {
    font-weight: 400;
    color: #007bff;
    background-color: transparent;
    border: none;
}

.mybtn-link:hover {
    color: #0056b3;
    text-decoration: underline;
    background-color: transparent;
    border-color: transparent;
}

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #234b91 !important;
            /* opacity: 1; Firefox */
        }

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #234b91 !important;
            /* opacity: 1; Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #234b91 !important;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #234b91 !important;
        }

        .form-control {
            color: #234b91 !important;

        }

        .form-floating {
            color: #234b91 !important;

        }

        .form-floating>.form-control,
        .form-floating>.form-select {
            color: #234b91 !important;

        }

        .last-input {
            color: white !important;

        }

        .last-input::placeholder {
            color: white !important;
        }

        .last-input:-ms-input-placeholder {
            /* WebKit, Blink, Edge */
            color: white !important;
        }

        .last-input::-ms-input-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color: white !important;

        }
        .terms{
            display: none;
        }

        .footer .aside-stretch-right {
            background: #333333;
        }

        .footer .aside-stretch-right:after {
            background: #234b91;
        }
        @media (min-width:600px) and (max-width:1024px) {

            .terms{
            display: block;
        }



        }

        @media (max-width: 767.98px) {
            .footer .aside-stretch-right {
                background: transparent;
            }

            .footer .aside-stretch-right:after {
                background: transparent;
                display: none;
            }
            .carousel-item img{
                max-height: 300px !important;
                min-height: 300px !important;
                /* background-size: cover !important; */
            }
            .footer{
                    width: 100% !important;
                    display: flex !important;
                    justify-content: center !important;
                }


        }
        .navbar{
            height: 10vh !important;
        }
        .uppernav{
            height:4.5vh !important;
        }

        .aside-stretch-right {
            background: #EDDD5E;
        }

        .aside-stretch-right:after {
            display: flex !important;
            align-items: flex-start !important;

            content: '';
            width: 360%;
            background: #EDDD5E;
        }

        @media (max-width: 767.98px) {
            .aside-stretch-right {
                background: transparent;
            }

            .aside-stretch-right:after {
                background: transparent;
                display: none;
            }
        }



        .footer-heading {
            font-size: 18px;
            margin-bottom: 30px;
            font-weight: 600;
            color: white;
        }

        .form-consultation {
            width: 100%;
        }


        .form-consultation .form-control {
            height: 44px !important;
            background: rgba(255, 255, 255, 0.1) !important;
            color: #EDDD5E !important;
            font-size: 14px;
            border-radius: 5px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: none;
        }




        .form-consultation .form-control::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: rgba(255, 255, 255, 0.3) !important;
        }


        .form-consultation .form-control::-moz-placeholder {
            /* Firefox 19+ */
            color: rgba(255, 255, 255, 0.3) !important;
        }




        .form-consultation .form-control:-ms-input-placeholder {
            /* IE 1255+ */
            color: rgba(255, 255, 255, 0.3) !important;
        }



        .form-consultation .form-control:focus {
            outline: none !important;
            -webkit-box-shadow: none;
            box-shadow: none;
        }



        .form-consultation .form-control:focus,
        .footer .form-consultation .form-control:active {
            outline: none !important;
            -webkit-box-shadow: none;
            box-shadow: none;
        }


        .form-consultation .submit {
            background: #EDDD5E !important;
            color: #234b91 !important;
            font-weight: bold
        }



        .form-consultation textarea.form-control {
            height: inherit !important;
        }




        .form-group {
            margin-bottom: 1rem;
        }


        .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0;
        }


        .form-group input {
            padding-right: 50px;
            font-size: 14px;
        }


        .quick a{
                    display: block !important;
                    text-align: left !important;

                }



        @media screen and (max-width: 1200px) {

            html,
            body {
                /* width: 100% !important;
height: 100% !important; */
                margin: 0px !important;
                padding: 0px !important;
                overflow-x: hidden !important;
            }

            .carousel-item img{
                    max-height: 500px !important;
                    min-height: 500px !important;
                    /* background-size: cover !important; */

                }
                .quick a{
                    display: block;
                    text-align: left;

                }

                .footer{
                    width: 100% !important;
                    display: flex !important;
                    justify-content: center !important;
                }
        }
        body {
            zoom: 86% !important;

        }
        .middlecontact{
            visibility: visible !important;

            width: 85% !important;
            height: 100% !important;
            display: flex !important;
    justify-content: center !important;
    align-items: center !important;
        }
        .midllecontent{
            width: 85% !important;
            height: 100% !important;
            margin: auto !important;
        }
        html,
        body {
            /* width: 100% !important;
            height: 100% !important; */
            margin: 0px !important;
            padding: 0px !important;
            overflow-x: hidden !important;

        }
        .footer {
            visibility: visible !important;

        }
        .topphone{
            font-size: 18px !important;
    font-weight: 500 !important;
    font-family: "Open Sans",sans-serif !important;
    -webkit-text-size-adjust: 100% !important;
        }
        .lowerfooter a ul, li, p, a, label, input, div {
            font-size: 18px !important;
    font-weight: 500 !important;
    font-family: "Open Sans",sans-serif !important;
    -webkit-text-size-adjust: 100% !important;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"
            style="width: 3rem; height: 3rem;color: #234b91 !important;"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid px-0 uppernav" style="background-color: #234b91;">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary topphone d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold" style="color: #234b91;"><i class="fa fa-phone-alt me-2"></i>Call
                        Us:</span>
                    <span style="color: #234b91;">+2010 906 85674</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->




    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5" >
        <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0" style="color: #234b91;font-size:43px;">JAWHARA</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" id="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0 bg-white">
                <a href="{{ route('welcome') }}" class="nav-item nav-link"
                    style="color: #234b91;font-size:20px;font-weight:500;">HOME</a>
                <div class="nav-item dropdown">
                    <a href="#" style="color: #234b91;" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown" id="dropdown-menu-link" >ABOUT</a>
                    <div class="dropdown-menu bg-light m-0" style="border: 3px solid #234b91;">
                        <a href="gallery.html" style="color: #234b91;" class="dropdown-item px-4 py-2">Our Story</a>
                        <a href="feature.html" style="color: #234b91;" class="dropdown-item px-4 py-2">press</a>
                        <a href="team.html" style="color: #234b91;" class="dropdown-item px-4 py-2">FAQ</a>
                        <a href="testimonial.html" style="color: #234b91;" class="dropdown-item px-4 py-2">Certificates</a>
                        <a href="{{ route('contactus') }}" style="color: #234b91;" class="dropdown-item px-4 py-2">Contact
                            Us</a>
                    </div>
                </div>
                {{-- <a href="service.html" class="nav-item nav-link" style="color: #234b91;">Services</a>
                <a href="product.html" class="nav-item nav-link" style="color: #234b91;">Products</a> --}}
                <div class="nav-item dropdown">
                    <a href="#" style="color: #234b91;" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown" id="products-dropdown">PRODUCTS CATEGORIES</a>
                    <div class="dropdown-menu bg-light m-0" id="products-dropdown-menu" style="border: 3px solid #234b91;">
                        @foreach ($categories as $post)

                        <a href="{{ route('categoryproducts', $post->id) }}" style="color: #234b91;" class="dropdown-item px-4 py-2">{{ $post->title }}</a>

                        @endforeach
                    </div>
                </div>
                <a href="{{ route('index') }}" class="nav-item nav-link active" style="color: #234b91;">OUR BLOG</a>
                <a href="{{ route('contactus') }}" class="nav-item nav-link active" style="color: #234b91;">CONTACT</a>
                <a href="https://online.fliphtml5.com/rdjom/affi/?1699867226778#p=1" class="nav-item nav-link active" style="color: #234b91;">OUR CATALOG</a>
            </div>
            {{-- <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div> --}}
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')


    <!-- Footer Start -->
       <div class="container-fluid footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: #234b91;color: white;visibility: visible;">
        <div class=" bottomfooter py-5">
            <div class="row lowerfooter g-5">
                <div class="col-lg-1 "></div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>5th settelment, Cairo, Egypt</p>
                    <p class="mb-2"><i class="fas fa-building me-3"></i>+2010 906 85674</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+2010 906 85674</p>
                    <p class="mb-2"><i class="fab fa-whatsapp me-3" style="font-size:x-large;"></i>+2010 906
                        85674
                    </p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@jawharafoods.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i
                                style="color: #234b91;" class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i
                                style="color: #234b91;" class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i
                                style="color: #234b91;" class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i
                                style="color: #234b91;" class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 quick">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="mybtn mybtn-link" href="" style="color: white;">About Us</a>
                    <a class="mybtn mybtn-link" href="{{ route('contactus') }}" style="color: white;">Contact
                        Us</a>
                    <a class="mybtn mybtn-link" href="" style="color: white;">Our Services</a>
                    <a class="mybtn mybtn-link" href="" style="color: white;">Terms & <br class="terms"> Condition</a>
                    <a class="mybtn mybtn-link" href="" style="color: white;">Support</a>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-white" style="color: white;">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-white" style="color: white;">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-white" style="color: white;">Closed</h6>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="aside-stretch-right " style="background-color: #234b91;">
                        <h2 class="footer-heading "
                            style="font-family: Libre Baskerville,serif;font-size:1.25rem;font-weight:700;line-height:1.2;">
                            Free consultation</h2>
                        <form class="form-consultation" action="{{ route('emails') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" placeholder="Your Name"
                                    name="name">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" placeholder="Your Email"
                                    name="email">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" placeholder="Company Name"
                                    name="company_name">
                            </div>
                            <div class="form-group mb-2">
                                <textarea name="message" id="" cols="30" rows="3" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="form-control submit px-3">Send A Message</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0" style="color: #234b91;">
                    &copy; <a class="fw-semi-bold" href="#" style="color: #234b91;">Your Site Name</a>, All
                    Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end" style="color: #234b91;">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-semi-bold" href="https://htmlcodex.com" style="color: #234b91;">HTML
                        Codex</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 2000,
      wrap: false
    })
    </script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbarToggler = document.getElementById("navbar-toggler");
        const navbarCollapse = document.getElementById("navbarCollapse");
        const dropdownLinks = document.querySelectorAll(".nav-link.dropdown-toggle");
        const productsDropdown = document.getElementById("products-dropdown");
        const productsDropdownMenu = document.getElementById("products-dropdown-menu");

        navbarToggler.addEventListener("click", function () {
            navbarCollapse.classList.toggle("show");
        });

        dropdownLinks.forEach(function (link) {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                const dropdownMenu = link.nextElementSibling;
                dropdownMenu.classList.toggle("show");
            });
        });


    });
</script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assetsGallery/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/aos/aos.js') }}"></script>
    {{-- <script src="{{ asset('assetsGallery/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('assetsGallery/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('assetsGallery/js/main.js') }}"></script>

    @stack('scripts')


    <script src="{{ asset('contactus/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/lightbox/js/lightbox.min.js') }}"></script>
    <!-- Template Javascript -->


    <script src="{{ asset('contactus/js/main.js') }}"></script>

</body>

</html>
