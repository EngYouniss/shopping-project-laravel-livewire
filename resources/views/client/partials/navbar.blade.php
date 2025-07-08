<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('client/images/logo1.png') }}" alt="Our Store" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Left Menus -->
            <ul class="navbar-nav text-md-start">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.products') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.products') }}">Products</a>
                </li>

                <!-- Categories Hover Dropdown -->
                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('client.products') }}" id="navbarDropdown" role="button">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('client.products') }}">
                                <i class="fas fa-tv me-2 text-primary"></i> Electronics
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('client.products') }}">
                                <i class="fas fa-tshirt me-2 text-danger"></i> Clothing
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-couch me-2 text-brown"></i> Furniture
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-laptop-code me-2 text-info"></i> Computers
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-basketball-ball me-2 text-warning"></i> Sports
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-us') }}">Contact</a>
                </li>
            </ul>

            <!-- Right Icons -->
            <div class="d-flex gap-5 align-items-center ms-auto">

              <livewire:client.cart.cart-component />


                <!-- User Status -->
                @if (Auth::check())
                    <div class="dropdown">
                        <button class="btn p-0 border-0 bg-transparent dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-avatar bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 36px; height: 36px;">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> My Account</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="fas fa-clipboard-list me-2"></i> My
                                    Orders</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <livewire:client.auth.client-logout-component />
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-light"><i class="fas fa-sign-in-alt me-2"></i>
                            Login</a>
                        <a href="#" class="btn btn-primary"><i class="fas fa-user-plus me-2"></i> Register</a>
                    </div>
                @endif
            </div>

            <!-- Custom Styles -->
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

                /* Hover dropdown behavior for Categories */
                .hover-dropdown:hover .dropdown-menu {
                    display: block;
                    margin-top: 0;
                }

                .dropdown-menu {
                    transition: all 0.3s ease;
                }
            </style>
            <!-- Cart Dropdown -->


            <!-- Optional CSS -->
            <style>
                .cart-dropdown::-webkit-scrollbar {
                    width: 6px;
                }

                .cart-dropdown::-webkit-scrollbar-thumb {
                    background-color: rgba(0, 0, 0, 0.2);
                    border-radius: 3px;
                }
            </style>

        </div>


    </div>

</nav>
