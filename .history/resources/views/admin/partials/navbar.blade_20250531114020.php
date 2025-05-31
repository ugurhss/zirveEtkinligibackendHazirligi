@php
    use Illuminate\Support\Facades\Auth;
@endphp

<div class="navbar">
    <div class="row">
        <div class="column column-30 col-site-title">
            <a href="#" class="site-title float-left">Medialoot</a>
        </div>

        <div class="column column-40 col-search">
            <a href="#" class="search-btn fa fa-search"></a>
            <input type="text" name="" placeholder="Search..." />
        </div>

        <div class="column column-30">
            <div class="user-section">
                @auth
                    <a href="#">
                        <div class="username">
                            <h4>{{ Auth::user()->name }}</h4>
                            <p>Administrator</p>
                        </div>
                    </a>

                    <form action="{{ route('logout') }}" method="POST" style="margin-top: 5px;">
                        @csrf
                        <button type="submit" style="background: none; border: none; color: white; cursor: pointer;">
                            Çıkış Yap
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}">
                        <div class="username">
                            <h4>Misafir</h4>
                            <p>Giriş Yap</p>
                        </div>
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>
