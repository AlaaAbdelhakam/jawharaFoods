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

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('contactus/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('contactus/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('contactus/css/style.css') }}" rel="stylesheet">
    <style>
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


        .footer .aside-stretch-right {
            background: #333333;
        }

        .footer .aside-stretch-right:after {
            background: #234b91;
        }

        @media (max-width: 767.98px) {
            .footer .aside-stretch-right {
                background: transparent;
            }

            .footer .aside-stretch-right:after {
                background: transparent;
                display: none;
            }
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






        @media screen and (max-width: 1200px) {

            html,
            body {
                /* width: 100% !important;
height: 100% !important; */
                margin: 0px !important;
                padding: 0px !important;
                overflow-x: hidden !important;
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
    <div class="container-fluid px-0" style="background-color: #234b91;">
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
                    <span style="color: #234b91;">+012 345 6789</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0" style="color: #234b91;font-size:43px;">JAWHARA</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('welcome') }}" class="nav-item nav-link"
                    style="color: #234b91;font-size:20px;font-weight:500;">HOME</a>
                <div class="nav-item dropdown">
                    <a href="#" style="color: #234b91;" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown">ABOUT</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="gallery.html" style="color: #234b91;" class="dropdown-item">Our Story</a>
                        <a href="feature.html" style="color: #234b91;" class="dropdown-item">press</a>
                        <a href="team.html" style="color: #234b91;" class="dropdown-item">FAQ</a>
                        <a href="testimonial.html" style="color: #234b91;" class="dropdown-item">Certificates</a>
                        <a href="{{ route('contactus') }}" style="color: #234b91;" class="dropdown-item">Contact
                            Us</a>
                    </div>
                </div>
                {{-- <a href="service.html" class="nav-item nav-link" style="color: #234b91;">Services</a>
                <a href="product.html" class="nav-item nav-link" style="color: #234b91;">Products</a> --}}
                <div class="nav-item dropdown">
                    <a href="#" style="color: #234b91;" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown">PRODUCTS</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="" style="color: #234b91;" class="dropdown-item">Pickled
                            Peppers</a>
                        <a href="" style="color: #234b91;" class="dropdown-item">Pickled
                            Olives</a>
                        <a href="" style="color: #234b91;" class="dropdown-item">Pickled
                            Artichokes</a>
                        <a href="" style="color: #234b91;" class="dropdown-item">Pepper
                            Paste</a>
                        <a href="" style="color: #234b91;" class="dropdown-item">Roasted
                            Peppers</a>
                        <a href="" style="color: #234b91;"
                            class="dropdown-item">Banderillas</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link active" style="color: #234b91;">CONTACT</a>
            </div>
            {{-- <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div> --}}
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl  py-5">
        {{-- <div class="middlecontact"> --}}
            <div style="width: 100%;height:auto;" class="row">
            <div class="text-center mx-auto wow fadeInUp " data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3" style="color: #234b91 !important;">
                    Contact Us</p>
                <h1 class="mb-5 text-center" style="color: #234b91;">If You Have Any Query, Please Contact Us</h1>
            </div>
            </div>
            <div class="row g-5 midllecontent">
                <div style="width: 100%;height:100%; display:flex;justify-content:center;align-items:center;">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4" style="color: #234b91;">Need a functional contact form?</h3>
                    <p class="mb-4" style="color: #234b91;">The contact form is currently inactive. Get a functional
                        and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a
                        little code and you're done. <a href="https://htmlcodex.com/contact-form"
                            style="color: #234b91;font-weight: bolder;">Download Now</a>.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Your Name">
                                    <!-- <label for="name">Your Name</label> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Your Email">
                                    <!-- <label for="email">Your Email</label> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="company"
                                        placeholder="Company Name">
                                    <!-- <label for="subject">Subject</label> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 250px"></textarea>
                                    <!-- <label for="message">Message</label> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit"
                                    style="color: #234b91;">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4" style="color: #234b91;">Contact Details</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-map-marker-alt text-body" style="color: #234b91 !important;"></i>
                        </div>
                        <div class="ms-3">
                            <h6 style="color: #234b91;">Our Office</h6>
                            <span style="color: #234b91;">123 Street, New York, USA</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-phone-alt text-body" style="color: #234b91 !important;"></i>
                        </div>
                        <div class="ms-3">
                            <h6 style="color: #234b91;">Call Us</h6>
                            <span style="color: #234b91;">Office No. : +2012 345 67890</span>
                            <br>
                            <span style="color: #234b91;">Phone No. : +2012 345 67890</span>

                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div
                            class="flex-shrink-0 btn-square bg-secondary rounded-circle text-center d-flex justify-content-center align-items-center">
                            <!-- <i class="fa fa-map-marker-alt text-body" style="color: #234b91 !important;"></i> -->
                            <i class="fab fa-whatsapp text-body"
                                style="color: #234b91 !important;font-size:x-large;text-align: center;"></i>
                        </div>
                        <div class="ms-3">
                            <h6 style="color: #234b91;">WhatsApp No. :</h6>
                            <span style="color: #234b91;">+2012 345 67890</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-envelope text-body" style="color: #234b91 !important;"></i>
                        </div>
                        <div class="ms-3">
                            <h6 style="color: #234b91;">Mail Us</h6>
                            <span style="color: #234b91;">info@example.com</span>
                        </div>
                    </div>

                    <iframe class="w-100 rounded"
                        src="https://maps.google.com/maps?q=Asharqeya&t=&z=10&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
             </div>
            </div>
        {{-- </div> --}}
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: #234b91;color: white;visibility: visible;">
        <div class=" bottomfooter py-5">
            <div class="row lowerfooter g-5">
                <div class="col-lg-1 "></div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fas fa-building me-3"></i>+2012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+2012 345 67890</p>
                    <p class="mb-2"><i class="fab fa-whatsapp me-3" style="font-size:x-large;"></i>+2012 345 67890
                    </p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
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
                {{-- <div class="col-lg-1"></div> --}}

                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="" style="color: white;">About Us</a>
                    <a class="btn btn-link" href="" style="color: white;">Contact Us</a>
                    <a class="btn btn-link" href="" style="color: white;">Our Services</a>
                    <a class="btn btn-link" href="" style="color: white;">Terms & Condition</a>
                    <a class="btn btn-link" href="" style="color: white;">Support</a>
                </div>
                {{-- <div class="col-lg-1"></div> --}}

                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="aside-stretch-right " style="background-color: #234b91;">
                        <h2 class="footer-heading " style="font-family: Libre Baskerville,serif;font-size:1.25rem;font-weight:700;line-height:1.2;">Free consultation</h2>
                        <form action="#" class="form-consultation">
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group mb-2">
                                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="form-control submit px-3">Send A Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                                {{-- <div class="col-lg-1"></div> --}}

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


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
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
