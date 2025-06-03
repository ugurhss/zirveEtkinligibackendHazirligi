@extends('admin.layouts.app')

@section('title', 'Aboneler | Admin Paneli')

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
                <h3 style="margin: 0; color: #333; font-size: 2.5rem;">Abone Listesi</h3>
            </div>

            <div class="card">
                <div class="card-block">
                    <div class="table-responsive">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead style="background: #f8f9fa;">
                                <tr>
                                    <th style="padding: 10px;">ID</th>
                                    <th style="padding: 10px;">E-posta</th>
                                    <th style="padding: 10px;">Onay Durumu</th>
                                    <th style="padding: 10px;">Kayıt Tarihi</th>
                                    <th style="padding: 10px;">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($aboneler as $abone)
                                    <tr style="border-bottom: 1px solid #ccc;">
                                        <td style="padding: 10px;">{{ $abone->id }}</td>
                                        <td style="padding: 10px;">{{ $abone->email }}</td>
                                        <td style="padding: 10px;">
                                            <span style="padding: 5px 10px; border-radius: 4px; background-color: {{ $abone->approved ? '#28a745' : '#dc3545' }}; color: white;">
                                                {{ $abone->approved ? 'Evet' : 'Hayır' }}
                                            </span>
                                        </td>
                                        <td style="padding: 10px;">{{ $abone->created_at->format('d.m.Y H:i') }}</td>
                                        <td style="padding: 10px;">
                                            {{-- <form action="{{ route('admin.newsletter.destroy', $abone->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    type="submit"
                                                    style="background-color: #dc3545; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer; display: flex; align-items: center; gap: 5px;"
                                                    onmouseover="this.style.backgroundColor='#c82333'"
                                                    onmouseout="this.style.backgroundColor='#dc3545'"
                                                    onclick="return confirm('Aboneyi silmek istediğinize emin misiniz?')"
                                                >
                                                    <i class="fas fa-trash"></i>
                                                    <span class="mobile-hidden">Sil</span>
                                                </button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" style="padding: 20px; text-align: center; color: #999;">Hiç abone bulunmamaktadır.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                        {{-- <div class="mobile-hidden" style="font-size: 0.9em;">Toplam {{ $aboneler->total() }} abone</div> --}}
                        {{-- <div>{{ $aboneler->links() }}</div> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
