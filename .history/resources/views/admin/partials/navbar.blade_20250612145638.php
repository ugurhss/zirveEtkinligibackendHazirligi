@php use Illuminate\Support\Facades\Auth; @endphp

<div class="navbar">
    <div class="row">
        <div class="column column-30 col-site-title">
            <a href="#" class="site-title float-left">SİZ'25 </a>
        </div>

        {{-- <div class="column column-40 col-search">
            <a href="#" class="search-btn fa fa-search"></a>
            <input type="text" placeholder="Search..." />
        </div> --}}

        <div class="column column-30">
            <div class="user-section">
                @auth
                    <a href="#">
                        <div class="username">
                            <h4>{{ Auth::user()->name }}</h4>
                            <p>Administrator</p>
                        </div>
                    </a>

                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                       <button type="submit"
        style="
            margin-top: 10px;
            background-color: red;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        ">
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
