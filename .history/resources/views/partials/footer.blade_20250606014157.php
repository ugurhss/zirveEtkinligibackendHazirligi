<!-- İletişim Bölümü -->



<!-- Sosyal Medya ve Başlık -->
<section class="social-and-title">
    <div class="container">
        <!-- Sosyal Medya İkonları -->
        <br>
        <div class="social-icons">

            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>

        <!-- Başlık -->
        <h2 class="title2" >SİZ'25 Hakkındaki Gelişmeleri Takip Edin</h2>
    </div>
</section>

<!-- E-posta Abonelik Formu -->
<section class="newsletter-section">
    <div class="container">
        <!-- E-posta Giriş Alanı ve Buton -->
       <form action="{{ route('newsletter.store') }}" method="post" class="newsletter-form">
    @csrf
    <label for="email" class="required">Mail adresinizi giriniz</label>
    <input type="email" id="email" name="email" placeholder="E-posta adresinizi girin" required>
    <button type="submit" class="subscribe-button">Abone Ol!</button>






    <div class="checkbox-container">
        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">Zirve hakkında gelişmeleri takip etmek için aboneliğimi onaylıyorum.</label>
    </div>
</form>


        <!-- Onay Kutusu ve Açıklama -->
        {{-- <div class="checkbox-container">
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">Zirve hakkında gelişmeleri takip etmek için aboneliğimi onaylıyorum.</label>
        </div> --}}
    </div>
</section>

<!-- Logo ve Alt Yazılar -->
<section class="footer-section">
    <div class="container">
        <!-- Logo ve Alt Yazılar -->
        <div class="logo-and-text">
            <img src="{{ asset('assets/images/Birlik_Vakfi_Bursa_Subesi_Logo.svg') }}" alt="Birlik Vakfı Burşa Şubesi" class="footer-logo">
            <div class="footer-text">
                <p>SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ 2025</p>
                {{-- <p>İNSAN ZİRVESİ 2025</p> --}}
            </div>
        </div>

        <!-- Copyright Bilgisi -->
        <div class="copyright">
            <p>© 2035 by BSİZ2025. Ugur Can DOĞAN and secured by <a href="#">Ugur Can DOĞAN</a></p>
        </div>
    </div>
</section>
<style>
    .title2 {
    color: rgb(37, 4, 52);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 28px;
    font-weight: 600;
    text-align: center;
    margin: 25px 0;
    padding-bottom: 10px;
    border-bottom: 2px solid rgba(37, 4, 52, 0.5);
}
</style>
