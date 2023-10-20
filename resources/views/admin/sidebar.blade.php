<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ url('admin/dashboard') }}">
            <img src="{{ asset('admin/assets/images/fine-wood.png') }}" alt="logo" />
        </a>
        <a class="sidebar-brand brand-logo-mini" href="{{ url('admin/dashboard') }}">
            <img src="{{ asset('admin/assets/images/logo-mini.svg') }}" alt="logo" />
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <!-- Profile details here -->
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('admin/category') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('admin/products') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Products</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('admin/charts') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('admin/icons') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('admin/user-pages') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">User Pages</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('admin/documentation') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
