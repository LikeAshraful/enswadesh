<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>

    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{ route('backend.dashboard') }}"
                        class="{{ Route::is('backend.dashboard') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">User Management</li>
                <li>
                    <a href="#"
                        class="{{ Route::is('backend.super_admin.index*') || Route::is('backend.roles.index*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Property
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        @canany('backend.super_admin.index')
                            <li>
                                <a href="{{route('backend.super_admin.index')}}"
                                    class="{{ Route::is('backend.super_admin.index*') ? 'mm-active' : '' }}">
                                    <i class="metismenu-icon"></i>
                                    Users
                                </a>
                            </li>
                        @elsecanany('backend.admin.index')
                            <li>
                                <a href="{{route('backend.admin.index')}}"
                                    class="{{ Route::is('backend.admin.index*') ? 'mm-active' : '' }}">
                                    <i class="metismenu-icon"></i>
                                    Users
                                </a>
                            </li>
                        @endcanany
                        @canany('backend.roles.index')
                            <li>
                                <a href="{{ route('backend.roles.index') }}"
                                    class="{{ Route::is('backend.roles.index*') ? 'mm-active' : '' }}">
                                    <i class="metismenu-icon"></i>
                                    Roles
                                </a>
                            </li>
                        @endcanany
                    </ul>
                </li>
                <li class="app-sidebar__heading">Shop Locations</li>
                <li>
                    <a href="#" class="{{ Route::is('backend.menus.index*') || Route::is('backend.cities.index*') || Route::is('backend.areas.index*') || Route::is('backend.markets.index*') || Route::is('backend.thanas.index*') || Route::is('backend.floors.index*') || Route::is('backend.shops.index*') || Route::is('backend.shoptypes.index*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Property
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('backend.menus.index')}}" class="{{ Route::is('backend.menus.index*') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                App Menus
                            </a>
                        </li>
                        @canany('backend.cities.index')
                            <li>
                                <a href="{{route('backend.cities.index')}}" class="{{ Route::is('backend.cities.index*') ? 'mm-active' : '' }}">
                                    <i class="metismenu-icon"></i>
                                    Cities
                                </a>
                            </li>
                        @endcanany
                        <li>
                            <a href="{{route('backend.areas.index')}}" class="{{ Route::is('backend.areas.index*') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Areas
                            </a>
                        </li>
                        <li>
                            <a href="{{route('backend.thanas.index')}}" class="{{ Route::is('backend.thanas.index*') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Thana
                            </a>
                        </li>
                        <li>
                            <a href="{{route('backend.markets.index')}}" class="{{ Route::is('backend.markets.index*') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Market
                            </a>
                        </li>
                        <li>
                            <a href="{{route('backend.floors.index')}}" class="{{ Route::is('backend.floors.index*') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Floor
                            </a>
                        </li>
                        <li>
                            <a href="{{route('backend.shoptypes.index')}}" class="{{ Route::is('backend.shoptypes.index*') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Shop Type
                            </a>
                        </li>
                        <li>
                            <a href="{{route('backend.shops.index')}}" class="{{ Route::is('backend.shops.index*') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Shops
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="app-sidebar__heading">Shop Product</li>
                <li>
                    <a href="#" class="{{ Route::is('backend.category.index*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon pe-7s-diamond"></i>
                        Property
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        @canany('backend.category.index')
                            <li>
                                <a href="{{route('backend.category.index')}}"
                                    class="{{ Route::is('backend.category.index*') ? 'mm-active' : '' }}">
                                    <i class="metismenu-icon"></i>
                                        Category
                                </a>
                            </li>
                        @endcanany
                        @canany('backend.brand.index')
                        <li>
                            <a href="{{route('backend.brand.index')}}"
                                class="{{ Route::is('backend.brand.index*') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                    Brand
                            </a>
                        </li>
                        @endcanany
                    </ul>
                </li>
                <li>
                    <a href="#" class="{{ Route::is('backend.orders.index*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon pe-7s-diamond"></i>
                        Order Management
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('backend.orders.index')}}"
                                class="{{ Route::is('backend.category.index*') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                    Orders
                            </a>
                        </li>
                        <li>
                            <a href="{{route('backend.orders.index')}}?order_status=5"
                                class="{{ Route::is('backend.category.index*') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                  Refund Orders
                            </a>
                        </li>
                        <li>
                            <a href="{{route('backend.orders.index')}}?order_status=0"
                                class="{{ Route::is('backend.category.index*') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                   Cancel Orders
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
