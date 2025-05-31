@extends('admin.layouts.app')
@section('title', 'Etkinlik Katılımcıları | Admin Paneli')

@section('content')
    <section id="main-content" style="margin: 20px; font-family: sans-serif;">
        <div class="container" style="max-width: 1200px; margin: auto;">
            @if(session('success'))
                <div style="padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif

            <h2 style="margin-bottom: 20px;">Etkinlik Katılımcıları</h2>

            <!-- Arama Formu -->
            <form action="{{ route('admin.participants.index') }}" method="GET" style="margin-bottom: 20px;">
                <input type="text" name="search" placeholder="Katılımcı ara..." value="{{ request('search') }}"
                       style="padding: 8px; width: 250px; border: 1px solid #ccc; border-radius: 4px;">
                <button type="submit" style="padding: 8px 12px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">
                    Ara
                </button>
            </form>

            <!-- Excel İndirme Butonu -->
            <a href="{{ route('admin.participants.export') }}" style="display: inline-block; margin-bottom: 20px;
                      padding: 10px 15px; background-color: #28a745; color: white; text-decoration: none; border-radius: 4px;">
                <i class="fas fa-file-excel"></i> Excel İndir
            </a>

            <!-- Tablo -->
            <table style="width: 100%; border-collapse: collapse; box-shadow: 0 0 5px rgba(0,0,0,0.1);">
                <thead>
                <tr style="background-color: #f8f9fa;">
                    <th style="padding: 12px; border-bottom: 2px solid #dee2e6; text-align: left;">Ad Soyad</th>
                    <th style="padding: 12px; border-bottom: 2px solid #dee2e6; text-align: left;">E-Posta</th>
                    <th style="padding: 12px; border-bottom: 2px solid #dee2e6; text-align: left;">Telefon</th>
                    <th style="padding: 12px; border-bottom: 2px solid #dee2e6; text-align: left;">Yaş</th>
                    <th style="padding: 12px; border-bottom: 2px solid #dee2e6; text-align: left;">Cinsiyet</th>
                    <th style="padding: 12px; border-bottom: 2px solid #dee2e6; text-align: left;">Kayıt Tarihi</th>
                    <th style="padding: 12px; border-bottom: 2px solid #dee2e6; text-align: left;">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @forelse($participants as $participant)
                    <tr style="border-bottom: 1px solid #dee2e6;">
                        <td style="padding: 10px;">{{ $participant->full_name }}</td>
                        <td style="padding: 10px;">{{ $participant->email }}</td>
                        <td style="padding: 10px;">{{ $participant->phone }}</td>
                        <td style="padding: 10px;">{{ $participant->age }}</td>
                        <td style="padding: 10px;">
                            @if($participant->gender == 'male') Erkek
                            @elseif($participant->gender == 'female') Kadın
                            @else Diğer @endif
                        </td>
                        <td style="padding: 10px;">{{ $participant->created_at->format('d.m.Y H:i') }}</td>
                        <td style="padding: 10px;">
                            <a href="{{ route('admin.participants.show', $participant->id) }}" style="margin-right: 10px;
                                text-decoration: none; background-color: #007bff; color: white; padding: 6px 10px;
                                border-radius: 4px; display: inline-block;">Detay</a>
                            <form action="{{ route('admin.participants.destroy', $participant->id) }}" method="POST"
                                  style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Silmek istediğinize emin misiniz?')"
                                        style="background-color: #dc3545; color: white; border: none; padding: 6px 10px;
                                        border-radius: 4px; cursor: pointer;">Sil</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center; padding: 20px; color: #888;">Henüz kayıt bulunmamaktadır.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <!-- Sayfalama -->
            <div style="margin-top: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
                <div style="margin-bottom: 10px;">
                    Toplam: {{ $participants->total() }} katılımcı
                </div>
                <div>
                    {{ $participants->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
