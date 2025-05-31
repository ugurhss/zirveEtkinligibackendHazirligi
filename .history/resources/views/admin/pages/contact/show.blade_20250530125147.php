@extends('admin.layouts.app')

@section('title', 'Katılımcı Detayı')

@section('content')
    <section id="main-content" class="column column-offset-20">
        <div class="row grid-responsive">
            <div class="column">
                <div class="card">
                    <div class="card-title">
                        <div class="flex-container">
                            <h3 class="mb-0">Katılımcı Detayı</h3>
                            <a href="{{ route('admin.participants.index') }}" class="button button-outline">
                                <i class="fas fa-arrow-left"></i> Geri Dön
                            </a>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="participant-detail">
                            <div class="participant-header">
                                <div class="user-info">
                                    <div class="user-avatar">{{ substr($participant->full_name, 0, 2) }}</div>
                                    <div class="user-details">
                                        <h4>{{ $participant->full_name }}</h4>
                                        <div class="participant-meta">
                                            <span><i class="fas fa-envelope"></i> {{ $participant->email }}</span>
                                            <span><i class="fas fa-phone"></i> {{ $participant->phone }}</span>
                                            <span><i class="fas fa-clock"></i> {{ $participant->created_at->format('d.m.Y H:i') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="participant-info">
                                <div class="info-row">
                                    <div class="info-label">Yaş:</div>
                                    <div class="info-value">{{ $participant->age }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Cinsiyet:</div>
                                    <div class="info-value">
                                        @if($participant->gender == 'male')
                                            Erkek
                                        @elseif($participant->gender == 'female')
                                            Kadın
                                        @else
                                            Diğer
                                        @endif
                                    </div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">IP Adresi:</div>
                                    <div class="info-value">{{ $participant->ip_address }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Kayıt Tarihi:</div>
                                    <div class="info-value">{{ $participant->created_at->format('d.m.Y H:i') }}</div>
                                </div>
                            </div>

                            <div class="participant-actions">
                                <form action="{{ route('admin.participants.destroy', $participant->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button button-danger" onclick="return confirm('Katılımcıyı silmek istediğinize emin misiniz?')">
                                        <i class="fas fa-trash"></i> Katılımcıyı Sil
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
