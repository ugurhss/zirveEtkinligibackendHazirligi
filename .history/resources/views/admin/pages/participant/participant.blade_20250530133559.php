@extends('admin.layouts.app')
@section('title', 'Etkinlik Katılımcıları | Admin Paneli')

@section('content')
    <section id="main-content" class="column column-offset-20">
        <div class="row grid-responsive">
            <div class="column">
                <div class="row grid-responsive">
                    <div class="column">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-title">
                              <div class="flex-container align-center justify-space-between" style="display: flex; align-items: center; justify-content: space-between; gap: 15px; margin-bottom: 20px;">
    <h3 class="mb-0" style="margin: 0;">Etkinlik Katılımcıları</h3>

    <div class="action-group" style="display: flex; gap: 10px; align-items: center;">
        <div class="search-box" style="position: relative; min-width: 200px;">
            <form action="{{ route('admin.participants.index') }}" method="GET" style="display: flex;">
                <input
                    type="text"
                    name="search"
                    placeholder="İsim, email veya telefon ara..."
                    class="search-input"
                    value="{{ request('search') }}"
                    style="padding: 8px 15px; border: 1px solid #ddd; border-radius: 4px 0 0 4px; flex-grow: 1; min-width: 150px;"
                >
                <button
                    type="submit"
                    class="search-button"
                    style="background: #4CAF50; color: white; border: none; padding: 8px 15px; border-radius: 0 4px 4px 0; cursor: pointer;"
                >
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        <a
            href="{{ route('admin.participants.export') }}"
            class="button-excel"
            style="background: #2e7d32; color: white; padding: 8px 15px; border-radius: 4px; text-decoration: none; display: flex; align-items: center; gap: 5px; white-space: nowrap;"
        >
            <i class="fas fa-file-excel" style="font-size: 1.1em;"></i>
            <span class="desktop-text" style="display: inline;">Excel İndir</span>
            <span class="mobile-text" style="display: none;">Excel</span>
        </a>
    </div>
</div>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="participant-table">
                                        <thead>
                                            <tr>
                                                <th>Katılımcı</th>
                                                <th class="mobile-hidden">E-Posta</th>
                                                <th class="mobile-hidden">Telefon</th>
                                                <th class="mobile-hidden">Yaş</th>
                                                <th class="mobile-hidden">Cinsiyet</th>
                                                <th class="mobile-hidden">Kayıt Tarihi</th>
                                                <th class="mobile-hidden">IP Adresi</th>
                                                <th>İşlemler</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($participants as $participant)
                                            <tr>
                                                <td>
                                                    <div class="user-info">
                                                        {{-- <div class="user-avatar">{{ substr($participant->full_name, 0, 2) }}</div> --}}
                                                        <div class="user-details">
                                                            <strong>{{ $participant->full_name }}</strong>
                                                            <div class="mobile-only">
                                                                <div><i class="fas fa-envelope"></i> {{ $participant->email }}</div>
                                                                <div><i class="fas fa-phone"></i> {{ $participant->phone }}</div>
                                                                <div><i class="fas fa-user"></i> {{ $participant->age }} yaş</div>
                                                                <div>
                                                                    @if($participant->gender == 'male')
                                                                        <i class="fas fa-male"></i> Erkek
                                                                    @elseif($participant->gender == 'female')
                                                                        <i class="fas fa-female"></i> Kadın
                                                                    @else
                                                                        <i class="fas fa-user"></i> Diğer
                                                                    @endif
                                                                </div>
                                                                <div><i class="fas fa-network-wired"></i> {{ $participant->ip_address }}</div>
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
                                                <td>
                                                    <div class="action-buttons">
                                                        <a href="{{ route('admin.participants.show', $participant->id) }}" class="button button-small button-primary" title="Detay">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="mobile-hidden">Detay</span>
                                                        </a>
                                                        <form action="{{ route('admin.participants.destroy', $participant->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="button button-small button-danger" title="Sil" onclick="return confirm('Katılımcıyı silmek istediğinize emin misiniz?')">
                                                                <i class="fas fa-trash"></i>
                                                                <span class="mobile-hidden">Sil</span>
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
                                        Toplam {{ $participants->total() }} katılımcı
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
@endsection
<style>
    .search-input:focus {
        outline: none;
        border-color: #4CAF50;
    }

    .search-button:hover {
        background: #3e8e41 !important;
    }

    .button-excel:hover {
        background: #1b5e20 !important;
    }

    @media (max-width: 768px) {
        .flex-container {
            flex-direction: column;
            align-items: stretch;
            gap: 10px;
        }

        .action-group {
            width: 100%;
        }

        .search-box {
            flex-grow: 1;
        }

        .desktop-text {
            display: none !important;
        }

        .mobile-text {
            display: inline !important;
        }
    }
</style>
