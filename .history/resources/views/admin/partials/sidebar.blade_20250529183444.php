
  <style>
    :root {
      --primary-color: #6a1b9a;
      --secondary-color: #4527a0;
      --accent-color: #7c4dff;
      --light-accent: #b39ddb;
      --text-color: #ffffff;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    body {
      font-family: 'Roboto', sans-serif;
      display: flex;
      min-height: 100vh;
    }

    .mdc-drawer {
      width: 280px;
      background-color: var(--primary-color);
      color: var(--text-color);
      position: relative;
      height: 100vh;
      overflow-y: auto;
      box-shadow: 2px 0 10px rgba(0,0,0,0.1);
      transform: translateX(0);
      z-index: 1000;
    }

    .mdc-drawer__header {
      background-color: var(--secondary-color);
      padding: 20px;
      border-bottom: 1px solid var(--accent-color);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .brand-logo img {
      height: 40px;
      filter: brightness(0) invert(1);
    }

    .user-info {
      padding: 20px;
      border-bottom: 1px solid var(--accent-color);
    }

    .user-info .name {
      font-weight: 500;
      margin-bottom: 5px;
    }

    .user-info .email {
      color: var(--light-accent);
      font-size: 0.8rem;
    }

    .mdc-list-item {
      padding: 12px 20px;
      cursor: pointer;
    }

    .mdc-list-item:hover {
      background-color: rgba(255,255,255,0.1);
    }

    .mdc-drawer-link {
      color: var(--text-color);
      text-decoration: none;
      display: flex;
      align-items: center;
    }

    .mdc-drawer-item-icon {
      margin-right: 15px;
      color: var(--accent-color);
    }

    .mdc-expansion-panel-link {
      color: var(--text-color);
      text-decoration: none;
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }

    .mdc-expansion-panel {
      max-height: 0;
      overflow: hidden;
      background-color: var(--secondary-color);
      transition: max-height 0.3s ease-out;
    }

    .mdc-expansion-panel.open {
      max-height: 500px;
    }

    .mdc-drawer-submenu .mdc-list-item {
      padding-left: 55px;
    }

    .profile-actions {
      display: flex;
      justify-content: center;
      padding: 15px;
      border-top: 1px solid var(--accent-color);
    }

    .profile-actions a {
      color: var(--light-accent);
      text-decoration: none;
      font-size: 0.9rem;
      padding: 0 10px;
    }

    .profile-actions a:hover {
      color: var(--text-color);
    }

    .divider {
      width: 1px;
      background-color: var(--accent-color);
      margin: 0 5px;
    }

    .premium-card {
      margin: 20px;
      padding: 15px;
      background-color: var(--secondary-color);
      border-radius: 8px;
      color: var(--text-color);
    }

    .icon-card {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background-color: var(--accent-color);
    }

    .icon-card i {
      color: var(--text-color);
    }

    .mdc-button--white {
      background-color: white !important;
      color: var(--secondary-color) !important;
      width: 100%;
      margin-top: 10px;
    }

    .mdc-drawer-arrow {
      transform: rotate(0deg);
      transition: transform 0.3s ease;
    }

    .mdc-drawer-arrow.rotate {
      transform: rotate(90deg);
    }

    /* Mobile Styles */
    .menu-toggle {
      display: none;
      position: fixed;
      top: 15px;
      left: 15px;
      z-index: 1001;
      background: var(--accent-color);
      color: white;
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      font-size: 20px;
      cursor: pointer;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    @media (max-width: 768px) {
      .mdc-drawer {
        position: fixed;
        transform: translateX(-100%);
      }

      .mdc-drawer.open {
        transform: translateX(0);
        box-shadow: 2px 0 15px rgba(0,0,0,0.3);
      }

      .menu-toggle {
        display: flex;
        align-items: center;
        justify-content: center;
      }

      body.drawer-open {
        overflow: hidden;
      }
    }

    /* Animations */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
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
    .mdc-list-item:nth-child(6) { animation-delay: 0.6s; }
    .mdc-list-item:nth-child(7) { animation-delay: 0.7s; }
  </style>
</head>
<body>
  <button class="menu-toggle" id="menuToggle">
    <i class="material-icons">menu</i>
  </button>

  <aside class="mdc-drawer" id="sidebar">
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
            <a class="mdc-drawer-link" href="pages/forms/basic-forms.html">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
              Forms
            </a>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-expansion-panel-link" href="#" data-target="ui-sub-menu">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
              UI Features
              <i class="mdc-drawer-arrow material-icons">chevron_right</i>
            </a>
            <div class="mdc-expansion-panel" id="ui-sub-menu">
              <nav class="mdc-list mdc-drawer-submenu">
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/ui-features/buttons.html">
                    Buttons
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/ui-features/typography.html">
                    Typography
                  </a>
                </div>
              </nav>
            </div>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="pages/tables/basic-tables.html">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
              Tables
            </a>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="pages/charts/chartjs.html">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>
              Charts
            </a>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-expansion-panel-link" href="#" data-target="sample-page-submenu">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
              Sample Pages
              <i class="mdc-drawer-arrow material-icons">chevron_right</i>
            </a>
            <div class="mdc-expansion-panel" id="sample-page-submenu">
              <nav class="mdc-list mdc-drawer-submenu">
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/blank-page.html">
                    Blank Page
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/403.html">
                    403
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/404.html">
                    404
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/500.html">
                    500
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/505.html">
                    505
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/login.html">
                    Login
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/register.html">
                    Register
                  </a>
                </div>
              </nav>
            </div>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="https://www.bootstrapdash.com/demo/material-admin-free/jquery/documentation/documentation.html" target="_blank">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
              Documentation
            </a>
          </div>
        </nav>
      </div>
      <div class="profile-actions">
        <a href="javascript:;">Settings</a>
        <span class="divider"></span>
        <a href="javascript:;">Logout</a>
      </div>
      <div class="mdc-card premium-card">
        <div class="d-flex align-items-center">
          <div class="mdc-card icon-card box-shadow-0">
            <i class="mdi mdi-shield-outline"></i>
          </div>
          <div>
            <p class="mt-0 mb-1 ml-2 font-weight-bold tx-12">Material Dash</p>
            <p class="mt-0 mb-0 ml-2 tx-10">Pro available</p>
          </div>
        </div>
        <p class="tx-8 mt-3 mb-1">More elements. More Pages.</p>
        <p class="tx-8 mb-3">Starting from $25.</p>
        <a href="https://www.bootstrapdash.com/product/material-design-admin-template/" target="_blank">
          <span class="mdc-button mdc-button--raised mdc-button--white">Upgrade to Pro</span>
        </a>
      </div>
    </div>
  </aside>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Mobile menu toggle
      const menuToggle = document.getElementById('menuToggle');
      const sidebar = document.getElementById('sidebar');
      const body = document.body;

      menuToggle.addEventListener('click', function() {
        sidebar.classList.toggle('open');
        body.classList.toggle('drawer-open');
      });

      // Expansion panels
      const expansionLinks = document.querySelectorAll('.mdc-expansion-panel-link');

      expansionLinks.forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const targetId = this.getAttribute('data-target');
          const targetPanel = document.getElementById(targetId);
          const arrow = this.querySelector('.mdc-drawer-arrow');

          targetPanel.classList.toggle('open');
          arrow.classList.toggle('rotate');
        });
      });

      // Close sidebar when clicking outside on mobile
      document.addEventListener('click', function(e) {
        if (window.innerWidth <= 768 && !sidebar.contains(e.target) && e.target !== menuToggle) {
          sidebar.classList.remove('open');
          body.classList.remove('drawer-open');
        }
      });

      // Smooth scroll for sidebar
      sidebar.addEventListener('scroll', function() {
        this.style.scrollBehavior = 'smooth';
      });
    });
  </script>
