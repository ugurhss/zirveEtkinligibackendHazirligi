<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
  <div class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="brand-logo" style="color: white; font-weight: bold; font-size: 1.5rem;">
      Admin Paneli
    </div>
  </div>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic" style="color: white; transition: all 0.3s;">
        <i class="mdi mdi-email-outline menu-icon" style="font-size: 1.2rem; margin-right: 10px;"></i>
        <span class="menu-title">Gelen Mesajlar</span>
        <i class="menu-arrow mdi mdi-chevron-down" style="margin-left: auto;"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu" style="background-color: rgba(255,255,255,0.1); border-radius: 5px; margin: 5px 0 5px 15px; padding: 5px 0;">
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/buttons.html" style="color: rgba(255,255,255,0.8); padding: 8px 15px 8px 30px;">
              <i class="mdi mdi-message-text-outline" style="margin-right: 8px;"></i> İletişim
            </a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables" style="color: white; transition: all 0.3s;">
        <i class="mdi mdi-account-group menu-icon" style="font-size: 1.2rem; margin-right: 10px;"></i>
        <span class="menu-title">Katılım Yapacak Kullanıcılar</span>
        <i class="menu-arrow mdi mdi-chevron-down" style="margin-left: auto;"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu" style="background-color: rgba(255,255,255,0.1); border-radius: 5px; margin: 5px 0 5px 15px; padding: 5px 0;">
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html" style="color: rgba(255,255,255,0.8); padding: 8px 15px 8px 30px;">
              <i class="mdi mdi-account-multiple" style="margin-right: 8px;"></i> Tüm Kullanıcılar
            </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>

  <div class="sidebar-footer" style="padding: 20px; text-align: center; color: rgba(255,255,255,0.6); font-size: 0.8rem;">
    © 2023 Admin Paneli
  </div>
</nav>

<style>
  /* Mobil uyumluluk için responsive ayarlar */
  @media (max-width: 768px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar-brand {
      padding: 15px;
    }
    .nav-item {
      padding: 10px 15px;
    }
  }

  /* Hover efektleri */
  .nav-link:hover {
    background-color: rgba(255,255,255,0.2) !important;
    transform: translateX(5px);
  }

  .sub-menu .nav-link:hover {
    background-color: rgba(255,255,255,0.15) !important;
    transform: none;
  }

  /* Aktif menü öğesi stili */
  .nav-link.active {
    background-color: rgba(255,255,255,0.25) !important;
    font-weight: bold;
  }
</style>
