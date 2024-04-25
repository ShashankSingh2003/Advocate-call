<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span><img src="{{ asset('/assets/dashboard/img/logo.png')}}" alt="" height="50px" width="100%"></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Admin Only Links -->
        {{-- @if(Auth::check() && Auth::user()->user_type === 'admin') --}}
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="{{ Route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-pin"></i>
                <div data-i18n="Dashboard">Leads</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('knownadvocate') ? 'active' : '' }}">
            <a href="{{ Route('admin.knownadvocate') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-pin"></i>
                <div data-i18n="Dashboard">Known advocate</div>
            </a>
        </li>
       


        {{-- @endif --}}
    </ul>
</aside>
<!-- / Menu -->