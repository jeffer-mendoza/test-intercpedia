<!-- Brand Logo -->
<a href="/" class="brand-link">
    <img src="/adminlte/img/logo_interacpedia.svg" alt="Intercpedia Logo" class="brand-image"
         style="opacity: .8">
    <br/>
</a>

<div
    class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">



    <div class="os-resize-observer-host">
        <div class="os-resize-observer observed" style="left: 0px; right: auto;"></div>
    </div>
    <div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;">
        <div class="os-resize-observer observed"></div>
    </div>
    <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div>
    <div class="os-padding">
        <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
            <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    {{__('menu.dashboard.item')}}
                                    <span class="right badge badge-danger">{{__('menu.dashboard.new')}}</span>
                                </p>
                            </a>
                        </li>

                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview" >
                            <a href="/company" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    {{__('menu.company.item')}}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/company" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>{{__('menu.company.list')}}</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/company/create" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>{{__('menu.company.create')}}</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="/employee" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    {{__('menu.employee.item')}}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="/employee" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>{{ __('menu.company.list')}}</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/employee/create" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>{{__('menu.company.create')}}</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
    </div>
    <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
        <div class="os-scrollbar-track">
            <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
        </div>
    </div>
    <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
        <div class="os-scrollbar-track">
            <div class="os-scrollbar-handle" style="height: 46.1844%; transform: translate(0px, 0px);"></div>
        </div>
    </div>
    <div class="os-scrollbar-corner"></div>
</div>
