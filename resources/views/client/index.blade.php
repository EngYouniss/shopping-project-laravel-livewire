@extends('client.layouts.master')
@section('content')
    <!-- Top Announcement Bar -->
    <div class="alert alert-warning alert-dismissible fade show mb-0 text-center" role="alert">
        <strong>Special Offers!</strong> Get up to 50% off on a selection of products
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @livewire('client.sliders.slider-component')

    <!-- Featured Products -->
    @livewire('client.products.featured-products-component')

    <!-- Special Offers Section -->
    @livewire('client.offers.offers-component')

    <!-- Latest Products -->
    @livewire('client.products.latest-products-component')

    <!-- Categories Section -->
    {{-- <section class="categories py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">Browse by Category</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#" class="category-card text-decoration-none">
                        <div class="card h-100">
                            <img src="{{ asset('client/images/featured/2.jpg') }}" class="card-img-top"
                                alt="Electronics">
                            <div class="card-body text-center">
                                <h5 class="card-title">Electronics</h5>
                                <p class="text-muted">125 Products</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#" class="category-card text-decoration-none">
                        <div class="card h-100">
                            <img src="{{ asset('client/images/shop/shop24.jpg') }}" class="card-img-top" alt="Clothing">
                            <div class="card-body text-center">
                                <h5 class="card-title">Clothing</h5>
                                <p class="text-muted">89 Products</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#" class="category-card text-decoration-none">
                        <div class="card h-100">
                            <img src="{{ asset('client/images/shop/shop12.jpg') }}" class="card-img-top" alt="Furniture">
                            <div class="card-body text-center">
                                <h5 class="card-title">Furniture</h5>
                                <p class="text-muted">45 Products</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#" class="category-card text-decoration-none">
                        <div class="card h-100">
                            <img src="{{ asset('client/images/banner/parallax.jpg') }}" class="card-img-top"
                                alt="Home Appliances">
                            <div class="card-body text-center">
                                <h5 class="card-title">Home Appliances</h5>
                                <p class="text-muted">67 Products</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
    @livewire('client.categories.categories-component')

    <!-- Customer Testimonials -->
    {{-- <section class="testimonials py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Customer Reviews</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('client/images/profile/user.png') }}" class="rounded-circle mb-3"
                                width="80" alt="Customer">
                            <h5 class="card-title">Ahmed Mohamed</h5>
                            <div class="product-rating mb-3 justify-content-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text">Great experience with the store, high quality products and very fast delivery. I recommend everyone to shop here.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('client/images/profile/user.png') }}" class="rounded-circle mb-3"
                                width="80" alt="Customer">
                            <h5 class="card-title">Sara Abdullah</h5>
                            <div class="product-rating mb-3 justify-content-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                            <p class="card-text">Excellent customer service and helped me choose the right product. Thank you for this great experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('client/images/profile/user.png') }}" class="rounded-circle mb-3"
                                width="80" alt="Customer">
                            <h5 class="card-title">Khaled Ali</h5>
                            <div class="product-rating mb-3 justify-content-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                            <p class="card-text">Competitive prices and authentic products. I received my order ahead of schedule. Thank you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    @livewire('client.reviews.reviews-component')

    <!-- Store Features -->
    <section class="features py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-box p-4">
                        <i class="fas fa-truck fa-3x text-primary mb-3"></i>
                        <h4>Fast Shipping</h4>
                        <p class="text-muted">Delivery within 24-48 hours</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="feature-box p-4">
                        <i class="fas fa-lock fa-3x text-primary mb-3"></i>
                        <h4>Secure Payment</h4>
                        <p class="text-muted">Payment via secure gateways</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-box p-4">
                        <i class="fas fa-headset fa-3x text-primary mb-3"></i>
                        <h4>Technical Support</h4>
                        <p class="text-muted">24/7 Customer Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>Subscribe to Our Newsletter</h3>
                    <p class="mb-0">Get the latest offers and discounts directly to your email</p>
                </div>
                <div class="col-md-6">
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email" required>
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
