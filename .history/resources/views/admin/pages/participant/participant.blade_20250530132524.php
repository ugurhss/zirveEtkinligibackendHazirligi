@extends('admin.layouts.app')
@section('title', 'Etkinlik Katılımcıları | Admin Paneli')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white border-bottom-0 py-3 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Etkinlik Katılımcıları</h4>
                        <div class="d-flex">
                            <form class="d-flex me-2" action="{{ route('admin.participants.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control form-control-sm" placeholder="Katılımcı ara..." value="{{ request('search') }}">
                                    <button class="btn btn-outline-secondary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <a href="{{ route('admin.participants.export') }}" class="btn btn-success btn-sm">
                                <i class="fas fa-file-excel me-1"></i> Excel
                            </a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Katılımcı</th>
                                        <th class="d-none d-md-table-cell">E-Posta</th>
                                        <th class="d-none d-lg-table-cell">Telefon</th>
                                        <th class="d-none d-sm-table-cell">Yaş</th>
                                        <th class="d-none d-lg-table-cell">Cinsiyet</th>
                                        <th class="d-none d-xl-table-cell">Kayıt Tarihi</th>
                                        <th class="d-none d-xl-table-cell">IP Adresi</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($participants as $participant)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar bg-primary text-white rounded-circle me-2 flex-shrink-0">
                                                    {{ substr($participant->full_name, 0, 2) }}
                                                </div>
                                                <div>
                                                    <strong>{{ $participant->full_name }}</strong>
                                                    <div class="text-muted small d-md-none">
                                                        {{ $participant->email }}<br>
                                                        {{ $participant->phone }}<br>
                                                        {{ $participant->age }} yaş, {{ $participant->gender == 'male' ? 'Erkek' : ($participant->gender == 'female' ? 'Kadın' : 'Diğer') }}<br>
                                                        IP: {{ $participant->ip_address }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell">{{ $participant->email }}</td>
                                        <td class="d-none d-lg-table-cell">{{ $participant->phone }}</td>
                                        <td class="d-none d-sm-table-cell">{{ $participant->age }}</td>
                                        <td class="d-none d-lg-table-cell">
                                            @if($participant->gender == 'male')
                                                <span class="badge bg-primary">Erkek</span>
                                            @elseif($participant->gender == 'female')
                                                <span class="badge bg-danger">Kadın</span>
                                            @else
                                                <span class="badge bg-secondary">Diğer</span>
                                            @endif
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <span class="text-nowrap">{{ $participant->created_at->format('d.m.Y H:i') }}</span>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <code>{{ $participant->ip_address }}</code>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <a href="{{ route('admin.participants.show', $participant->id) }}" class="btn btn-sm btn-primary" title="Detay">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="d-none d-sm-inline">Detay</span>
                                                </a>
                                                <form action="{{ route('admin.participants.destroy', $participant->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Sil" onclick="return confirm('Katılımcıyı silmek istediğinize emin misiniz?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                        <span class="d-none d-sm-inline">Sil</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-4">Henüz kayıtlı katılımcı bulunmamaktadır</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer bg-white border-top-0">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                            <div class="mb-2 mb-md-0">
                                Toplam <strong>{{ $participants->total() }}</strong> katılımcı
                            </div>
                            <div>
                                {{ $participants->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
