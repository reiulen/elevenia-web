<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #0A4D68">
    <div
        class="sidebar os-host os-theme-light os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden" style="background: #0A4D68">
        <a href="{{ route('dashboard') }}" class=" d-flex justify-content-center align-items-center border-0 mt-3 mb-5">
            <div class="brand-text text-center align-middle bg-white py-1" style="border-radius: 10px">
                <img src="{{ asset('assets/images/logo-espn.png') }}"
                    style="height: 45px" />
            </div>
        </a>
        <!-- Sidebar Menu -->
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar nav-child-indent" data-widget="treeview"
                role="menu" data-accordion="false">
                <li class="nav-header text-bold mb-2">Dashboard</li>
                <li
                    class="nav-item nav-item {{ set_menu_open(['news.index', 'news.create', 'news.edit', 'career.index', 'partner.index', 'client.index', 'sejarah.index']) }}">
                    <a href="#" class="nav-link bg-white " style="border-radius: 8px">
                        <p>
                            {{ __('ESPN') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('news.index') }}" class="nav-link {{ set_active_sub(['news.index']) }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('News') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('career.index') }}" class="nav-link {{ set_active_sub(['career.index']) }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Career') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('client.index') }}" class="nav-link {{ set_active_sub(['client.index']) }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Client') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('partner.index') }}" class="nav-link {{ set_active_sub(['partner.index']) }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Partner') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sejarah.index') }}" class="nav-link {{ set_active_sub(['sejarah.index']) }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Sejarah') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
