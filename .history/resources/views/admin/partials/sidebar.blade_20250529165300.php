  <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">

            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Gelen Mesajlar</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/buttons.html">İletisim </a>
                  </li>

                </ul>
              </div>
            </li>



            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">Katılım Yapacak Kullanıcılar</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">Tüm Kullanıcılar</a>
                  </li>
                </ul>
              </div>
            </li>


          </ul>
        </nav>
<style>
/* TEMEL YAPI */
.sidebar {
  background-color: #ffffff;
  box-shadow: 2px 0 20px rgba(57, 120, 229, 0.12);
  width: 260px;
  transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
}

/* NAV ITEM YAPISI */
.nav-item {
  position: relative;
  margin: 2px 12px;
  transition: all 0.3s ease;
}

/* LINK TEMEL STİL */
.nav-link {
  display: flex;
  align-items: center;
  padding: 12px 16px;
  color: #5f6368 !important;
  border-radius: 8px;
  text-decoration: none;
  font-size: 14px;
  font-weight: 500;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* HOVER EFEKTI */
.nav-link:hover {
  background-color: rgba(57, 120, 229, 0.08);
  color: #3978e5 !important;
  transform: translateX(4px);
}

.nav-link:hover .menu-icon {
  color: #3978e5;
}

/* AKTIF MENU */
.nav-link.active {
  background-color: rgba(57, 120, 0.1);
  color: #3978e5 !important;
  font-weight: 600;
}

.nav-link.active .menu-icon {
  color: #3978e5;
}

/* MENU ICONLARI */
.menu-icon {
  font-size: 20px;
  margin-right: 12px;
  color: #5f6368;
  transition: all 0.3s ease;
}

/* MENU BASLIKLARI */
.menu-title {
  flex: 1;
  white-space: nowrap;
}

/* ALT MENU STILI */
.sub-menu {
  padding-left: 12px !important;
  margin-top: 4px;
}

.sub-menu .nav-link {
  padding: 10px 16px 10px 44px;
  font-size: 13px;
  position: relative;
}

.sub-menu .nav-link::before {
  content: "";
  position: absolute;
  left: 28px;
  top: 50%;
  transform: translateY(-50%);
  width: 6px;
  height: 6px;
  background-color: #3978e5;
  border-radius: 50%;
  opacity: 0;
  transition: all 0.3s ease;
}

.sub-menu .nav-link:hover::before {
  opacity: 1;
}

/* AÇILIR MENU OK İKONU */
.menu-arrow {
  display: inline-block;
  width: 16px;
  height: 16px;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%235f6368'%3E%3Cpath d='M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: center;
  transition: all 0.3s ease;
}

.nav-link[aria-expanded="true"] .menu-arrow {
  transform: rotate(90deg);
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%233978e5'%3E%3Cpath d='M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z'/%3E%3C/svg%3E");
}

/* AÇIK DROPDOWN STILI */
.nav-link[aria-expanded="true"] {
  background-color: rgba(57, 120, 229, 0.1) !important;
}

/* ANIMASYONLU AÇILIP KAPANMA */
.collapse:not(.show) {
  display: none;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (max-width: 992px) {
  .sidebar {
    transform: translateX(-100%);
    position: fixed;
    z-index: 1000;
    height: 100vh;
  }

  .sidebar.sidebar-mobile-open {
    transform: translateX(0);
  }
}
</style>
