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
                                <div class="flex-container">
                                    <h3 class="mb-0">Etkinlik Katılımcıları</h3>
                                    <div class="mobile-hidden">
                                        <a href="{{ route('admin.participants.export') }}" class="button button-small button-success">
                                            <i class="fas fa-file-excel"></i> Excel
                                        </a>
                                    </div>
                                </div>
                                <div class="search-box">
                                    <form action="{{ route('admin.participants.index') }}" method="GET">
                                        <input type="text" name="search" placeholder="Katılımcı ara..." class="search-input" value="{{ request('search') }}">
                                        <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                                        <a href="{{ route('admin.participants.export') }}" class="button button-small button-success mobile-only-inline">
                                            <i class="fas fa-file-excel"></i>
                                        </a>
                                    </form>
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
                                                <th class="mobile-hidden">İşlemler</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($participants as $participant)
                                            <tr>
                                                <td>
                                                    <div class="user-info">
                                                        <div class="user-avatar">{{ substr($participant->full_name, 0, 2) }}</div>
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
                                                <td colspan="7" class="text-center">Henüz kayıtlı katılımcı bulunmamaktadır</td>
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
