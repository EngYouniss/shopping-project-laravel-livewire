<div>
    <section class="category-showcase py-5 bg-light">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header text-center mb-5">
                <span class="text-uppercase text-primary fw-bold small d-block mb-2">Shop by Category</span>
                <h2 class="display-5 fw-bold mb-3">Browse Our Categories</h2>
                <div class="divider mx-auto bg-primary" style="width: 80px; height: 3px;"></div>
            </div>

            <!-- Categories Grid -->
            <div class="row g-4">
                <!-- Electronics -->
                @foreach ($categories as $category)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="category-card card border-0 h-100 overflow-hidden shadow-sm">
                            <div class="category-img-container position-relative" style="height: 200px;">
                                <img src="{{ $category->image }}" class="img-fluid w-100 h-100 object-fit-cover"
                                    alt="Electronics">
                                <div
                                    class="category-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                                    <h3 class="text-white mb-2">{{ $category->name }}</h3>
                                    <span
                                        class="badge bg-white text-dark rounded-pill px-3">{{ count($category->products) }}
                                        Products</span>
                                </div>
                            </div>
                            <a href="{{ route('client.products') }}" class="stretched-link"></a>

                        </div>
                    </div>
                @endforeach


                {{-- <!-- Clothing -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="category-card card border-0 h-100 overflow-hidden shadow-sm">
                        <div class="category-img-container position-relative" style="height: 200px;">
                            <img src="{{ asset('client/images/shop/shop24.jpg') }}"
                                class="img-fluid w-100 h-100 object-fit-cover" alt="Clothing">
                            <div
                                class="category-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                                <h3 class="text-white mb-2">Clothing</h3>
                                <span class="badge bg-white text-dark rounded-pill px-3">89 Products</span>
                            </div>
                        </div>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <!-- Furniture -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="category-card card border-0 h-100 overflow-hidden shadow-sm">
                        <div class="category-img-container position-relative" style="height: 200px;">
                            <img src="{{ asset('client/images/shop/shop12.jpg') }}"
                                class="img-fluid w-100 h-100 object-fit-cover" alt="Furniture">
                            <div
                                class="category-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                                <h3 class="text-white mb-2">Furniture</h3>
                                <span class="badge bg-white text-dark rounded-pill px-3">45 Products</span>
                            </div>
                        </div>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <!-- Home Appliances -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="category-card card border-0 h-100 overflow-hidden shadow-sm">
                        <div class="category-img-container position-relative" style="height: 200px;">
                            <img src="{{ asset('client/images/banner/parallax.jpg') }}"
                                class="img-fluid w-100 h-100 object-fit-cover" alt="Home Appliances">
                            <div
                                class="category-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                                <h3 class="text-white mb-2">Home Appliances</h3>
                                <span class="badge bg-white text-dark rounded-pill px-3">67 Products</span>
                            </div>
                        </div>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div> --}}
            </div>

            <!-- View All Button -->
            <div class="text-center mt-5">
                <a href="{{ route('client.products') }}" class="btn btn-outline-primary btn-lg px-4 rounded-pill">
                    View All Categories <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <style>
        .category-showcase {
            background: linear-gradient(to bottom, #f8f9fa 0%, #e9ecef 100%);
        }

        .category-card {
            transition: all 0.3s ease;
            border-radius: 12px !important;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .category-img-container {
            overflow: hidden;
        }

        .category-img-container img {
            transition: transform 0.5s ease;
        }

        .category-card:hover .category-img-container img {
            transform: scale(1.05);
        }

        .category-overlay {
            background: rgba(0, 0, 0, 0.4);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .category-card:hover .category-overlay {
            opacity: 1;
        }

        .btn-outline-primary {
            border-width: 2px;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: #0d6efd;
            color: white !important;
        }

        @media (max-width: 768px) {
            .category-img-container {
                height: 160px !important;
            }

            .section-header h2 {
                font-size: 2rem;
            }

            .btn-lg {
                padding: 0.5rem 1.5rem;
                font-size: 1rem;
            }
        }
    </style>
</div>
