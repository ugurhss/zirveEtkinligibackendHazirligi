<!-- İletişim Bölümü -->
<section class="contact-section">
    <div class="container">
        <!-- Logo ve Başlık -->
        <div class="logo-and-title">
            <img src="{{ asset('assets/images/siz-insta-logo (1).jpg') }}" alt="SİZ 2025 Logo" class="logo-contact">
          <br><hr>  <h2 class="title">Sponsorluk ve Bilgi İçin</h2>
        </div>

        <!-- İletişim Bilgileri -->
        <div class="contact-info">
            <!-- E-posta -->
            <div class="contact-item email">
                <i class="fas fa-envelope"></i>
                <a href="mailto:bilgi@bsiz.org" class="email-link">bilgi@bsiz.org</a>
            </div>

            <!-- Telefon -->
            <div class="contact-item phone">
                <i class="fas fa-phone"></i>
                <a href="tel:+905320608261" class="phone-link">+90 532 060 82 61</a>
            </div>
        </div>
    </div>
</section>


<!-- Sosyal Medya ve Başlık -->
<section class="social-and-title">
    <div class="container">
        <!-- Sosyal Medya İkonları -->
        <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>

        <!-- Başlık -->
        <h2 class="title">SİZ'25 Hakkındaki Gelişmeleri Takip Edin</h2>
    </div>
</section>

<!-- E-posta Abonelik Formu -->
<section class="newsletter-section">
    <div class="container">
        <!-- E-posta Giriş Alanı ve Buton -->
        <form action="#" method="post" class="newsletter-form">
            <label for="email" class="required">Mail adresinizi giriniz</label>
            <input type="email" id="email" name="email" placeholder="E-posta adresinizi girin" required>
            <button type="submit" class="subscribe-button">Abone Ol!</button>
        </form>

        <!-- Onay Kutusu ve Açıklama -->
        <div class="checkbox-container">
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">Zirve hakkında gelişmeleri takip etmek için aboneliğimi onaylıyorum.</label>
        </div>
    </div>
</section>

<!-- Logo ve Alt Yazılar -->
<section class="footer-section">
    <div class="container">
        <!-- Logo ve Alt Yazılar -->
        <div class="logo-and-text">
            <img src="{{ asset('assets/images/Birlik_Vakfi_Bursa_Subesi_Logo.svg') }}" alt="Birlik Vakfı Burşa Şubesi" class="footer-logo">
            <div class="footer-text">
                <p>SÜRDÜRÜLEBİLİRLİK VE</p>
                <p>İNSAN ZİRVESİ 2025</p>
            </div>
        </div>

        <!-- Copyright Bilgisi -->
        <div class="copyright">
            <p>© 2035 by BSİZ2025. Ugur Can DOĞAN and secured by <a href="#">Ugur Can DOĞAN</a></p>
        </div>
    </div>
</section>
