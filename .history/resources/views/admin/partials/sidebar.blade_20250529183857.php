<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open animated-drawer" style="background-color: #6a1b9a; color: white;">
      <div class="mdc-drawer__header animated-header" style="background-color: #4527a0; border-bottom: 1px solid #7c4dff;">
        <a href="index.html" class="brand-logo">
          <img src="{{ asset('assets/images/Birlik_Vakfi_Bursa_Subesi_Logo.svg') }}" alt="logo" class="animated-logo" style="filter: brightness(0) invert(1);">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info animated-user-info" style="border-bottom: 1px solid #7c4dff;">
          <p class="name pulse-animation" style="color: white;">Clyde Miles</p>
          <p class="email" style="color: #b39ddb;">clydemiles@elenor.us</p>
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item hover-animate" style="color: white;">
              <a class="mdc-drawer-link" href="index.html" style="color: white;">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon icon-animate" aria-hidden="true" style="color: #7c4dff;">home</i>
                Dashboard
              </a>
            </div>

            <div class="mdc-list-item mdc-drawer-item hover-animate">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sample-page-submenu" style="color: white;">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon icon-animate" aria-hidden="true" style="color: #7c4dff;">Mesajlar</i>
                Tüm Mesajlar
                <i class="mdc-drawer-arrow material-icons arrow-animate" style="color: #b39ddb;">chevron_right</i>
              </a>
            </div>

          </nav>
        </div>
    </aside>

<style>
  /* Animasyon tanımları */
  @keyframes fadeIn {
    from { opacity: 0; transform: translateX(-20px); }
    to { opacity: 1; transform: translateX(0); }
  }

  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }

  @keyframes colorWave {
    0% { background-color: #6a1b9a; }
    50% { background-color: #4527a0; }
    100% { background-color: #2196f3; }
  }

  @keyframes iconBounce {
    0%, 100% { transform: translateY(0); color: #7c4dff; }
    50% { transform: translateY(-3px); color: #2196f3; }
  }

  @keyframes arrowSpin {
    to { transform: rotate(90deg); color: white; }
  }

  /* Animasyon uygulamaları */
  .animated-drawer {
    animation: fadeIn 0.5s ease-out;
    transition: background-color 0.5s ease;
  }

  .animated-drawer:hover {
    animation: colorWave 8s infinite alternate;
  }

  .animated-header {
    animation: fadeIn 0.7s ease-out;
  }

  .animated-logo {
    transition: transform 0.3s ease;
  }

  .animated-logo:hover {
    transform: rotate(360deg) scale(1.1);
  }

  .animated-user-info {
    animation: fadeIn 0.9s ease-out;
  }

  .pulse-animation {
    animation: pulse 2s infinite;
  }

  .hover-animate:hover {
    background-color: rgba(255, 255, 255, 0.1);
    transform: translateX(5px);
    transition: all 0.3s ease;
  }

  .icon-animate {
    transition: all 0.3s ease;
  }

  .hover-animate:hover .icon-animate {
    animation: iconBounce 0.5s;
  }

  .arrow-animate {
    transition: all 0.3s ease;
  }

  .mdc-list-item:hover .arrow-animate {
    animation: arrowSpin 0.3s forwards;
  }

  /* Ek renk efektleri */
  .mdc-drawer-item:hover {
    background: linear-gradient(90deg, rgba(106,27,154,0.5) 0%, rgba(33,150,243,0.5) 100%);
  }

  .mdc-drawer-link:hover {
    text-shadow: 0 0 5px white;
  }
</style>
