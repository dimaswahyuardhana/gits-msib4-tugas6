<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ url('/') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Ardhana Store</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            @auth
            <div class="ms-3">
                {{ Auth::user()->name }}
            </div>
            @endauth
            @guest

            @endguest
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link active"><i class="fa fa-home me-2"></i>Dashboard</a>
            <a href="{{ url('/category') }}" class="nav-item nav-link"><i class="fa fa-bars me-2"></i>Category</a>
            <a href="{{ url('/product') }}" class="nav-item nav-link"><i class="fa fa-server me-2"></i>Product</a>
            @auth
                <a href="{{ url('/logout') }}" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Logout</a>
            @endauth
            @guest
            <a href="{{ url('/login') }}" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Sign In</a>
            <a href="{{ url('/register') }}" class="nav-item nav-link"><i class="fa fa-address-card me-2"></i>Sign Up</a>
            @endguest

        </div>
    </nav>
</div>

<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input class="form-control bg-dark border-0" type="search" placeholder="Search">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
            @auth
            <div class="nav-item dropdown">
                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">My Profile</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a>
                </div>
            </div>
            @endauth
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
            @endguest
        </div>
    </nav>
