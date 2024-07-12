<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img style="margin-right: 10px;" src="{{url('public/icon')}}/logo.png" 
                class="logo" alt="" height="60px" width="50px">

            </span>

            <!-- <span class="" style="color: green;">TAFROZ</span> -->
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{request()->is('data-distributor*') ? 'active' : ''}}">
            <a href="{{url('data-distributor')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="Analytics">Data</div>
            </a>
        </li>

    </ul>
</aside>