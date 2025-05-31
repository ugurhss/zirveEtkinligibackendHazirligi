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
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="participant-table">
                                        <thead>
                                            <tr>
                                                <th width="20%" class="mobile-priority">Katılımcı</th>
                                                <th width="20%" class="mobile-hidden">E-Posta</th>
                                                <th width="15%" class="mobile-hidden">Telefon</th>
                                                <th width="10%" class="mobile-hidden">Yaş</th>
                                                <th width="15%" class="mobile-hidden">Cinsiyet</th>
                                                <th width="15%" class="mobile-hidden">Kayıt Tarihi</th>
                                                <th width="15%" class="mobile-priority">İşlemler</th>
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
                                                <td colspan="7" class="text-center">Henüz kayıtlı katılımcı bulunmamaktadır</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pagination-container">
                                    <div class="pagination-info mobile-hidden">
                                        Toplam {{ $participants->total() }} katılımcı, sayfa {{ $participants->currentPage() }}/{{ $participants->lastPage() }}
                                    </div>
                                    {{-- {{ $participants->links('vendor.pagination.custom') }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




