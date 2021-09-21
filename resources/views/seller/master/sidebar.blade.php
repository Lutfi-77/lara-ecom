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
            <a href="{{route('seller.dashboard')}}" class="nav-link">
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
                <li><a class="nav-link" href="{{route('seller.products')}}">All Product</a></li>
                <li><a class="nav-link" href="{{route('seller.addProduct')}}">Add Product</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-tags"></i>
                <span>Manage Category</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('seller.categories')}}">All Category</a></li>
                <li><a class="nav-link" href="{{route('seller.addCategory')}}">Add Category</a></li>
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
</aside>