document.addEventListener('DOMContentLoaded', function() {
    // Navbar elementleri
    const hamburger = document.querySelector('.hamburger');
    const navContainer = document.querySelector('.nav-links-container');
    const navbar = document.querySelector('.navbar');

    // Carousel yüksekliğini ayarla
    function adjustCarouselHeight() {
        const navbarHeight = navbar.offsetHeight;
        const carouselItems = document.querySelectorAll('.carousel-item');

        carouselItems.forEach(item => {
            item.style.height = `calc(100vh - ${navbarHeight}px)`;
        });
    }

    // Hamburger menü toggle
    hamburger.addEventListener('click', function() {
        navContainer.classList.toggle('active');
        const icon = this.querySelector('i');
        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-times');
    });

    // Scroll efekti
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.2)';
            navbar.style.background = 'rgba(37,4,52, 0.95)';
        } else {
            navbar.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.2)';
            navbar.style.background = 'rgba(37,4,52,)';
        }
    });

    // Ekran boyutu değiştiğinde
    window.addEventListener('resize', function() {
        adjustCarouselHeight();

        if (window.innerWidth > 768) {
            navContainer.classList.remove('active');
            const icon = hamburger.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });

    // Sayfa yüklendiğinde çalıştır
    adjustCarouselHeight();

    // Carousel otomatik başlatma
    const myCarousel = new bootstrap.Carousel(document.getElementById('mainCarousel'), {
        interval: 5000,
        wrap: true
    });
});



// Program kartlarına animasyon ekleme
document.addEventListener('DOMContentLoaded', function() {
    const programCards = document.querySelectorAll('.program-card');

    programCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.5s ease ' + (index * 0.1) + 's';

        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 300);
    });

    // Navbar fonksiyonları (önceki kodunuz)
});


