@push('shopSidebar')
<a href="#" class="{{ Route::is('backend.menus.index*') || Route::is('backend.cities.index*') ? 'mm-active' : '' }}">
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
    <li>
        <a href="{{route('backend.cities.index')}}" class="{{ Route::is('backend.cities.index*') ? 'mm-active' : '' }}">
            <i class="metismenu-icon"></i>
            Cities
        </a>
    </li>
</ul>
@endpush
