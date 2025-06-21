<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('client/images/logo1.png')}}" alt="متجرنا" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-md-end">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">المنتجات</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                الأقسام
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">الألكترونيات</a></li>
                                <li><a class="dropdown-item" href="#">الملابس</a></li>
                                <li><a class="dropdown-item" href="#">الأثاث</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">عنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">اتصل بنا</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-3 align-items-center me-auto ms-lg-3">

    <!-- سلة التسوق -->
    <div class="position-relative ">
        <a href="#" class="text-white fs-5 position-relative" title="سلة التسوق">
            <i class="fas fa-shopping-cart fa-lg"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                3
                <span class="visually-hidden">منتجات في السلة</span>
            </span>
        </a>
    </div>

    <!-- حالة المستخدم -->
    @if (Auth::check())
        <!-- المستخدم مسجل دخول -->
        <div class="dropdown me-5">
            <button class="btn p-0 border-0 bg-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="user-avatar bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; margin-left: 70px;">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
            </button>

            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user me-2"></i> حسابي
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-clipboard-list me-2"></i> طلباتي
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item text-danger" wire:click.prevent="logout" href="#">
                        <i class="fas fa-sign-out-alt me-2"></i> تسجيل الخروج
                    </a>
                </li>
            </ul>
        </div>
    @else
        <!-- المستخدم غير مسجل -->
        <div class="d-flex gap-2">
            <a href="#" class="btn btn-outline-light">
                <i class="fas fa-sign-in-alt me-2"></i> تسجيل الدخول
            </a>
            <a href="#" class="btn btn-primary">
                <i class="fas fa-user-plus me-2"></i> إنشاء حساب
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
        display: none; /* إخفاء السهم الافتراضي */
    }
</style>
                </div>
            </div>
        </nav>
