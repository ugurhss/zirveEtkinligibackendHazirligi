<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo" href="{{ url('index.html') }}">
            <img src="{{ asset('assets/images/Birlik_Vakfi_Bursa_Subesi_Logo.svg') }}" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="{{ asset('assets/images/Birlik_Vakfi_Bursa_Subesi_Logo.svg') }}" alt="logo" />
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">Hoşgeldin Admin</p>
                    </div>
                </a>
            </li>

            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-power"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>

<style>
    /* Ana navbar arkaplan rengi */
    .default-layout-navbar {
        background-color: #3978e5 !important;
        transition: all 0.3s ease;
        border-radius: 0 0 15px 15px; /* Alt kenarları yuvarlak */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Yumuşak gölge */
    }

    /* Navbar hover efekti */
    .default-layout-navbar:hover {
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
    }

    /* Navbar içindeki linkler */
    .navbar-nav .nav-link {
        color: #ffffff !important;
        transition: all 0.2s ease;
        padding: 0.5rem 1rem;
        border-radius: 8px; /* Link kenarlarını yuvarlak */
        margin: 0 3px;
    }

    /* Link hover efekti */
    .navbar-nav .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.15);
        transform: translateY(-2px);
    }

    /* Dropdown menü */
    .nav-profile-dropdown .dropdown-menu {
        background-color: #2c3e50;
        border: none;
        border-radius: 10px; /* Dropdown kenarlarını yuvarlak */
        margin-top: 10px;
    }

    /* Dropdown itemlar */
    .nav-profile-dropdown .dropdown-item {
        color: #ecf0f1;
        border-radius: 5px; /* Item kenarlarını yuvarlak */
        margin: 3px 5px;
    }

    .nav-profile-dropdown .dropdown-item:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: #f39c12;
    }

    /* Navbar toggler icon rengi */
    .navbar-toggler .mdi-menu {
        color: #ecf0f1;
        font-size: 1.5rem;
    }

    /* Mobile uyumluluk için düzenlemeler */
    @media (max-width: 991px) {
        .navbar-brand-wrapper {
            width: 100%;
            justify-content: center !important;
        }

        .navbar-menu-wrapper {
            padding: 10px 15px;
        }

        .navbar-nav {
            flex-direction: row;
            align-items: center;
        }

        .nav-item {
            margin-left: 10px;
        }

        .nav-profile-text p {
            font-size: 0.9rem;
        }

        .brand-logo img, .brand-logo-mini img {
            max-height: 40px;
            width: auto;
        }
    }

    @media (max-width: 576px) {
        .navbar-brand-wrapper {
            justify-content: space-between !important;
        }

        .brand-logo-mini {
            display: block !important;
        }

        .brand-logo {
            display: none !important;
        }

        .nav-profile-text p {
            display: none;
        }

        .nav-link i {
            font-size: 1.2rem;
        }
    }
</style>
