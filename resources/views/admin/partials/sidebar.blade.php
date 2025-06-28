 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
             <span class="app-brand-logo demo">

             </span>
             <span class="app-brand-text demo menu-text fw-bolder ms-2">Dashboard</span>
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1">
         <!-- Dashboard -->
         <li class="menu-item @yield('index-active')">
             <a href="{{ route('admin.dashboard') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-home-circle"></i>
                 <div data-i18n="Analytics">Dashboard</div>
             </a>
         </li>
         <li class="menu-item @yield('setting-active')">
             <a href="{{ route('admin.settings') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-cog"></i>
                 <div data-i18n="Analytics">Settings</div>
             </a>
         </li>
          <li class="menu-item @yield('product-active')">
             <a href="{{ route('admin.products') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-cog"></i>
                 <div data-i18n="Analytics">Products</div>
             </a>
         </li>

     </ul>
 </aside>
