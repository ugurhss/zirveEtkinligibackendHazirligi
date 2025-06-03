@extends('admin.layouts.app')

@section('title', 'ANASAYFA SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ 2025 | BURSA')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center text-primary fw-bold">Abone Listesi</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow rounded">
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">E-posta</th>
                        <th scope="col">Onay Durumu</th>
                        <th scope="col">Kayıt Tarihi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($aboneler as $abone)
                        <tr>
                            <td>{{ $abone->id }}</td>
                            <td>{{ $abone->email }}</td>
                            <td>
                                @if($abone->approved)
                                    <span class="badge bg-success">Evet</span>
                                @else
                                    <span class="badge bg-danger">Hayır</span>
                                @endif
                            </td>
                            <td>{{ $abone->created_at->format('d.m.Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted">Henüz abone yok.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
