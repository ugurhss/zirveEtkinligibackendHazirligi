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
        background: linear-gradient(135deg, #007BFF 0%, #0056b3 100%);  /* gradient mavi */
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        float: right;
        margin-right: 20px;
        font-weight: 600;
        font-size: 1rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 120px;
        height: 44px;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
        position: relative;
        overflow: hidden;
    "
    onmouseover="
        this.style.background = 'linear-gradient(135deg, #0069d9 0%, #004a9c 100%)';
        this.style.boxShadow = '0 6px 12px rgba(0, 86, 179, 0.4)';
        this.style.transform = 'translateY(-2px)';
    "
    onmouseout="
        this.style.background = 'linear-gradient(135deg, #007BFF 0%, #0056b3 100%)';
        this.style.boxShadow = '0 4px 6px rgba(0, 123, 255, 0.3)';
        this.style.transform = 'translateY(0)';
    "
    onmousedown="
        this.style.transform = 'translateY(1px)';
        this.style.boxShadow = '0 2px 4px rgba(0, 86, 179, 0.4)';
    "
    onmouseup="
        this.style.transform = 'translateY(-2px)';
        this.style.boxShadow = '0 6px 12px rgba(0, 86, 179, 0.4)';
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
