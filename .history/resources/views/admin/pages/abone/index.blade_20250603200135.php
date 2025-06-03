@extends('admin.layouts.app')

@section('title', 'ANASAYFA SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ 2025 | BURSA')

@section('content')
<h1>Aboneler</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>E-posta</th>
                <th>Onay</th>
                <th>Kayıt Tarihi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aboneler as $abone)
                <tr>
                    <td>{{ $abone->id }}</td>
                    <td>{{ $abone->email }}</td>
                    <td>{{ $abone->approved ? 'Evet' : 'Hayır' }}</td>
                    <td>{{ $abone->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
