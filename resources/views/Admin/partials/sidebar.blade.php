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
                            href="pages/ui-features/dropdowns.html"
                            >1</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="pages/ui-features/typography.html"
                            >2</a
                        >
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/Admin/formAdd') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Form Elements</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/Admin/userTable') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Tables</span>
            </a>
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
            <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Icons</span>
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
                        <a
                            class="nav-link"
                            href="pages/samples/blank-page.html"
                        >
                            Blank Page
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-404.html">
                            404
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-500.html">
                            500
                        </a>
                    </li>
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
        <li class="nav-item menu-items">
            <a
                class="nav-link"
                href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html"
            >
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
