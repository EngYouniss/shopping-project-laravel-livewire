<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme shadow-sm rounded-end">
    <!-- Logo -->
    <div class="app-brand p-3 border-bottom">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link d-flex align-items-center text-decoration-none">
            <i class="bx bx-bar-chart-alt-2 bx-sm text-primary me-2"></i>
            <span class="app-brand-text fw-bold fs-5">Dashboard</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle ms-auto d-xl-none">
            <i class="bx bx-x bx-sm"></i>
        </a>
    </div>

    <!-- Inner shadow -->
    <div class="menu-inner-shadow"></div>

    <!-- Navigation Links -->
    <ul class="menu-inner py-3">
        <li class="menu-item @yield('index-active')">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="menu-item @yield('setting-active')">
            <a href="{{ route('admin.settings') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <span>Settings</span>
            </a>
        </li>

        <li class="menu-item @yield('product-active')">
            <a href="{{ route('admin.products') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <span>Products</span>
            </a>
        </li>

        <li class="menu-item @yield('category-active')">
            <a href="{{ route('admin.categories') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <span>Categories</span>
            </a>
        </li>

        <li class="menu-item @yield('order-active')">
            <a href="{{ route('admin.orders') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-receipt"></i>
                <span>Orders</span>
            </a>
        </li>

        <li class="menu-item @yield('slider-active')">
            <a href="{{ route('admin.sliders') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image-alt"></i>
                <span>Sliders</span>
            </a>
        </li>

        <li class="menu-item @yield('offer-active')">
            <a href="{{ route('admin.offers') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-purchase-tag-alt"></i>
                <span>Offers</span>
            </a>
        </li>

        <li class="menu-item @yield('user-active')">
            <a href="{{ route('admin.users') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <span>Users</span>
            </a>
        </li>
        <li class="menu-item @yield('message-active')">
            <a href="{{ route('admin.messages') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <span>Messages</span>
            </a>
        </li>
    </ul>

</aside>
