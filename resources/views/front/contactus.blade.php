@extends('front.mainpage')

{{-- <!DOCTYPE html>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> --}}
    @push('styles')

    <link href="{{ asset('contactus/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('contactus/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('contactus/css/style.css') }}" rel="stylesheet">

    <style>
         @media (max-width: 767.98px) {
            .footer .aside-stretch-right {
                background: transparent;
            }

            .footer .aside-stretch-right:after {
                background: transparent;
                display: none;
            }
            #left{
                display: block !important;
            }
            #right{
                display: BLOCK !important;
                margin-top: 50px !important;
            }
            .midllecontent{
                display: block !important;
            }
        }




        @media screen and (max-width: 1200px) {
            /* #left{
                display: block !important;
            }
            #right{
                display: BLOCK !important;
            }
            .midllecontent{
                display: block !important;
            } */
            html,
            body {
                /* width: 100% !important;
height: 100% !important; */
                margin: 0px !important;
                padding: 0px !important;
                overflow-x: hidden !important;
            }

        }

    </style>


    @endpush
    <!-- Libraries Stylesheet -->
    {{-- <style>
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
            #left{
                display: block !important;
            }
            #right{
                display: BLOCK !important;
                margin-top: 50px !important;
            }
            .midllecontent{
                display: block !important;
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
</head> --}}

@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Contact Us</h1>
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav> --}}
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
                <div id="left" style="width: 100%;height:100%; display:flex;justify-content:center;align-items:center;">
                <div class="col-lg-6 col-md-5 wow fadeInUp" data-wow-delay="0.1s" >
                    <h3 class="mb-4" style="color: #234b91;">Need a functional contact form?</h3>
                    <p class="mb-4" style="color: #234b91;">The contact form is currently inactive. Get a functional
                        and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a
                        little code and you're done. <a href="https://htmlcodex.com/contact-form"
                            style="color: #234b91;font-weight: bolder;">Download Now</a>.</p>
                            <form class="form"
                            action="{{route('emails')}}"
                            method="POST"
                            enctype="multipart/form-data">
                          @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Your Name" name="name">
                                    <!-- <label for="name">Your Name</label> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Your Email" name="email">
                                    <!-- <label for="email">Your Email</label> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="company"
                                        placeholder="Company Name" name="company_name">
                                    <!-- <label for="subject">Subject</label> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 250px"></textarea>
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
                <div class="col-lg-3 col-md-1"></div>
                <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay="0.5s" id="right">
                    <h3 class="mb-4" style="color: #234b91;">Contact Details</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-map-marker-alt text-body" style="color: #234b91 !important;"></i>
                        </div>
                        <div class="ms-3">
                            <h6 style="color: #234b91;">Our Office</h6>
                            <span style="color: #234b91;">5th settelment, Cairo, Egypt</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-phone-alt text-body" style="color: #234b91 !important;"></i>
                        </div>
                        <div class="ms-3">
                            <h6 style="color: #234b91;">Call Us</h6>
                            <span style="color: #234b91;">Office No. : +2010 906 85674</span>
                            <br>
                            <span style="color: #234b91;">Phone No. : +2010 906 85674</span>

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
                            <span style="color: #234b91;">+2010 906 85674</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-envelope text-body" style="color: #234b91 !important;"></i>
                        </div>
                        <div class="ms-3">
                            <h6 style="color: #234b91;">Mail Us</h6>
                            <span style="color: #234b91;">info@jawharafoods.com</span>
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
    @endsection

    @push('scripts')


    <script src="{{ asset('contactus/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('contactus/js/main.js') }}"></script>


    @endpush
