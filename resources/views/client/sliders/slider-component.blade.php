<div>
  <div class="hero-section mb-5">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000" data-bs-pause="hover">
      <!-- Indicators -->
      <div class="carousel-indicators">
        @foreach ($sliders as $index => $slider)
          <button type="button"
                  data-bs-target="#heroCarousel"
                  data-bs-slide-to="{{ $index }}"
                  @class(['active' => $index === 0])
                  aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                  aria-label="Slide {{ $index + 1 }}">
          </button>
        @endforeach
      </div>

      <!-- Slides -->
      <div class="carousel-inner rounded-4 overflow-hidden shadow-lg">
        @foreach ($sliders as $index => $slider)
          <div class="carousel-item @if($index === 0) active @endif">
            <div class="position-relative">
              <img src="{{ asset($slider->image) }}" class="d-block w-100" alt="{{ $slider->title }}"
                   style="height: 500px; object-fit: cover; object-position: center;">
              <div class="carousel-overlay"></div>
            </div>
            <div class="carousel-caption d-flex flex-column justify-content-center h-100 text-start">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <h1 class="display-5 fw-bold text-white mb-3 animate__animated animate__fadeInDown">{{ $slider->title }}</h1>
                    <p class="lead text-white mb-4 animate__animated animate__fadeInUp">{{ $slider->description }}</p>
                    <div class="animate__animated animate__fadeInUp">
                      <a href="#" class="btn btn-primary btn-lg px-4 me-2 rounded-pill">
                        {{ $slider->button_text }}
                      </a>
                      <a href="#" class="btn btn-outline-light btn-lg px-4 rounded-pill">
                        Learn More
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <style>
    .hero-section {
      margin-top: 1rem;
    }

    .carousel {
      border-radius: 1rem;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .carousel-indicators button {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      border: 2px solid transparent;
      background-color: rgba(255, 255, 255, 0.5);
      transition: all 0.3s ease;
    }

    .carousel-indicators button.active {
      background-color: #fff;
      width: 30px;
      border-radius: 10px;
    }

    .carousel-item {
      transition: transform 1s ease, opacity .5s ease;
    }

    .carousel-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 100%);
    }

    .carousel-caption {
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      padding: 0;
    }

    .carousel-control-prev,
    .carousel-control-next {
      width: 5%;
      opacity: 1;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      width: 2.5rem;
      height: 2.5rem;
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      background-size: 60%;
      transition: all 0.3s ease;
    }

    .carousel-control-prev:hover .carousel-control-prev-icon,
    .carousel-control-next:hover .carousel-control-next-icon {
      background-color: rgba(255, 255, 255, 0.4);
    }

    .btn-outline-light:hover {
      color: #000 !important;
    }

    @media (max-width: 768px) {
      .carousel-caption {
        padding: 1rem;
      }

      .carousel-caption h1 {
        font-size: 2rem !important;
      }

      .carousel-caption p {
        font-size: 1rem !important;
      }

      .carousel-caption .btn {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
      }
    }
  </style>

  <!-- Add Animate.css for animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</div>
