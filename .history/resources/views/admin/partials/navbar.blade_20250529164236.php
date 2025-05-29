 <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
<a class="navbar-brand brand-logo" href="{{ url('index.html') }}">
    <img src="{{ asset('assets/images/Birlik_Vakfi_Bursa_Subesi_Logo.svg') }}" alt="logo" />
</a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/images/Birlik_Vakfi_Bursa_Subesi_Logo.svg') }}" alt="logo" /></a>
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
    background-color: #3978e5 !important; /* İstediğiniz renk kodunu verebilirsiniz */
    transition: all 0.3s ease; /* Düzgün geçiş efekti için */
}

/* Navbar hover efekti */
.default-layout-navbar:hover {
    background-color: #1405ef !important; /* Hover rengi */
    box-shadow: 0 4px 8px rgba(216, 69, 233, 0.1); /* İsteğe bağlı gölge efekti */
}

/* Navbar içindeki linkler */
.navbar-nav .nav-link {
    color: #ecf0f1 !important; /* Link rengi */
    transition: all 0.2s ease;
}

/* Link hover efekti */
.navbar-nav .nav-link:hover {
    color: #f39c12 !important; /* Hover rengi */
    transform: translateY(-2px); /* Hafif yukarı hareket */
}

/* Dropdown menü */
.nav-profile-dropdown .dropdown-menu {
    background-color: #2c3e50;
    border: none;
}

/* Dropdown itemlar */
.nav-profile-dropdown .dropdown-item {
    color: #ecf0f1;
}

.nav-profile-dropdown .dropdown-item:hover {
    background-color: #34495e;
    color: #f39c12;
}

/* Navbar toggler icon rengi */
.navbar-toggler .mdi-menu {
    color: #ecf0f1;
}
</style>
