<div>
   <section class="featured-products py-5 bg-light">
    <div class="container">
        <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <div>
                <span class="text-uppercase text-primary fw-bold small">اكتشف منتجاتنا</span>
                <h2 class="section-title fw-bold mb-1">المنتجات المميزة</h2>
                <div class="divider bg-primary" style="width: 80px; height: 3px;"></div>
            </div>
            <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2">
                عرض الكل <i class="fas fa-arrow-left ms-2"></i>
            </a>
        </div>

        <div class="row g-4">
            @foreach ($featuredProducts as $product)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card product-card h-100 border-0 shadow-hover">
                        <div class="position-relative overflow-hidden">
                            <!-- Product Image -->
                            <div class="product-image" style="height: 240px;">
                                <img src="{{ $product->image }}" class="img-fluid w-100 h-100 object-fit-cover"
                                    alt="{{ $product->name }}">
                                <div class="image-overlay"></div>
                            </div>

                            <!-- Badges -->
                            <div class="product-badges">
                                <span class="badge bg-danger rounded-pill">خصم 20%</span>
                                @if ($product->is_new)
                                    <span class="badge bg-success rounded-pill">جديد</span>
                                @endif
                            </div>

                            <!-- Quick Actions -->
                            <div class="quick-actions">
                                <button class="btn btn-sm btn-light rounded-circle action-btn wishlist-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="btn btn-sm btn-light rounded-circle action-btn view-btn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Product Body -->
                        <div class="card-body p-3">
                            <!-- Category -->
                            <a href="#" class="text-muted small text-decoration-none d-block mb-1">
                                {{ $product->category->name }}
                            </a>

                            <!-- Title & Rating -->
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="product-title mb-1" style="flex: 1;">
                                    <a href="#" class="text-dark text-decoration-none">{{ $product->name }}</a>
                                </h5>
                                <div class="product-rating ms-2 mb-3 text-nowrap">
                                    <div class="stars text-warning" style="font-size: 0.8rem;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <small class="text-muted d-block text-center">(24)</small>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    @if ($product->price)
                                        <span class="text-muted text-decoration-line-through d-block small">YER {{ $product->price }}</span>
                                        <span class="fw-bold text-primary">YER {{ $product->price }}</span>
                                    @else
                                        <span class="fw-bold text-primary">YER {{ $product->price }}</span>
                                    @endif
                                </div>
                                <button class="btn btn-sm btn-outline-primary rounded-pill px-3 w-50">
                                    <i class="fas fa-shopping-cart">Add </i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
.product-card {
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    background: white;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
}

.product-image {
    position: relative;
    transition: all 0.5s ease;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%);
}

.product-card:hover .product-image {
    transform: scale(1.03);
}

.product-badges {
    position: absolute;
    top: 15px;
    left: 15px;
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.quick-actions {
    position: absolute;
    top: 15px;
    right: 15px;
    display: flex;
    flex-direction: column;
    gap: 5px;
    opacity: 0;
    transform: translateY(10px);
    transition: all 0.3s ease;
}

.product-card:hover .quick-actions {
    opacity: 1;
    transform: translateY(0);
}

.action-btn {
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
}

.action-btn:hover {
    background: var(--bs-primary) !important;
    color: white !important;
}

.product-title {
    font-size: 1rem;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    min-height: 2.8rem;
}

.shadow-hover {
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
}

.object-fit-cover {
    object-fit: cover;
}

@media (max-width: 768px) {
    .section-title {
        font-size: 1.5rem;
    }

    .product-image {
        height: 180px !important;
    }

    .quick-actions {
        opacity: 1;
        transform: translateY(0);
    }

    .product-title {
        font-size: 0.9rem;
        min-height: 2.4rem;
    }
}
</style>

</div>
