@extends('admin.layouts.app')

@section('title', 'ANASAYFA SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ 2025 | BURSA')

@section('content')
    <section id="main-content" class="column column-offset-20">
        <div class="row grid-responsive">
            <div class="column">
                <div class="card">
                    <div class="card-title">
                        <div class="flex-container">
                            <h3 class="mb-0">Gelen Mesajlar</h3>
                            <div class="search-box">
                                <input type="text" placeholder="Mesaj ara..." class="search-input">
                                <button class="search-button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="button button-outline" id="filterBtn">
                                <i class="fas fa-filter"></i> Filtrele
                            </button>
                            <div class="dropdown">
                                <button class="button button-outline dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-file-export"></i> Dışa Aktar</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i> Yazdır</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="message-table">
                                <thead>
                                    <tr>
                                        <th width="15%">Gönderen</th>
                                        <th width="20%">E-Posta</th>
                                        <th width="15%">Konu</th>
                                        <th width="35%">Mesaj</th>
                                        <th width="15%">İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="unread">
                                        <td>
                                            <div class="user-info">

                                                <div class="user-details">
                                                    <strong>Jane Donovan</strong>
                                                    <small>2 saat önce</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>jane.d@example.com</td>
                                        <td>Sponsorluk Teklifi</td>
                                        <td class="message-preview">Merhaba, zirveniz için sponsorluk teklifimiz var. Detayları konuşabilir miyiz?..</td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="button button-small button-primary" title="Görüntüle">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="button button-small button-danger" title="Sil">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                <button class="button button-small button-success" title="Arşivle">
                                                    <i class="fas fa-archive"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="user-info">

                                                <div class="user-details">
                                                    <strong>Jonathan Smith</strong>
                                                    <small>1 gün önce</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>jonathan@design.com</td>
                                        <td>Katılım Sorusu</td>
                                        <td class="message-preview">Zirveye katılmak istiyorum, kayıt süreci hakkında bilgi alabilir miyim?</td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="button button-small button-primary" title="Görüntüle">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="button button-small button-danger" title="Sil">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                <button class="button button-small button-success" title="Arşivle">
                                                    <i class="fas fa-archive"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td>
                                            <div class="user-info">
                                                <div class="user-avatar">KJ</div>
                                                <div class="user-details">
                                                    <strong>Kelly Johnson</strong>
                                                    <small>3 gün önce</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>kelly.j@uxdev.com</td>
                                        <td>Konuşmacı Önerisi</td>
                                        <td class="message-preview">Sürdürülebilirlik konusunda uzman bir konuşmacı önermek istiyorum...</td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="button button-small button-primary" title="Görüntüle">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="button button-small button-danger" title="Sil">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                <button class="button button-small button-success" title="Arşivle">
                                                    <i class="fas fa-archive"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="user-info">
                                                <div class="user-avatar">SD</div>
                                                <div class="user-details">
                                                    <strong>Sam Davidson</strong>
                                                    <small>1 hafta önce</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>sam.d@programmer.net</td>
                                        <td>Teknik Destek</td>
                                        <td class="message-preview">Web sitenizde kayıt formuyla ilgili bir sorun yaşıyorum, yardımcı olabilir misiniz?</td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="button button-small button-primary" title="Görüntüle">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="button button-small button-danger" title="Sil">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                <button class="button button-small button-success" title="Arşivle">
                                                    <i class="fas fa-archive"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="pagination-container">
                            <div class="pagination-info">
                                Toplam 124 mesaj, sayfa 1/13
                            </div>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .flex-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .search-box {
            display: flex;
            width: 300px;
        }

        .search-input {
            flex: 1;
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
            font-size: 14px;
        }

        .search-button {
            background: #f8f9fa;
            border: 1px solid #ddd;
            border-left: none;
            border-radius: 0 4px 4px 0;
            padding: 0 12px;
            cursor: pointer;
        }

        .card-actions {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .message-table {
            width: 100%;
            border-collapse: collapse;
        }

        .message-table th {
            background-color: #f8f9fa;
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
            color: #495057;
            border-bottom: 2px solid #dee2e6;
        }

        .message-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #dee2e6;
            vertical-align: middle;
        }

        .message-table tr:hover {
            background-color: #f8f9fa;
        }

        .message-table tr.unread {
            background-color: #f0f7ff;
            font-weight: 500;
        }

        .message-table tr.unread:hover {
            background-color: #e6f2ff;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #4e73df;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .user-details {
            display: flex;
            flex-direction: column;
        }

        .user-details small {
            color: #6c757d;
            font-size: 12px;
        }

        .message-preview {
            color: #6c757d;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 0;
        }

        .action-buttons {
            display: flex;
            gap: 5px;
        }

        .button-small {
            padding: 5px 10px;
            font-size: 12px;
        }

        .pagination-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            gap: 5px;
        }

        .page-item {
            margin: 0;
        }

        .page-link {
            display: block;
            padding: 8px 12px;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            color: #4e73df;
            text-decoration: none;
        }

        .page-item.active .page-link {
            background-color: #4e73df;
            color: white;
            border-color: #4e73df;
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            z-index: 1;
            border-radius: 4px;
            padding: 5px 0;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-item {
            display: block;
            padding: 8px 16px;
            color: #212529;
            text-decoration: none;
            font-size: 14px;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        .dropdown-item i {
            margin-right: 8px;
            width: 16px;
            text-align: center;
        }
    </style>
@endsection
