<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo mt-3 mb-3">
        <a href="/admin/dashboard" class="app-brand-link">
            <img src="/assets/img/icons/logo.png" style="width: 100%" alt="">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="/admin/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>



        {{-- PAGES --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">MAIN</span>
        </li>
        <li class="menu-item">
            <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Account Settings">Brands</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/admin/brands" class="menu-link">
                        <div data-i18n="Account">All Brands</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/brands/create" class="menu-link">
                        <div data-i18n="Notifications">Add Brand</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Orders</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/admin/new-orders" class="menu-link">
                        <div data-i18n="Error">New Orders</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/order" class="menu-link">
                        <div data-i18n="Error">All Orders</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- <li class="menu-item">
            <a href="/admin/users" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Analytics">users</div>
            </a>
        </li> --}}
        <li class="menu-item">
            <a href="/admin/missing-parts" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Analytics">Missing Parts</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Areas</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/admin/area/create" class="menu-link">
                        <div data-i18n="Error">New Area</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/area" class="menu-link">
                        <div data-i18n="Error">All Areas</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Swipers</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/admin/swipers/create" class="menu-link">
                        <div data-i18n="Error">New Swiper</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/swipers" class="menu-link">
                        <div data-i18n="Error">All Swipers</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">ADMINS</span></li>

        <!-- Extended components -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Extended UI">Admins</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/admin/admin/create" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Add Admin</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/admin" class="menu-link">
                        <div data-i18n="Text Divider">Show Admins</div>
                    </a>
                </li>
            </ul>
        </li>


    </ul>
</aside>
