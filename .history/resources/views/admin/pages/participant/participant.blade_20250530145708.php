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

                        <!-- Başlık ve Arama/Excel Alanı -->
                        <div class="header-container" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; gap: 15px;">
                            <!-- Sol Tarafta Arama Kutusu -->
                            <div class="search-container" style="flex: 1; max-width: 500px;">
                                <form action="{{ route('admin.participants.index') }}" method="GET" style="display: flex;">
                                    <input
                                        type="text"
                                        name="search"
                                        placeholder="İsim, email veya telefon ara..."
                                        class="search-input"
                                        value="{{ request('search') }}"
                                        style="padding: 8px 12px; border: 1px solid #e0e0e0; border-radius: 4px 0 0 4px; flex-grow: 1; outline: none;"
                                    >
                                    <button
                                        type="submit"
                                        style="background: #4a8cff; color: white; border: none; padding: 0 15px; border-radius: 0 4px 4px 0; cursor: pointer;"
                                    >
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>

                            <!-- Sağ Tarafta Başlık ve Excel Butonu -->
                            <div class="right-section" style="display: flex; align-items: center; gap: 15px;">
                                <h3 style="margin: 0; color: #333; font-size: 1.4rem;">Etkinlik Katılımcıları</h3>
                                <div class="vr" style="height: 30px; width: 1px; background: #e0e0e0;"></div>
                                <a
                                    href="{{ route('admin.participants.export') }}"
                                    style="background: #28a745; color: white; padding: 8px 15px; border-radius: 4px; text-decoration: none; display: flex; align-items: center; gap: 8px; white-space: nowrap; transition: background 0.2s;"
                                    onmouseover="this.style.background='#218838'"
                                    onmouseout="this.style.background='#28a745'"
                                >
                                    <i class="fas fa-file-excel"></i>
                                    <span>Excel İndir</span>
                                </a>
                            </div>
                        </div>

                        <!-- Katılımcı Listesi Tablosu -->
                        <div class="card">
                            <div class="card-block">
                                <div class="table-responsive" style="overflow-x: auto;">
                                    <table class="participant-table" style="width: 100%; border-collapse: collapse;">
                                        <thead>
                                            <tr style="background-color: #f8f9fa;">
                                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #e0e0e0;">Katılımcı</th>
                                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #e0e0e0;" class="mobile-hidden">E-Posta</th>
                                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #e0e0e0;" class="mobile-hidden">Telefon</th>
                                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #e0e0e0;" class="mobile-hidden">Yaş</th>
                                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #e0e0e0;" class="mobile-hidden">Cinsiyet</th>
                                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #e0e0e0;" class="mobile-hidden">Kayıt Tarihi</th>
                                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #e0e0e0;" class="mobile-hidden">IP Adresi</th>
                                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #e0e0e0;">İşlemler</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($participants as $participant)
                                            <tr style="border-bottom: 1px solid #e0e0e0;">
                                                <td style="padding: 12px 15px;">
                                                    <div style="display: flex; align-items: center; gap: 10px;">
                                                        <div style="width: 36px; height: 36px; background-color: #4a8cff; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                            {{ substr($participant->full_name, 0, 2) }}
                                                        </div>
                                                        <div>
                                                            <strong>{{ $participant->full_name }}</strong>
                                                            <div class="mobile-only" style="margin-top: 5px; font-size: 0.9em; color: #666;">
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
                                                <td style="padding: 12px 15px;" class="mobile-hidden">{{ $participant->email }}</td>
                                                <td style="padding: 12px 15px;" class="mobile-hidden">{{ $participant->phone }}</td>
                                                <td style="padding: 12px 15px;" class="mobile-hidden">{{ $participant->age }}</td>
                                                <td style="padding: 12px 15px;" class="mobile-hidden">
                                                    @if($participant->gender == 'male')
                                                        <span style="background-color: #d4edff; color: #004085; padding: 3px 8px; border-radius: 4px; font-size: 0.85em;">Erkek</span>
                                                    @elseif($participant->gender == 'female')
                                                        <span style="background-color: #f8d7da; color: #721c24; padding: 3px 8px; border-radius: 4px; font-size: 0.85em;">Kadın</span>
                                                    @else
                                                        <span style="background-color: #e2e3e5; color: #383d41; padding: 3px 8px; border-radius: 4px; font-size: 0.85em;">Diğer</span>
                                                    @endif
                                                </td>
                                                <td style="padding: 12px 15px;" class="mobile-hidden">{{ $participant->created_at->format('d.m.Y H:i') }}</td>
                                                <td style="padding: 12px 15px;" class="mobile-hidden">{{ $participant->ip_address }}</td>
                                                <td style="padding: 12px 15px;">
                                                    {{-- <div style="display: flex; gap: 5px;"> --}}
                                                       <a
    href="{{ route('admin.participants.show', $participant->id) }}"
    style="background-color: #007bff; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer; display: flex; align-items: center; gap: 5px;"
    onmouseover="this.style.backgroundColor='#0069d9'"
    onmouseout="this.style.backgroundColor='#007bff'"
>
    <i class="fas fa-eye"></i> <!-- Eye icon for "view" -->
    <span class="mobile-hidden">Görüntüle</span>
</a>

                                                        <form action="{{ route('admin.participants.destroy', $participant->id) }}" method="POST" style="display: inline;">
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
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8" style="padding: 20px; text-align: center; color: #666;">
                                                    <i class="fas fa-users-slash" style="font-size: 1.5em; margin-bottom: 10px; display: block;"></i>
                                                    Henüz kayıtlı katılımcı bulunmamaktadır
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Sayfalama -->
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px; padding: 10px 0;">
                                    <div style="color: #666; font-size: 0.9em;" class="mobile-hidden">
                                        Toplam {{ $participants->total() }} katılımcı
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
        </div>
    </section>

    <style>
        .search-input:focus {
            border-color: #4a8cff;
            box-shadow: 0 0 0 2px rgba(74, 140, 255, 0.2);
        }

        .participant-table tr:hover {
            background-color: #f8f9fa;
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                align-items: stretch;
            }

            .search-container {
                max-width: 100%;
                margin-bottom: 10px;
            }

            .right-section {
                justify-content: space-between;
                width: 100%;
            }

            .vr {
                display: none;
            }

            .mobile-hidden {
                display: none;
            }

            .mobile-only {
                display: block;
            }

            .participant-table td, .participant-table th {
                padding: 8px 10px !important;
            }
        }

        @media (min-width: 769px) {
            .mobile-only {
                display: none;
            }
        }
    </style>
@endsection
