<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('client/images/logo1.png') }}" alt="Our Store" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- القوائم على اليسار -->
            <ul class="navbar-nav text-md-start">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Electronics</a></li>
                        <li><a class="dropdown-item" href="#">Clothing</a></li>
                        <li><a class="dropdown-item" href="#">Furniture</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <!-- الأيقونات على أقصى اليمين -->
            <div class="d-flex gap-5 align-items-center ms-auto">
                <!-- Shopping Cart -->
                <div class="position-relative">
                    <a href="#" class="text-white fs-5 position-relative" title="Shopping Cart">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                            <span class="visually-hidden">Items in cart</span>
                        </span>
                    </a>
                </div>

                <!-- User Status -->
                @if (Auth::check())
                    <div class="dropdown">
                        <button class="btn p-0 border-0 bg-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-avatar bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user me-2"></i> My Account
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-clipboard-list me-2"></i> My Orders
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <livewire:client.auth.client-logout-component/>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-light">
                            <i class="fas fa-sign-in-alt me-2"></i> Login
                        </a>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-user-plus me-2"></i> Register
                        </a>
                    </div>
                @endif
            </div>

            <style>
                .user-avatar {
                    color: white;
                    font-weight: bold;
                    font-size: 1.1rem;
                    cursor: pointer;
                    transition: transform 0.2s;
                }
                .user-avatar:hover {
                    transform: scale(1.1);
                }
                .dropdown-toggle::after {
                    display: none;
                }
            </style>
        </div>
    </div>
</nav>
