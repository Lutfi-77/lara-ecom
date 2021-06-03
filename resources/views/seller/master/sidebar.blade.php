<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="menu-header">Product</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-tags"></i>
                <span>Manage Product</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('home')}}">All Product</a></li>
                <li><a class="nav-link" href="{{route('seller.addProduct')}}">Add Product</a></li>
            </ul>
        </li>
        <li class="menu-header">Orders</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-shipping-fast"></i>
                <span>Manage Orders</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                <li><a href="auth-login.html">Login</a></li>
            </ul>
        </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
        </a>
    </div>
</aside>