<div>
    <!-- الإحصائيات الرئيسية -->
    <div class="row">
        <!-- Main Statistics -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <span class="avatar-initial rounded bg-label-info">
                                <i class="bx bx-user"></i>
                            </span>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Details</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Users</span>
                    <h3 class="card-title mb-2">{{ $usersCount }}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +15.7%</small>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <span class="avatar-initial rounded bg-label-success">
                                <i class="bx bx-package"></i>
                            </span>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt2" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt2">
                                <a class="dropdown-item" href="javascript:void(0);">View Details</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Products</span>
                    <h3 class="card-title mb-2">{{ $productsCount }}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +8.3%</small>
                </div>
            </div>
        </div>



        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <span class="avatar-initial rounded bg-label-warning">
                                <i class="bx bx-category"></i>
                            </span>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="javascript:void(0);">View Details</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Categories</span>
                    <h3 class="card-title mb-2">{{ $categoriesCount }}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +5.2%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <span class="avatar-initial rounded bg-label-primary">
                                <i class="bx bx-cart"></i>
                            </span>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">View Details</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1"> Orders</span>
                    <h3 class="card-title mb-2">{{ $ordersCount }}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +12.5%</small>
                </div>
            </div>
        </div>
    </div>

    
</div>
