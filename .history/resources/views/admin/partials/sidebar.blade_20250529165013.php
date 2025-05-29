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
    /* Sidebar ana yapısı */
.sidebar {
  background: linear-gradient(180deg, #3978e5 0%, #2a5bc0 100%) !important;
  box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

/* Nav item genel stil */
.nav-item {
  margin: 5px 15px;
  border-radius: 8px;
  overflow: hidden;
  transition: all 0.3s ease;
}

/* Nav link temel stil */
.nav-link {
  color: rgba(255, 255, 255, 0.9) !important;
  padding: 12px 15px !important;
  display: flex;
  align-items: center;
  border-radius: 8px;
  transition: all 0.2s ease;
}

/* Hover efekti */
.nav-link:hover {
  background: rgba(255, 255, 255, 0.15) !important;
  transform: translateX(5px);
  color: white !important;
}

/* Aktif menü öğesi */
.nav-link.active {
  background: rgba(255, 255, 255, 0.2) !important;
  font-weight: 500;
}

/* Menü başlığı */
.menu-title {
  flex-grow: 1;
  font-size: 15px;
}

/* Menü ikonları */
.menu-icon {
  font-size: 20px;
  margin-right: 10px;
  color: rgba(255, 255, 255, 0.7);
}

/* Alt menü stil */
.sub-menu {
  background: rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  margin: 5px 0;
  padding: 5px 0 !important;
}

.sub-menu .nav-link {
  padding: 8px 15px 8px 35px !important;
  font-size: 14px;
}

.sub-menu .nav-link:hover {
  background: rgba(255, 255, 255, 0.1) !important;
}

/* Ok ikonu */
.menu-arrow {
  transition: all 0.3s ease;
}

/* Açık dropdown stil */
.nav-link[aria-expanded="true"] {
  background: rgba(255, 255, 255, 0.1) !important;
}

.nav-link[aria-expanded="true"] .menu-arrow {
  transform: rotate(90deg);
}

/* Scrollbar stil (isteğe bağlı) */
.sidebar::-webkit-scrollbar {
  width: 5px;
}

.sidebar::-webkit-scrollbar-thumb {
  background: rgba(255, 255, 255, 0.2);
  border-radius: 10px;
}
.sidebar::before {
  content: "";
  display: block;
  height: 80px;
  background: rgba(0, 0, 0, 0.1);
  margin-bottom: 15px;
  background-image: url('logo.png');
  background-size: 70%;
  background-position: center;
  background-repeat: no-repeat;
}
.nav-link.active {
  position: relative;
}

.nav-link.active::after {
  content: "";
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 3px;
  height: 60%;
  background: white;
  border-radius: 3px 0 0 3px;
}
.collapse {
  transition: all 0.3s ease-out !important;
}

.collapsing {
  transition-duration: 0.2s !important;
}
</style>
