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
                        <a class="nav-link" href="pages/ui-features/buttons.html">İletişim</a>
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
        background: linear-gradient(135deg, #2c3e50 0%, #3978e5 100%) !important;
        border-radius: 0 15px 15px 0;
        box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        overflow: hidden;
    }

    /* Nav item genel stil */
    .nav-item {
        margin: 5px 10px;
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    /* Ana menü linkleri */
    .nav-link {
        color: #ffffff !important;
        padding: 12px 20px !important;
        border-radius: 8px !important;
        display: flex;
        align-items: center;
        transition: all 0.2s ease;
    }

    .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.15) !important;
        transform: translateX(5px);
    }

    /* Aktif menü öğesi */
    .nav-link.active {
        background-color: rgba(255, 255, 255, 0.2) !important;
        font-weight: 500;
    }

    /* Menü ikonları */
    .menu-icon {
        margin-right: 10px;
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.8);
    }

    /* Menü başlığı */
    .menu-title {
        flex-grow: 1;
        font-size: 0.95rem;
    }

    /* Açılır menü ok işareti */
    .menu-arrow {
        transition: transform 0.3s ease;
    }

    .nav-link[aria-expanded="true"] .menu-arrow {
        transform: rotate(90deg);
    }

    /* Alt menü stil */
    .sub-menu {
        background-color: rgba(0, 0, 0, 0.15);
        border-radius: 0 0 8px 8px;
        padding: 5px 0;
        margin-top: 2px;
    }

    .sub-menu .nav-link {
        padding: 8px 20px 8px 40px !important;
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.8) !important;
    }

    .sub-menu .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1) !important;
        transform: none;
        padding-left: 45px !important;
    }

    /* Mobile uyumluluk */
    @media (max-width: 991px) {
        .sidebar {
            width: 250px;
            transform: translateX(-100%);
            position: fixed;
            z-index: 1000;
            height: 100vh;
            transition: transform 0.3s ease;
        }

        .sidebar.sidebar-offcanvas {
            transform: translateX(0);
        }

        .nav-item {
            margin: 3px 8px;
        }

        .nav-link {
            padding: 10px 15px !important;
        }

        .sub-menu .nav-link {
            padding: 6px 15px 6px 35px !important;
        }
    }

    @media (max-width: 576px) {
        .sidebar {
            width: 220px;
        }

        .menu-title {
            font-size: 0.85rem;
        }

        .menu-icon {
            font-size: 1rem;
            margin-right: 8px;
        }

        .nav-link {
            padding: 8px 12px !important;
        }
    }
</style>
