<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="index.html" class="brand-logo">
          <img src="assets/images/logo.svg" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
          <p class="name">Clyde Miles</p>
          <p class="email">clydemiles@elenor.us</p>
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="index.html">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>





            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="https://www.bootstrapdash.com/demo/material-admin-free/jquery/documentation/documentation.html" target="_blank">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
                iletisim
              </a>
            </div>
          </nav>
        </div>


      </div>
    </aside>
<style>
    /* Ana drawer arka planı */
.mdc-drawer {
  background-color: #6c5ce7 !important; /* Mor tonu */
  color: white;
  transition: all 0.3s ease;
}

/* Logo alanı */
.mdc-drawer__header {
  padding: 1rem;
  background-color: #3498db;
  text-align: center;
}

.mdc-drawer__header img {
  max-width: 120px;
  height: auto;
  transition: transform 0.3s ease;
}

.mdc-drawer__header img:hover {
  transform: rotate(5deg);
}

/* Kullanıcı bilgileri */
.user-info {
  padding: 1rem;
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  text-align: center;
}

.user-info .name {
  font-weight: bold;
  font-size: 1.1rem;
  color: #fff;
}

.user-info .email {
  font-size: 0.9rem;
  color: #dbeafe;
}

/* Menü bağlantıları */
.mdc-list-item,
.mdc-drawer-link {
  color: #ffffffcc !important;
  transition: background-color 0.3s ease, padding-left 0.3s ease;
}

.mdc-list-item:hover,
.mdc-drawer-link:hover {
  background-color: rgba(255, 255, 255, 0.1);
  padding-left: 20px;
  border-radius: 8px;
}

/* İkon rengi */
.material-icons.mdc-list-item__start-detail {
  color: #ffffffaa !important;
}

/* Alt menü veya genişletilebilir alan varsa */
.mdc-drawer-menu .mdc-list {
  background-color: transparent;
}

/* Link hover animasyonu */
.mdc-drawer-link {
  position: relative;
  overflow: hidden;
}

.mdc-drawer-link::after {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(120deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0.1) 100%);
  transition: left 0.5s ease;
  z-index: 0;
  pointer-events: none;
}

.mdc-drawer-link:hover::after {
  left: 100%;
}
</style>
