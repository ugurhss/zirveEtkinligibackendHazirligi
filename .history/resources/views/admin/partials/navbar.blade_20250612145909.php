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
        background-color: #e63946;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        float: right;
        margin-right: 20px;
        font-weight: 600;
        font-size: 1rem;
        transition: background-color 0.3s ease,
                    box-shadow 0.3s ease,
                    transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 10px rgba(230, 57, 70, 0.4);
    "
    onmouseover="
        this.style.backgroundColor = '#b22222';
        this.style.boxShadow = '0 8px 20px rgba(178, 34, 34, 0.6)';
        this.style.transform = 'translateY(-3px) scale(1.07)';
    "
    onmouseout="
        this.style.backgroundColor = '#e63946';
        this.style.boxShadow = '0 4px 10px rgba(230, 57, 70, 0.4)';
        this.style.transform = 'translateY(0) scale(1)';
    "
>
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
