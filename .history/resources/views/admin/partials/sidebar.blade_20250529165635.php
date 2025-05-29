  <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">

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
/* TEMEL YAPI - YUMUŞAK KENARLAR */
.sidebar {
  background-color: #ffffff;
  box-shadow: 2px 0 20px rgba(57, 120, 229, 0.08);
  width: 280px;
  border-radius: 0 24px 24px 0;
  transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
  overflow: hidden;
}

/* NAV ITEM YAPISI - YUVARLAK KÖŞELER */
.nav-item {
  position: relative;
  margin: 4px 16px;
  transition: all 0.3s ease;
}

/* LINK TEMEL STİL - BELİRGİN YUVARLAMA */
.nav-link {
  display: flex;
  align-items: center;
  padding: 14px 18px;
  color: #5f6368 !important;
  border-radius: 12px;
  text-decoration: none;
  font-size: 14px;
  font-weight: 500;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  margin: 4px 0;
}

/* HOVER EFEKTI - YUMUŞAK GEÇİŞ */
.nav-link:hover {
  background-color: rgba(57, 120, 229, 0.06);
  color: #3978e5 !important;
  transform: translateX(6px);
  box-shadow: 2px 2px 8px rgba(57, 120, 229, 0.1);
}

/* AKTIF MENU - YUMUŞAK VURGULU */
.nav-link.active {
  background: linear-gradient(135deg, rgba(57, 120, 229, 0.12) 0%, rgba(57, 120, 229, 0.08) 100%);
  color: #3978e5 !important;
  font-weight: 600;
  box-shadow: inset 2px 0 12px rgba(57, 120, 229, 0.08);
  border-left: 3px solid #3978e5;
}

/* ALT MENU STILI - İÇE DOĞRU YUVARLAMA */
.sub-menu {
  padding-left: 16px !important;
  margin-top: 6px;
}

.sub-menu .nav-link {
  padding: 12px 18px 12px 48px;
  border-radius: 10px;
  font-size: 13px;
  position: relative;
}

.sub-menu .nav-link::before {
  content: "";
  position: absolute;
  left: 32px;
  top: 50%;
  transform: translateY(-50%);
  width: 8px;
  height: 8px;
  background-color: #3978e5;
  border-radius: 50%;
  opacity: 0;
  transition: all 0.3s ease;
}

/* MENU ICONLARI - YUMUŞAK GEÇİŞLİ */
.menu-icon {
  font-size: 20px;
  margin-right: 14px;
  color: #5f6368;
  transition: all 0.3s ease;
  padding: 6px;
  background: rgba(57, 120, 229, 0.05);
  border-radius: 10px;
}

.nav-link:hover .menu-icon,
.nav-link.active .menu-icon {
  background: rgba(57, 120, 229, 0.12);
  border-radius: 12px;
}

/* AÇILIR MENU OK İKONU - YUVARLAK ARKAPLAN */
.menu-arrow {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 24px;
  height: 24px;
  background: rgba(57, 120, 229, 0.05);
  border-radius: 50%;
  transition: all 0.3s ease;
}

.nav-link[aria-expanded="true"] .menu-arrow {
  background: rgba(57, 120, 229, 0.15);
}

/* YUMUŞAK AYIRICILAR */
.sidebar-divider {
  height: 1px;
  background: rgba(57, 120, 229, 0.08);
  margin: 16px;
  border-radius: 50%;
}

/* PROFİL ALANI - KART STİLİ */
.sidebar-profile {
  padding: 20px;
  background: rgba(57, 120, 229, 0.03);
  margin: 20px;
  border-radius: 16px;
  border: 1px solid rgba(57, 120, 229, 0.08);
  box-shadow: 0 4px 12px rgba(57, 120, 229, 0.05);
}
</style>
