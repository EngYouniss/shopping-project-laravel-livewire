<div>
    <section class="testimonials py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Customer Reviews</h2>
            <div class="row">
                @foreach ($reviews as $review)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <img src="{{ asset('client/images/profile/user.png') }}" class="rounded-circle mb-3"
                                    width="80" alt="Customer">
                                <h5 class="card-title">{{ $review->user->name }}</h5>
                                <div class="product-rating mb-3 justify-content-center">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <p class="card-text">
                                    {{ Str::limit($review->comment, 200, '...') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-md-4 mb-4">
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
                </div> --}}
            </div>
        </div>
    </section>
</div>
