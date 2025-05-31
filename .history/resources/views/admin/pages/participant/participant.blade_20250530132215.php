@extends('admin.layouts.app')
@section('title', 'Etkinlik Katılımcıları | Admin Paneli')

@section('content')
    <section id="main-content" class="column column-offset-20">
        <div class="row grid-responsive">
            <div class="column">
                <div class="row grid-responsive">
                    <div class="column">
                        {{-- Başarı mesajı --}}
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-title">
                                <div class="flex-container">
                                    <h3 class="mb-0">Etkinlik Katılımcıları</h3>
                                    <button class="mobile-search-toggle" id="mobileSearchToggle">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                <div class="search-box mobile-hidden" id="searchBox">
                                    <form action="{{ route('admin.participants.index') }}" method="GET">
                                        <input type="text" name="search" placeholder="Katılımcı ara..." class="search-input" value="{{ request('search') }}">
                                        <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <a href="{{ route('admin.participants.export') }}" class="button button-small button-success">
    <i class="fas fa-file-excel"></i> Excel İndir
</a>

                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="participant-table">
                                        <thead>
                                            <tr>
                                                <th width="15%" class="mobile-priority">Katılımcı</th>
                                                <th width="20%" class="mobile-hidden">E-Posta</th>
                                                <th width="12%" class="mobile-hidden">Telefon</th>
                                                <th width="8%" class="mobile-hidden">Yaş</th>
                                                <th width="10%" class="mobile-hidden">Cinsiyet</th>
                                                <th width="15%" class="mobile-hidden">Kayıt Tarihi</th>
                                                <th width="10%" class="mobile-hidden">IP Adresi</th>
                                                <th width="10%" class="mobile-priority">İşlemler</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($participants as $participant)
                                            <tr>
                                                <td class="mobile-priority">
                                                    <div class="user-info">
                                                        <div class="user-avatar">{{ substr($participant->full_name, 0, 2) }}</div>
                                                        <div class="user-details">
                                                            <strong>{{ $participant->full_name }}</strong>
                                                            <small>{{ $participant->created_at->diffForHumans() }}</small>
                                                            <div class="mobile-only">
                                                                <div class="mobile-detail">{{ $participant->email }}</div>
                                                                <div class="mobile-detail">{{ $participant->phone }}</div>
                                                                <div class="mobile-detail">{{ $participant->age }} yaş, {{ $participant->gender }}</div>
                                                                <div class="mobile-detail">IP: {{ $participant->ip_address }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="mobile-hidden">{{ $participant->email }}</td>
                                                <td class="mobile-hidden">{{ $participant->phone }}</td>
                                                <td class="mobile-hidden">{{ $participant->age }}</td>
                                                <td class="mobile-hidden">
                                                    @if($participant->gender == 'male')
                                                        Erkek
                                                    @elseif($participant->gender == 'female')
                                                        Kadın
                                                    @else
                                                        Diğer
                                                    @endif
                                                </td>
                                                <td class="mobile-hidden">{{ $participant->created_at->format('d.m.Y H:i') }}</td>
                                                <td class="mobile-hidden">{{ $participant->ip_address }}</td>
                                                <td class="mobile-priority">
                                                    <div class="action-buttons">
                                                        <a href="{{ route('admin.participants.show', $participant->id) }}" class="button button-small button-primary" title="Detay">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="mobile-only">Detay</span>
                                                        </a>
                                                        <form action="{{ route('admin.participants.destroy', $participant->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="button button-small button-danger mobile-hidden" title="Sil" onclick="return confirm('Katılımcıyı silmek istediğinize emin misiniz?')">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8" class="text-center">Henüz kayıtlı katılımcı bulunmamaktadır</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pagination-container">
                                    <div class="pagination-info mobile-hidden">
                                        Toplam {{ $participants->total() }} katılımcı, sayfa {{ $participants->currentPage() }}/{{ $participants->lastPage() }}
                                    </div>
                                    {{ $participants->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        @push('styles')
<style>
    /* Mobil Görünüm Ayarları */
    @media (max-width: 768px) {
        .participant-table {
            width: 100%;
            display: block;
            overflow-x: auto;
        }

        .mobile-hidden {
            display: none !important;
        }

        .mobile-priority {
            display: block;
            width: 100% !important;
            padding: 10px 5px;
        }

        .participant-table thead {
            display: none;
        }

        .participant-table tbody tr {
            display: block;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
        }

        .participant-table tbody td {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 5px;
            border: none;
            border-bottom: 1px solid #eee;
        }

        .participant-table tbody td:before {
            content: attr(data-label);
            font-weight: bold;
            margin-right: 10px;
            color: #333;
        }

        .user-info {
            flex-direction: column;
            align-items: flex-start;
        }

        .user-avatar {
            margin-bottom: 8px;
        }

        .action-buttons {
            justify-content: flex-end;
        }

        .mobile-only {
            display: block;
            margin-top: 8px;
        }

        .mobile-detail {
            display: block;
            margin: 3px 0;
            color: #666;
        }

        .card-title .flex-container {
            flex-direction: column;
            align-items: flex-start;
        }

        .search-box {
            width: 100%;
            margin-top: 10px;
        }

        .button.button-small {
            padding: 5px 8px;
            font-size: 12px;
        }
    }

    /* Genel Tablo Stilleri */
    .participant-table {
        width: 100%;
        border-collapse: collapse;
    }

    .participant-table th {
        background-color: #f8f9fa;
        padding: 12px 15px;
        text-align: left;
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
    }

    .participant-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #dee2e6;
        vertical-align: middle;
    }

    .user-info {
        display: flex;
        align-items: center;
    }

    .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #4e73df;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        font-weight: bold;
    }

    .user-details {
        display: flex;
        flex-direction: column;
    }

    .user-details small {
        color: #6c757d;
        font-size: 0.8rem;
    }

    .action-buttons {
        display: flex;
        gap: 5px;
    }

    .mobile-only {
        display: none;
    }

    /* Excel butonu için ek stil */
    .button.button-success {
        background-color: #28a745;
        color: white;
        border: none;
    }

    .button.button-success:hover {
        background-color: #218838;
    }
</style>
@endpush
    </style>
@endsection
