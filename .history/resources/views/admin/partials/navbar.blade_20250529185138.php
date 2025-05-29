<header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title">Admin Sayfasi!</span>

          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    {{-- <img src="assets/images/faces/face1.jpg" alt="user" class="user"> --}}
                  </span>
                  <span class="user-name">Hoşgeldin Admin</span>
                </span>
              </button>

            </div>
            <div class="divider d-none d-md-block"></div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-settings"></i>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-alert-circle-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Cıkıs Yap</h6>
                    </div>
                  </li>

                </ul>
              </div>
            </div>



          </div>
        </div>
      </header>
<style>
    /* Top App Bar */
.mdc-top-app-bar {
  background-color: #6c5ce7 !important; /* Mor renk */
  color: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Başlık ve menü yazısı */
.mdc-top-app-bar__title,
.mdc-top-app-bar__navigation-icon,
.mdc-button i.material-icons,
.mdc-button .user-name {
  color: white !important;
}

/* Menü butonları üzerine gelince */
.mdc-button.mdc-menu-button:hover {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 50%;
  transition: background-color 0.3s ease;
}

/* Kullanıcı profil kısmı */
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

.figure {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 8px;
}

.figure img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Menü açılır kutusu */
.mdc-menu-surface {
  background-color: #f8f9fa;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.mdc-list-item {
  transition: background-color 0.3s ease;
}

.mdc-list-item:hover {
  background-color: #e9ecef;
}

/* İkonlar */
.mdi {
  font-size: 20px;
  vertical-align: middle;
}
</style>
