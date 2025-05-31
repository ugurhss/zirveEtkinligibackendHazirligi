@extends('layouts.app')

@section('title', 'ANASAYFA SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ 2025 | BURSA')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-gradient-primary text-white py-4">
                    <div class="text-center">
                        <h2 class="h3 mb-1">Sürdürülebilirlik ve İnsan Zirvesi 2025</h2>
                        <p class="mb-0">Bursa - Etkinlik Kayıt Formu</p>
                    </div>
                </div>

                <div class="card-body p-5">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('participants.store') }}" class="needs-validation" novalidate>
                        @csrf

                        <div class="mb-4">
                            <label for="full_name" class="form-label fw-bold">Ad-Soyad <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg rounded-pill" id="full_name" name="full_name" required placeholder="Tam adınızı yazınız">
                            <div class="invalid-feedback">Lütfen adınızı ve soyadınızı giriniz.</div>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold">E-posta <span class="text-danger">*</span></label>
                            <input type="email" class="form-control form-control-lg rounded-pill" id="email" name="email" required placeholder="ornek@email.com">
                            <div class="invalid-feedback">Lütfen geçerli bir e-posta adresi giriniz.</div>
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="form-label fw-bold">Telefon Numarası <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control form-control-lg rounded-pill" id="phone" name="phone" required placeholder="5__ ___ __ __">
                            <div class="invalid-feedback">Lütfen telefon numaranızı giriniz.</div>
                        </div>

                        <div class="mb-4">
                            <label for="age" class="form-label fw-bold">Yaş <span class="text-danger">*</span></label>
                            <input type="number" class="form-control form-control-lg rounded-pill" id="age" name="age" min="1" required placeholder="Yaşınız">
                            <div class="invalid-feedback">Lütfen geçerli bir yaş giriniz.</div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Cinsiyet <span class="text-danger">*</span></label>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                    <label class="form-check-label" for="male">
                                        <i class="bi bi-gender-male me-2"></i>Erkek
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">
                                        <i class="bi bi-gender-female me-2"></i>Kadın
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                    <label class="form-check-label" for="other">
                                        <i class="bi bi-gender-ambiguous me-2"></i>Diğer
                                    </label>
                                </div>
                            </div>
                            <div class="invalid-feedback mt-1">Lütfen cinsiyetinizi seçiniz.</div>
                        </div>

                        <div class="d-grid mt-5">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill py-3 fw-bold">
                                <i class="bi bi-check-circle-fill me-2"></i> Kaydı Tamamla
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card-footer bg-light text-center py-3">
                    <p class="mb-0 text-muted">Sorularınız için: <a href="mailto:info@zirve2025.com">info@zirve2025.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #3a7bd5 0%, #00d2ff 100%);
    }
    .card {
        border-radius: 20px;
        overflow: hidden;
    }
    .form-control-lg {
        padding: 0.75rem 1.5rem;
    }
    .btn-lg {
        padding: 0.75rem 1.5rem;
        font-size: 1.1rem;
    }
</style>

<script>
    // Form validation
    (function () {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endsection
