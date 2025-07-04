<div>
    <section class="new-products py-5">
        <div class="container">
            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2 class="section-title">Latest Products</h2>
                <a href="{{ route('client.products') }}" class="btn btn-outline-primary">View All</a>
            </div>

            <div class="latest-products-slider" wire:ignore>
                @foreach ($latestProducts as $product)
                    <div class="product-slide px-2">
                        <div class="card product-card h-100">
                            <div class="badge bg-success position-absolute" style="top: 10px; left: 10px">New</div>

                            <!-- صورة بارتفاع ثابت -->
                            <div class="product-image">
                                <img src="{{ $product->image }}" class="card-img-top" alt="Product Image">
                            </div>

                            <div class="card-body">
                                <div class="product-category text-muted">
                                    {{ $product->category?->name ?? 'No Category' }}</div>
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <div class="product-rating mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-muted">(8)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">{{ $product->price }} YER</span>
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-footer bg-transparent">
                                <button class="btn btn-primary w-100 add-to-cart"
                                    wire:click="addToCart({{ $product->id }})">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        .latest-products-slider .product-slide {
            padding: 0 8px;
        }

        .product-card {
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            background: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* ارتفاع ثابت للصورة */
        .product-image {
            height: 200px;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
</div>
