<header class="mdc-top-app-bar">
  <div class="mdc-top-app-bar__row">
    <!-- Sol taraf: Menü ikonu ve başlık -->
    <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
      <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
      <span class="mdc-top-app-bar__title">Admin Sayfası!</span>
    </div>

    <!-- Sağ taraf: Kullanıcı menüsü -->
    <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
      <!-- Profil kısmı (masaüstü ve mobilde görünür) -->
      <div class="menu-button-container menu-profile">
        <button class="mdc-button mdc-menu-button">
          <span class="d-flex align-items-center">
            <!-- Kullanıcı resmi (isteğe bağlı) -->
            <!-- <span class="figure"><img src="assets/images/faces/face1.jpg" alt="user" class="user"></span> -->
            <span class="user-name">Hoşgeldin Admin</span>
          </span>
        </button>
      </div>

      <!-- Ayarlar / Daha fazla menü butonu -->
      <div class="menu-button-container">
        <button class="mdc-button mdc-menu-button">
          <i class="mdi mdi-dots-vertical"></i>
        </button>
        <div class="mdc-menu mdc-menu-surface" tabindex="-1">
          <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
            <li class="mdc-list-item" role="menuitem">
              <div class="item-thumbnail item-thumbnail-icon-only">
                <i class="mdi mdi-account-outline text-success"></i>
              </div>
              <div class="item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="item-subject font-weight-normal">Profil</h6>
              </div>
            </li>
            <li class="mdc-list-item" role="menuitem">
              <div class="item-thumbnail item-thumbnail-icon-only">
                <i class="mdi mdi-settings text-info"></i>
              </div>
              <div class="item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="item-subject font-weight-normal">Ayarlar</h6>
              </div>
            </li>
            <li class="mdc-list-item" role="menuitem">
              <div class="item-thumbnail item-thumbnail-icon-only">
                <i class="mdi mdi-logout text-danger"></i>
              </div>
              <div class="item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="item-subject font-weight-normal">Çıkış Yap</h6>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Stiller -->
<style>
  /* Header arka planı */
  .mdc-top-app-bar {
    background-color: #6c5ce7 !important; /* Mor */
    color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  /* Yazı renkleri */
  .mdc-top-app-bar__title,
  .mdc-top-app-bar__navigation-icon,
  .mdc-button .user-name,
  .mdc-button i.material-icons,
  .mdi {
    color: white !important;
  }

  /* Menü butonları üzerine gelince efekt */
  .mdc-button.mdc-menu-button:hover {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    transition: background-color 0.3s ease;
  }

  /* Profil menüsü */
  .menu-profile .mdc-button {
    padding: 0 12px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    transition: background-color 0.3s ease;
  }

  .menu-profile .mdc-button:hover {
    background-color: rgba(255, 255, 255, 0.1);
  }

  /* Mobil uyum için buton boyutları */
  .mdc-button.mdc-menu-button {
    width: 48px;
    height: 48px;
    padding: 0;
  }

  /* Menü içeriği mobilde daha büyük olsun */
  .mdc-menu-surface .mdc-list-item {
    min-height: 52px;
    padding: 12px 16px;
  }

  .mdc-menu-surface .item-thumbnail {
    margin-right: 12px;
  }

  .mdc-menu-surface .item-subject {
    font-size: 15px;
  }
</style>

<!-- Material JS başlatma kodu -->
<script>
  // Menüleri başlat
  const menuButtons = document.querySelectorAll('.mdc-menu-button');
  menuButtons.forEach(button => {
    const menuElement = button.nextElementSibling;
    if (menuElement && menuElement.classList.contains('mdc-menu-surface')) {
      const menu = new mdc.menu.MDCMenu(menuElement);
      button.addEventListener('click', () => {
        menu.open = !menu.open;
      });
    }
  });

  // Sidebar toggle butonu varsa çalıştır
  const drawer = new mdc.drawer.MDCDrawer(document.querySelector('.mdc-drawer'));
  document.querySelector('.sidebar-toggler')?.addEventListener('click', () => {
    drawer.open = !drawer.open;
  });
</script>
