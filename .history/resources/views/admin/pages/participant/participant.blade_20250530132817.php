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
                            <div class="alert success">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card modern-card">
                            <div class="card-title modern-card-header">
                                <div class="flex-container">
                                    <h3 class="mb-0">Etkinlik Katılımcıları</h3>
                                    <div class="header-actions">
                                        <div class="search-box" id="searchBox">
                                            <form action="{{ route('admin.participants.index') }}" method="GET">
                                                <input type="text" name="search" placeholder="Katılımcı ara..." class="modern-input" value="{{ request('search') }}">
                                                <button type="submit" class="modern-search-button">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <a href="{{ route('admin.participants.export') }}" class="modern-button success">
                                            <i class="fas fa-file-excel"></i> Excel İndir
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-block modern-card-body">
                                <div class="table-responsive modern-table-container">
                                    <table class="modern-table">
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
                                            <tr class="modern-table-row">
                                                <td class="mobile-priority">
                                                    <div class="modern-user-info">
                                                        <div class="modern-user-avatar">{{ substr($participant->full_name, 0, 2) }}</div>
                                                        <div class="modern-user-details">
                                                            <strong>{{ $participant->full_name }}</strong>
                                                            <small>{{ $participant->created_at->diffForHumans() }}</small>
                                                            <div class="mobile-only modern-mobile-details">
                                                                <div><i class="fas fa-envelope"></i> {{ $participant->email }}</div>
                                                                <div><i class="fas fa-phone"></i> {{ $participant->phone }}</div>
                                                                <div><i class="fas fa-user"></i> {{ $participant->age }} yaş,
                                                                @if($participant->gender == 'male') Erkek
                                                                @elseif($participant->gender == 'female') Kadın
                                                                @else Diğer @endif</div>
                                                                <div><i class="fas fa-network-wired"></i> {{ $participant->ip_address }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="mobile-hidden"><a href="mailto:{{ $participant->email }}" class="modern-link">{{ $participant->email }}</a></td>
                                                <td class="mobile-hidden">{{ $participant->phone }}</td>
                                                <td class="mobile-hidden modern-age-cell">{{ $participant->age }}</td>
                                                <td class="mobile-hidden">
                                                    <span class="modern-gender-badge @if($participant->gender == 'male') male @elseif($participant->gender == 'female') female @else other @endif">
                                                        @if($participant->gender == 'male')
                                                            Erkek
                                                        @elseif($participant->gender == 'female')
                                                            Kadın
                                                        @else
                                                            Diğer
                                                        @endif
                                                    </span>
                                                </td>
                                                <td class="mobile-hidden modern-date-cell">{{ $participant->created_at->format('d.m.Y H:i') }}</td>
                                                <td class="mobile-hidden modern-ip-cell">{{ $participant->ip_address }}</td>
                                                <td class="mobile-priority">
                                                    <div class="modern-action-buttons">
                                                        <a href="{{ route('admin.participants.show', $participant->id) }}" class="modern-button primary" title="Detay">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="mobile-only">Detay</span>
                                                        </a>
                                                        <form action="{{ route('admin.participants.destroy', $participant->id) }}" method="POST" class="modern-inline-form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="modern-button danger" title="Sil" onclick="return confirm('Katılımcıyı silmek istediğinize emin misiniz?')">
                                                                <i class="fas fa-trash"></i>
                                                                <span class="mobile-only">Sil</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8" class="modern-empty-state">
                                                    <i class="fas fa-users-slash"></i>
                                                    Henüz kayıtlı katılımcı bulunmamaktadır
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                                <div class="modern-pagination">
                                    <div class="pagination-info">
                                        Toplam <strong>{{ $participants->total() }}</strong> katılımcı
                                    </div>
                                    <div class="pagination-links">
                                        {{ $participants->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
