@extends('admin.layouts.app')

@section('title', 'Mesajlar')

@section('content')
    <section id="main-content" class="column column-offset-20">
        <div class="row grid-responsive">
            <div class="column">
                <div class="card">
                    <div class="card-title">
                        <div class="flex-container">
                            <h3 class="mb-0">Gelen Mesajlar</h3>
                            <button class="mobile-search-toggle" id="mobileSearchToggle">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="search-box mobile-hidden" id="searchBox">
                            <form action="{{ route('admin.messages.index') }}" method="GET">
                                <input type="text" name="search" placeholder="Mesaj ara..." class="search-input" value="{{ request('search') }}">
                                <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="message-table">
                                <thead>
                                    <tr>
                                        <th width="15%" class="mobile-priority">Gönderen</th>
                                        <th width="20%" class="mobile-hidden">E-Posta</th>
                                        <th width="15%" class="mobile-hidden">Konu</th>
                                        <th width="35%" class="mobile-priority">Mesaj</th>
                                        <th width="15%" class="mobile-priority">İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($messages as $message)
                                    <tr class="{{ $message->is_read ? '' : 'unread' }}">
                                        <td class="mobile-priority">
                                            <div class="user-info">
                                                <div class="user-avatar">{{ substr($message->name, 0, 2) }}</div>
                                                <div class="user-details">
                                                    <strong>{{ $message->name }}</strong>
                                                    <small>{{ $message->created_at->diffForHumans() }}</small>
                                                    <div class="mobile-only">
                                                        <div class="mobile-detail">{{ $message->email }}</div>
                                                        <div class="mobile-detail">{{ $message->subject }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="mobile-hidden">{{ $message->email }}</td>
                                        <td class="mobile-hidden">{{ $message->subject }}</td>
                                        <td class="message-preview mobile-priority">{{ Str::limit($message->message, 50) }}</td>
                                        <td class="mobile-priority">
                                            <div class="action-buttons">
                                                <a href="{{ route('admin.messages.show', $message->id) }}" class="button button-small button-primary" title="Görüntüle">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="mobile-only">Görüntüle</span>
                                                </a>
                                                <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="button button-small button-danger mobile-hidden" title="Sil" onclick="return confirm('Mesajı silmek istediğinize emin misiniz?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Hiç mesaj bulunamadı</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="pagination-container">
                            <div class="pagination-info mobile-hidden">
                                Toplam {{ $messages->total() }} mesaj, sayfa {{ $messages->currentPage() }}/{{ $messages->lastPage() }}
                            </div>
                            {{ $messages->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

    <style>
        /* Temel Stiller */
        .flex-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .search-box {
            display: flex;
            width: 100%;
            margin-top: 10px;
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

        /* Mobil Uyumluluk */
        @media (max-width: 768px) {
            .mobile-hidden {
                display: none !important;
            }

            .mobile-only {
                display: block;
            }

            .mobile-priority {
                display: table-cell !important;
            }

            .action-text, .dropdown-item span {
                display: none;
            }

            .mobile-search-toggle {
                background: none;
                border: none;
                font-size: 16px;
                color: #6c757d;
                cursor: pointer;
                padding: 5px;
            }

            .mobile-detail {
                font-size: 12px;
                color: #6c757d;
                margin-top: 2px;
            }

            .message-table {
                display: block;
                overflow-x: auto;
            }

            .message-preview {
                white-space: normal;
                max-width: 150px;
            }

            .action-buttons .button-small {
                padding: 5px 8px;
            }

            .pagination-container {
                flex-direction: column;
                gap: 10px;
            }

            .pagination-info {
                text-align: center;
            }
        }

        @media (min-width: 769px) {
            .mobile-only {
                display: none !important;
            }

            .mobile-search-toggle {
                display: none !important;
            }

            .search-box.mobile-hidden {
                display: flex !important;
                width: 300px;
                margin-top: 0;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobil arama kutusu toggle
            const mobileSearchToggle = document.getElementById('mobileSearchToggle');
            const searchBox = document.getElementById('searchBox');

            if (mobileSearchToggle && searchBox) {
                mobileSearchToggle.addEventListener('click', function() {
                    searchBox.classList.toggle('mobile-hidden');
                });
            }
        });
    </script>
@endsection
