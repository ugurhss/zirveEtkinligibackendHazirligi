<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                <span class="menu-title">Gelen Mesajlar</span>
                <i class="menu-arrow mdi mdi-chevron-down"></i>
            </a>
            <div class="collapse" id="ui-basic" style="height: 0px;">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/buttons.html">İletişim</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="mdi mdi-table-large menu-icon"></i>
                <span class="menu-title">Katılım Yapacak Kullanıcılar</span>
                <i class="menu-arrow mdi mdi-chevron-down"></i>
            </a>
            <div class="collapse" id="tables" style="height: 0px;">
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
        background: #2c3e50 !important;
        width: 250px !important;
        min-height: auto !important;
        height: auto !important;
        overflow-y: visible !important;
        transition: none !important;
    }

    /* Nav item genel stil */
    .nav-item {
        margin: 0;
        transition: none;
    }

    /* Ana menü linkleri */
    .nav-link {
        color: #ffffff !important;
        padding: 12px 15px !important;
        display: flex;
        align-items: center;
        transition: none !important;
        border-radius: 0 !important;
        white-space: nowrap;
    }

    .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1) !important;
    }

    /* Aktif menü öğesi */
    .nav-link[aria-expanded="true"] {
        background-color: rgba(255, 255, 255, 0.15) !important;
    }

    /* Menü ikonları */
    .menu-icon {
        margin-right: 10px;
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.8);
        min-width: 24px;
    }

    /* Menü başlığı */
    .menu-title {
        flex-grow: 1;
        font-size: 0.9rem;
    }

    /* Açılır menü ok işareti */
    .menu-arrow {
        transition: transform 0.2s ease;
        font-size: 1.1rem;
    }

    .nav-link[aria-expanded="true"] .menu-arrow {
        transform: rotate(180deg);
    }

    /* Alt menü stil */
    .sub-menu {
        background-color: rgba(0, 0, 0, 0.2);
        padding: 0;
        transition: none !important;
    }

    .sub-menu .nav-item {
        border-left: 3px solid transparent;
    }

    .sub-menu .nav-item:hover {
        border-left-color: #3978e5;
    }

    .sub-menu .nav-link {
        padding: 10px 15px 10px 45px !important;
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.8) !important;
    }

    .sub-menu .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.05) !important;
    }

    /* Collapse animasyonunu kaldırma */
    .collapse {
        transition: none !important;
    }

    .collapse:not(.show) {
        display: none;
    }

    /* Mobile uyumluluk */
    @media (max-width: 991px) {
        .sidebar {
            position: fixed;
            z-index: 1000;
            height: 100vh !important;
            transform: translateX(-100%);
        }

        .sidebar.sidebar-offcanvas {
            transform: translateX(0);
        }
    }
</style>

<script>
// Tıklamada kaymayı önlemek için
document.querySelectorAll('.nav-link[data-bs-toggle="collapse"]').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target.style.display === 'none') {
            target.style.display = 'block';
            this.setAttribute('aria-expanded', 'true');
        } else {
            target.style.display = 'none';
            this.setAttribute('aria-expanded', 'false');
        }
    });
});
</script>
