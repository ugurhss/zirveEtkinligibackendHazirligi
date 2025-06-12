<nav class="navbar">
    <div class="logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
        <img src="{{ asset('assets/images/sizlogo.png') }}" alt="Logo">
    </div>

    <div class="nav-links-container">
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Ana Sayfa</a></li>
            <li><a href="{{ route('peak') }}">Zirve Hakkında</a></li>
            <li><a href="{{ route('program') }}">Program</a></li>
            <li><a href="{{ route('sponsor') }}">Sponsorlar</a></li>
            <li><a href="{{ route('contact.form') }}">İletişim</a></li>
            <li class="register-mobile">
                <a href="{{ route('participants.create')}}"><i class="fas fa-user-plus"></i> Zirveye Katıl</a>
            </li>
        </ul>
    </div>

    <div class="nav-right">
        <a href="{{ route('participants.create')}}" class="register-btn"><i class="fas fa-user-plus"></i> Zirveye Katıl</a>
        <button class="hamburger">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</nav>
