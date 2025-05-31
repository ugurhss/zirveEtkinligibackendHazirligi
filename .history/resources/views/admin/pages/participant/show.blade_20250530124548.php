@extends('admin.layouts.app')

@section('title', 'Mesaj Detayı')

@section('content')
    <section id="main-content" class="column column-offset-20">
        <div class="row grid-responsive">
            <div class="column">
                <div class="card">
                    <div class="card-title">
                        <div class="flex-container">
                            <h3 class="mb-0">Mesaj Detayı</h3>
                            <a href="{{ route('admin.contact.index') }}" class="button button-outline">
                                <i class="fas fa-arrow-left"></i> Geri Dön
                            </a>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="message-detail">
                            <div class="message-header">
                                <div class="user-info">
                                    <div class="user-avatar">{{ substr($message->name, 0, 2) }}</div>
                                    <div class="user-details">
                                        <h4>{{ $message->name }}</h4>
                                        <div class="message-meta">
                                            <span><i class="fas fa-envelope"></i> {{ $message->email }}</span>
                                            <span><i class="fas fa-clock"></i> {{ $message->created_at->format('d.m.Y H:i') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="message-subject">
                                    <h5>{{ $message->subject }}</h5>
                                </div>
                            </div>
                            <div class="message-content">
                                <p>{{ $message->message }}</p>
                            </div>
                            <div class="message-actions">
                                <form action="{{ route('admin.contact.destroy', $message->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button button-danger" onclick="return confirm('Mesajı silmek istediğinize emin misiniz?')">
                                        <i class="fas fa-trash"></i> Mesajı Sil
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
