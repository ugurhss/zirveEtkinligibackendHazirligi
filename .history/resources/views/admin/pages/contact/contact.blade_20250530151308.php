@extends('admin.layouts.app')
@section('title', 'İletişim Mesajları | Admin Paneli')

@section('content')
<section id="main-content" class="column column-offset-20">
    <div class="row grid-responsive">
        <div class="column">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="header-container" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <form action="{{ route('admin.contact.index') }}" method="GET" style="display: flex; max-width: 500px; width: 100%;">
                    <input
                        type="text"
                        name="search"
                        placeholder="İsim, email, telefon, konu veya mesaj ara..."
                        value="{{ request('search') }}"
                        style="padding: 8px; flex: 1; border: 1px solid #ccc; border-radius: 4px 0 0 4px;"
                    >
                    <button type="submit" style="padding: 8px 16px; background: #007bff; color: white; border: none; border-radius: 0 4px 4px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

                <h3 style="margin: 0; color: #333;">İletişim Mesajları</h3>
            </div>

            <div class="card">
                <div class="card-block">
                    <div class="table-responsive">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead style="background: #f8f9fa;">
                                <tr>
                                    <th style="padding: 10px;">Ad Soyad</th>
                                    <th class="mobile-hidden" style="padding: 10px;">E-posta</th>
                                    <th class="mobile-hidden" style="padding: 10px;">Telefon</th>
                                    <th class="mobile-hidden" style="padding: 10px;">Konu</th>
                                    <th class="mobile-hidden" style="padding: 10px;">Mesaj</th>
                                    <th class="mobile-hidden" style="padding: 10px;">Tarih</th>
                                    <th class="mobile-hidden" style="padding: 10px;">IP</th>
                                    <th style="padding: 10px;">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($messages as $message)
                                    <tr style="border-bottom: 1px solid #ccc;">
                                        <td style="padding: 10px;">{{ $message->name }}</td>
                                        <td class="mobile-hidden" style="padding: 10px;">{{ $message->email }}</td>
                                        <td class="mobile-hidden" style="padding: 10px;">{{ $message->phone }}</td>
                                        <td class="mobile-hidden" style="padding: 10px;">{{ $message->subject }}</td>
                                        <td class="mobile-hidden" style="padding: 10px;">{{ Str::limit($message->message, 40) }}</td>
                                        <td class="mobile-hidden" style="padding: 10px;">{{ $message->created_at->format('d.m.Y H:i') }}</td>
                                        <td class="mobile-hidden" style="padding: 10px;">{{ $message->ip_address }}</td>
                                        <td style="padding: 10px;">

                                                     <a
    href="{{ route('admin.contact.show', $message->id) }}"
    style="background-color: #007bff; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer; display: flex; align-items: center; gap: 5px;"
    onmouseover="this.style.backgroundColor='#0069d9'"
    onmouseout="this.style.backgroundColor='#007bff'"
    >
        <i class="fas fa-eye"></i>
    <span class="mobile-hidden">Görüntüle</span>
    </a>

                                            <form action="{{ route('admin.contact.destroy', $message->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                 <button
                                                                type="submit"
                                                                style="background-color: #dc3545; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer; display: flex; align-items: center; gap: 5px;"
                                                                onmouseover="this.style.backgroundColor='#c82333'"
                                                                onmouseout="this.style.backgroundColor='#dc3545'"
                                                                onclick="return confirm('Katılımcıyı silmek istediğinize emin misiniz?')"
                                                            >
                                                                <i class="fas fa-trash"></i>
                                                                <span class="mobile-hidden">Sil</span>
                                                            </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" style="padding: 20px; text-align: center; color: #999;">Kayıtlı mesaj bulunmamaktadır.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                        <div class="mobile-hidden" style="font-size: 0.9em;">Toplam {{ $messages->total() }} mesaj</div>
                        <div>{{ $messages->links() }}</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
