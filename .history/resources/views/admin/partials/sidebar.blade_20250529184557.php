<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="index.html" class="brand-logo">
          <img src="{{ asset('assets/images/Birlik_Vakfi_Bursa_Subesi_Logo.svg') }}" alt="logo">
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
  /* Genel renk paleti */
  :root {
    --mor: #6a1b9a;
    --mor-acik: #9c27b0;
    --mavi: #1976d2;
    --mavi-acik: #2196f3;
    --beyaz: #ffffff;
    --arkaplan: #f5f5f5;
  }

  /* Drawer stil */
  .mdc-drawer {
    background: linear-gradient(135deg, var(--mor), var(--mavi));
    color: var(--beyaz);
    transition: all 0.3s ease-in-out;
  }

  .mdc-drawer__header {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 20px 16px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    transition: background-color 0.3s ease;
  }

  .mdc-drawer__header:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }

  .brand-logo img {
    filter: brightness(0) invert(1);
    transition: transform 0.3s ease;
  }

  .brand-logo:hover img {
    transform: scale(1.1);
  }

  /* Kullanıcı bilgi alanı */
  .user-info {
    padding: 20px 16px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  }

  .user-info .name {
    font-size: 1.1rem;
    font-weight: 500;
    margin-bottom: 4px;
    color: var(--beyaz);
  }

  .user-info .email {
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.8);
  }

  /* Menü öğeleri */
  .mdc-list-item {
    transition: all 0.3s ease;
  }

  .mdc-drawer-item {
    color: rgba(255, 255, 255, 0.8);
  }

  .mdc-drawer-item:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: var(--beyaz);
  }

  .mdc-drawer-item.mdc-list-item--activated {
    color: var(--beyaz);
    background-color: rgba(255, 255, 255, 0.2);
  }

  .mdc-drawer-link {
    color: inherit;
    text-decoration: none;
    display: flex;
    align-items: center;
    width: 100%;
  }

  .mdc-drawer-item-icon {
    color: var(--beyaz);
    margin-right: 12px;
    transition: transform 0.3s ease;
  }

  .mdc-list-item:hover .mdc-drawer-item-icon {
    transform: scale(1.2);
    color: var(--beyaz);
  }

  /* Animasyonlar */
  @keyframes fadeIn {
    from { opacity: 0; transform: translateX(-10px); }
    to { opacity: 1; transform: translateX(0); }
  }

  .mdc-list-item {
    animation: fadeIn 0.3s ease forwards;
    opacity: 0;
  }

  .mdc-list-item:nth-child(1) { animation-delay: 0.1s; }
  .mdc-list-item:nth-child(2) { animation-delay: 0.2s; }
  .mdc-list-item:nth-child(3) { animation-delay: 0.3s; }
  .mdc-list-item:nth-child(4) { animation-delay: 0.4s; }
  .mdc-list-item:nth-child(5) { animation-delay: 0.5s; }
</style>
