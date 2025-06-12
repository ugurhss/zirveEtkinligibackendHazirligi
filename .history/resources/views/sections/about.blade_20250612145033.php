<div class="about-container">
    <div class="animated-ellipse"></div>

    <div class="content-wrapper">
        <div class="text-content">
            <h1>HAKKIMIZDA</h1>
            <p>Dijital dünyada ekonomi, sanayi ve istihdam gibi alanlarda yaşadığımız değişimi, sürdürülebilir bakış açısı ve insan odaklı yaklaşımla değerlendirmek amacıyla yola çıkıyoruz.</p>

            {{-- <div class="divider"></div> --}}

<a href="{{ route('program') }}"
   style="
       display: inline-block;
       padding: 15px 35px;
       background: white;
       border: 2px solid black;
       color: black;
       font-size: 1.1rem;
       font-weight: bold;
       border-radius: 30px;
       text-decoration: none;
       text-align: center;
       transition: all 0.4s ease;
       box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
   "
   onmouseover="this.style.background='rgb(37, 4, 52)'; this.style.color='white'; this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 25px rgba(37, 4, 52, 0.4)'; this.style.textShadow='0 0 4px rgba(255,255,255,0.4)'"
   onmouseout="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1)'; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.1)'; this.style.textShadow='none'"
>
    PROGRAM DETAYLARI
</a>
        </div>

        <div class="image-content">
            <img src="{{ asset('assets/images/hakkimizda.jpg') }}" alt="Hakkımızda Resmi">
        </div>
    </div>
</div>
