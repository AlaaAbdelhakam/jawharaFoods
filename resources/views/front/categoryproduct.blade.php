<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jawhara Website</title>
    <!-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->
    <meta content="" name="keywords">
    <meta content="" name="description">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=-1"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
   
   
   
   
    <link rel="stylesheet" type="text/css" href="{{ asset('singleproduct/lib/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('singleproduct/lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('singleproduct/lib/lightbox/css/lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('singleproduct/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('singleproduct/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('singleproduct/assets/css/slick.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('singleproduct/assets/css/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('singleproduct/assets/css/templatemo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('singleproduct/assets/css/custom.css') }}">

    <style>
        .btn-base {
  margin: 0;
  height: 30px;
  outline: none;
  border-radius: 3px;
  border: 2px solid currentColor;
  font-size: 12px;
  transition: 0.5s;
  padding: 5px 15px;
  font-size: 12px;
  position:relative;
  background:#234b91;
  color:#fff;
  cursor:pointer;
}
.btn-base:hover{color: #fff}
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

        .nav-pills a.active {
            background-color: #234b91 !important;
            color: white !important;
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

        /* html,
        body {
            width: 100% !important;
            height: 100% !important;
            margin: 0px !important;
            padding: 0px !important;
            overflow-x: hidden !important;

        } */

        body {
            zoom: 86% !important;

        }

        .footer {
            visibility: visible !important;

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


        .bottomfooter {
            width: 100% !important;

            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .lowerfooter {
            width: 100% !important;

        }

        .container-fluid {
            width: 100% !important;

        }

        .wow {
            width: 100% !important;

        }

        .footer {
            width: 100% !important;
            margin-left: 0px !important;
            margin-right: 0px !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        a ul,
        li,
        p,
        a,
        label,
        input,
        div {
            font-size: 18px !important;
            font-weight: 500 !important;
            font-family: "Open Sans", sans-serif !important;
            -webkit-text-size-adjust: 100% !important;
        }
        .card{
  margin: 5% 0%;
  transition: transform .5s, box-shadow 1s;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
.card:hover {
  transform: scale(1.02) perspective(0px);
  /* box-shadow: 0 10px 10px rgba(255,0,0,.7); */
}
.card-body{
  margin: 0% 0% 0% 3%;
  padding: 6% 0%;
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
                    <span style="color: white;">Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i style="color: white;"
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i style="color: white;"
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i style="color: white;"
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i style="color: white;"
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
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
            <h1 class="display-3 text-white mb-4 animated slideInDown">Category Products</h1>
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->


    <!-- <section class="py-5">
        <div class="container">
          <div class="row gx-5">

                        <div class="col-lg-5 mt-5 ml-3 mb-5">
                            <div class="card mb-3">
                                <img class="card-img img-fluid" src="./img/first.jpg" alt="Card image cap" id="product-detail">
                            </div>
                            <div class="row">
                                Start Controls-->
    <!-- <div class="col-1 align-self-center">
                                    <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                        <i class="text-dark fas fa-chevron-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </div> -->
    <!--End Controls-->
    <!--Start Carousel Wrapper
                                <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                                    Start Slides
                                    <div class="carousel-inner product-links-wap" role="listbox">

                                        First slide-->
    <!-- <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="./img/first.jpg" alt="Product Image 1">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="./img/second.jpg" alt="Product Image 2">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="./img/third.jpg" alt="Product Image 3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
    <!--/.First slide-->

    <!--Second slide-->
    <!-- <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="assets/img/product_single_04.jpg" alt="Product Image 4">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="assets/img/product_single_05.jpg" alt="Product Image 5">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="assets/img/product_single_06.jpg" alt="Product Image 6">
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
    <!--/.Second slide-->

    <!--Third slide-->
    <!-- <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="assets/img/product_single_07.jpg" alt="Product Image 7">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="assets/img/product_single_08.jpg" alt="Product Image 8">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="assets/img/product_single_09.jpg" alt="Product Image 9">
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
    <!--/.Third slide-->
    <!-- </div> -->
    <!--End Slides-->
    <!-- </div> -->
    <!--End Carousel Wrapper-->
    <!--Start Controls-->
    <!-- <div class="col-1 align-self-center">
                                    <a href="#multi-item-example" role="button" data-bs-slide="next">
                                        <i class="text-dark fas fa-chevron-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div> -->
    <!--End Controls-->
    <!-- </div>
                        </div> -->
    <!-- col end -->
    <!--

        <div class="col-lg-1"></div>

            <main class="col-lg-6">
              <div class="ps-lg-3">
                <h4 class="title text-dark">
                    Mushrooms Marinated with Garlic & Herbs
                </h4>

                <hr />

                <p>
                    Succulent and savory, our Divina mushrooms are grown and harvested in Kennett Square, PA, (the mushroom capital of the world) before being preserved in a bright and vinegary garlic and herb marinade.
                </p>
                <br>
                <h5>PRODUCT DETAILS</h5>

               <hr />
                <div class="row ">
                  <dt class="col-5">ITEM #</dt>
                  <dd class="col-7">55000</dd>
                  <hr />
                  <dt class="col-5">BRAND</dt>
                  <dd class="col-7">Divina</dd>
                  <hr />
                  <dt class="col-5">CASE PACK</dt>
                  <dd class="col-7">2/6.25 lb Pouch</dd>
                  <hr />
                  <dt class="col-5">ORIGIN</dt>
                  <dd class="col-7">USA</dd>
                  <hr />

                  <dt class="col-5">INGREDIENTS</dt>
                  <dd class="col-7">mushrooms, water, soybean oil, red peppers, distilled vinegar, garlic, salt, oregano, marjoram</dd>
                  <hr />

                  <dt class="col-5">SEALED SHELF LIFE</dt>
                  <dd class="col-7">24 months dry</dd>
                  <hr />

                  <dt class="col-5">STORAGE</dt>
                  <dd class="col-7">Dry</dd>
                  <hr />

                  <dt class="col-5">ATTRIBUTES</dt>
                  <dd class="col-7">Dairy Free, Gluten Free, Non-GMO, Vegan, Vegetarian</dd>
                  <hr />

                  <dt class="col-5">DRAINED WEIGHT</dt>
                  <dd class="col-7">8.5 lb</dd>
                  <hr />

                  <dt class="col-5">GROSS CASE WEIGHT</dt>
                  <dd class="col-7">8.5 lb</dd>
                  <hr />

                  <dt class="col-5">CASE DIMENSIONS</dt>
                  <dd class="col-7">14.3" x 8.3" x 5.7" (LxWxH)</dd>
                  <hr />

                  <dt class="col-5">CASE CUBE</dt>
                  <dd class="col-7">0.39</dd>
                  <hr />

                  <dt class="col-5">TI-HI</dt>
                  <dd class="col-7">15x11</dd>
                  <hr />

                  <dt class="col-5">ALLERGENS</dt>
                  <dd class="col-7">None</dd>
                  <hr />
                </div>
       -->
    <!-- <div class="row mb-4"> -->
    <!-- <div class="col-md-4 col-6">
                    <label class="mb-2">Size</label>
                    <select class="form-select border border-secondary" style="height: 35px;">
                      <option>Small</option>
                      <option>Medium</option>
                      <option>Large</option>
                    </select>
                  </div> -->
    <!-- col.// -->
    <!-- <div class="col-md-4 col-6 mb-3">
                    <label class="mb-2 d-block">Quantity</label>
                    <div class="input-group mb-3" style="width: 170px;">
                      <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                        <i class="fas fa-minus"></i>
                      </button>
                      <input type="text" class="form-control text-center border border-secondary" placeholder="14" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                      <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div> -->
    <!-- </div> -->
    <!-- <br>

                <a href="#" class="btn btn-warning shadow-0 p-3"> Buy now </a>
                -->
    <!-- <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a> -->
    <!-- </div>
            </main>
          </div>
        </div>
      </section> -->
    <!-- content -->

    <section  class="portfolio text-center">

    <div class="section-title">
        <h2 style="color: #234b91;" class="m-1">{{ $title }} Category</h2>
        <h3>Check our <span style="color: #234b91;">{{ $title }}</span></h3>
        {{-- <p style="color: #234b91;">Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci
            expedita at voluptas atque
            vitae autem.</p> --}}
    </div>

    {{-- <h4 class="text-center" style="color: #234b91">{{ $title }}</h4> --}}
    <br>
    <br>
    <div class="container">

        <!-- Card deck -->
        <div class="card-deck row">
            @foreach($category->Jawharacproduct->chunk(4) as $chunk)
    {{-- <div class="card-group" > --}}
        @foreach($chunk as $post)
        <div class="col-xs-12 col-sm-6 col-md-4">
              <a href="">
          <!-- Card -->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="{{ asset($post->image) }}" style="max-height: 280px;min-height:280px;" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title" style="color: #234b91">{{ $post->title }}</h4>
              <!--Text-->
              <p class="card-text" style="color: #234b91">{{ $post->description }}</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <a href="{{ route('singleproduct', $post->id) }}" class="btn-base btn-light-blue btn-md">Read more</a>

            </div>

          </div>
          <!-- Card -->
        </a>
          </div>
          @endforeach
          {{-- </div> --}}
          @endforeach
        </div>
    </div>
</section>
{{--
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($category->Jawharacproduct->chunk(4) as $chunk)
        @foreach($chunk as $post)
        <a href="">


            <div class="col">
              <div class="card h-100">
                <img src="{{ asset($post->image) }}" class="card-img-top" style="max-height: 280px;min-height:280px;" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center" style="color: #234b91">{{ $post->title }}</h5>
                  <p class="card-text text-center" style="color: #234b91">{{ $post->description }}</p>
                </div>
              </div>
            </div>




        </a>
        @endforeach
    @endforeach
</div>
</div> --}}


































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
                    <p class="mb-2"><i class="fab fa-whatsapp me-3" style="font-size:x-large;"></i>+2012 345
                        67890
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
                    <h6 class="text-white">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-white">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-white">Closed</h6>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="aside-stretch-right " style="background-color: #234b91;">
                        <h2 class="footer-heading "
                            style="font-family: Libre Baskerville,serif;font-size:1.25rem;font-weight:700;line-height:1.2;">
                            Free consultation</h2>
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
                                <textarea name="" id="" cols="30" rows="3" class="form-control"
                                    placeholder="Message"></textarea>
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

    <!-- Start Script -->
    <script src="{{ asset('singleproduct/assets/js/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/assets/js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/assets/js/templatemo.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/assets/js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/assets/js/slick.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/js/mdb.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/lib/wow/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/lib/easing/easing.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/lib/waypoints/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/lib/owlcarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/lib/counterup/counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/lib/parallax/parallax.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/lib/lightbox/js/lightbox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('singleproduct/js/main.js') }}" type="text/javascript"></script>


    <!-- End Script -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
</body>

</html>