@extends('front.mainpage')
@push('styles')

<style>

    .carousel{
        height: 103vh !important;
    }
@media (max-width: 767.98px) {
    .carousel{
        height: 30% !important;
    }
}

</style>


@endpush
@section('content')

@include('sweetalert::alert')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ Storage::url($mainpage->first()->img_first) }}" class="d-block w-100" style="max-height:103vh;min-height:100vh;background-size:cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ Storage::url($mainpage->first()->img_second) }}" class="d-block w-100" style="max-height:103vh;min-height:100vh;background-size:cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ Storage::url($mainpage->first()->img_third) }}" class="d-block w-100" style="max-height:103vh;min-height:100vh;background-size:cover;" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- Contact Start -->
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio"
    style="width:100%;height:100%;justify-content:center;align-items:center;">
    <div class="container" data-aos="fade-up"
        style="width:100%;height:100%;justify-content:center;align-items:center;">

        <div class="section-title" style="width:100%;height:100%;justify-content:center;align-items:center;">
            <h2 style="color: #234b91;">Portfolio</h2>
            <h3>Check our <span style="color: #234b91;">Portfolio</span></h3>
            <p style="color: #234b91;">Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci
                expedita at voluptas atque
                vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active" style="color: #234b91;">All</li>
                    @foreach ($categories as $post)
                        <li data-filter=".{{ $post->id }}" style="color: #234b91;">{{ $post->title }}</li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($categories as $post)
                <a href="{{ route('categoryproducts', $post->id) }}">
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $post->id }}">
                        <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 style="color: #234b91;">{{ $post->title }}</h4>
                            <p>{{ $post->description }}</p>
                            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </a>
            @endforeach


        </div>

    </div>
</section>

<!-- Contact End -->
<br>
<br>
<br>

<div style="width: 100%;display:flex;justify-content:center;">
    @if(isset($pdfPath))
    <a href="{{ route('pdf.download') }}" class="btn-base btn-primary shadow-0 p-3 text-center" target="_blank">DOWNLOAD OUR CATALOG </a>

@endif

</div>
@endsection

