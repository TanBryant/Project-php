<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div
        class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
    >
        <!-- <a class="sidebar-brand brand-logo" href="{{url('/Admin')}}"><img src="{{@asset('/assets/images/logo.svg')}}" alt="logo" /></a> -->
        <a
            class="sidebar-brand brand-logo text-success logo h1 align-self-center"
            href="{{ '/Admin' }}" style="text-decoration: none;"
        >
            Zayshop Admin
        </a>
        <a class="sidebar-brand brand-logo-mini text-success align-self-center" style="text-decoration: none;" href="{{'/Admin'}}"> Z</a>
    </div>
    <ul class="nav">  
        <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <!-- product -->
        <li class="nav-item menu-items">
            <a
                class="nav-link"
                data-toggle="collapse"
                href="#ui-basic"
                aria-expanded="false"
                aria-controls="ui-basic"
            >
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/Admin/productTable') }}"
                            >Product List</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{url('/Admin/addProduct')}}"
                            >Add Product</a
                        >
                    </li> 
                </ul>
            </div>
        </li>
        <!-- user -->
        <li class="nav-item menu-items">
            <a
                class="nav-link"
                data-toggle="collapse"
                href="#ui-basic1"
                aria-expanded="false"
                aria-controls="ui-basic"
            >
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/Admin/userTable') }}"
                            >User List</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/Admin/formAdd') }}"
                            >Add Product</a
                        >
                    </li> 
                </ul>
            </div>
        </li> 
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        
        <li class="nav-item menu-items">
            <a
                class="nav-link"
                data-toggle="collapse"
                href="#auth"
                aria-expanded="false"
                aria-controls="auth"
            >
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu"> 
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/login.html">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/register.html">
                            Register
                        </a>
                    </li>
                </ul>
            </div>
        </li>
         
    </ul>
</nav>
