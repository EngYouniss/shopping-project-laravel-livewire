<div>
    <!-- Hero Section -->
    <section class="hero-section bg-primary bg-gradient py-5 mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                    <h1 class="display-5 fw-bold text-white mb-3">Discover Amazing Products</h1>
                    <p class="lead text-white-50 mb-4">Find the best deals on our premium collection</p>
                </div>
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Search products..."
                            aria-label="Search" wire:model.live="searchProduct">
                        <button class="btn btn-light btn-lg" type="button">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-5">
        <!-- Category Tabs -->
       @php
    $icons = [
        'electronics' => 'fa-laptop',
        'clothing' => 'fa-tshirt',
        'games' => 'fa-gamepad',
        'food' => 'fa-utensils',
        'furniture' => 'fa-couch',
    ];
@endphp

<ul class="nav nav-pills nav-fill flex-wrap mb-3" id="categoryTabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button wire:click="selectCategory(null)"
                class="nav-link rounded-pill {{ is_null($selectedCategory) ? 'active' : '' }}"
                type="button">
            <i class="fas fa-th-large me-1"></i> All Products
        </button>
    </li>

    @foreach ($categories as $category)
        @php
            $key = strtolower($category->name);  // خليه lowercase
            $iconClass = $icons[$key] ?? 'fa-tag'; // نبحث بالمفتاح الموحد
        @endphp
        <li class="nav-item" role="presentation">
            <button wire:click="selectCategory({{ $category->id }})"
                    class="nav-link rounded-pill {{ $selectedCategory == $category->id ? 'active' : '' }}"
                    type="button">
                <i class="fas {{ $iconClass }} me-1"></i> {{ \Illuminate\Support\Str::title($category->name) }}
            </button>
        </li>
    @endforeach
</ul>

        <!-- Additional Filters -->
        <div class="bg-white p-3 border rounded mb-4">
            <div class="row align-items-center gy-2">
                <div class="col-md-4 d-flex align-items-center">
                    <span class="me-2 text-muted">Price:</span>
                    <input type="number" class="form-control form-control-sm me-2" placeholder="Min" style="width: 80px">
                    <span class="me-2">-</span>
                    <input type="number" class="form-control form-control-sm" placeholder="Max" style="width: 80px">
                </div>
                <div class="col-md-4">
                    {{-- <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inStock">
                        <label class="form-check-label" for="inStock">In Stock Only</label>
                    </div> --}}
                </div>
                <div class="col-md-4 text-md-end">
                    <div class="d-inline-block me-2">
                        <span class="me-2 text-muted">Sort:</span>
                        <select class="form-select form-select-sm d-inline-block" style="width: auto" wire:model.live="sortBy">
                            <option value="best-selling">Best Selling</option>
                            <option value="top-rated">Top Rated</option>
                            <option value="asc">Price: Low to High</option>
                            <option value="desc">Price: High to Low</option>
                            <option value="default">Newest</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Content -->
        <div>
            @if ($products->count() > 0)
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm product-card">
                            <span class="badge bg-danger position-absolute m-2">Sale 15%</span>
                            <div class="product-img-container">
                                <img src="{{ $product->image }}" class="card-img-top" alt="Product">
                            </div>
                            <div class="card-body pt-0">
                                <h5 class="card-title mb-1">{{ $product->name }}</h5>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <small class="text-muted">(24)</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="mb-3">
                                        <span class="text-danger fw-bold">YER{{ $product->price }}</span>
                                        <small class="text-muted text-decoration-line-through ms-1">YER{{ $product->price }}</small>
                                    </div>
                                </div>
                                <a wire:click="addToCart({{ $product->id }})" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-shopping-cart me-1"></i> Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-box-open fa-3x text-muted mb-3"></i>
                    <h4>No products available</h4>
                    <p class="text-muted">Check back later for new arrivals</p>
                </div>
            @endif
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3">
            {{ $products->links() }}
        </div>
    </div>
</div>
