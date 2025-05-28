<div id="fullscreen-carousel" class="fullscreen-carousel">
    <div class="carousel-content">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/slide1.jpg') }}" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/slide2.jpg') }}" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/slide3.jpg') }}" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control prev-btn">❮</button>
    <button class="carousel-control next-btn">❯</button>
</div>

<style>


    .fullscreen-carousel {
        position: relative;
        width: 100vw;
        height: 100vh;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .carousel-content {
        display: flex;
        height: 100%;
        transition: transform 0.5s ease;
    }

    .carousel-item {
        min-width: 100vw;
        height: 100vh;
        display: none;
    }

    .carousel-item.active {
        display: block;
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0,0,0,0.5);
        color: white;
        border: none;
        font-size: 2rem;
        padding: 15px;
        cursor: pointer;
        z-index: 10;
        border-radius: 50%;
    }

    .prev-btn {
        left: 20px;
    }

    .next-btn {
        right: 20px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.querySelector('#fullscreen-carousel');
        const items = carousel.querySelectorAll('.carousel-item');
        const prevBtn = carousel.querySelector('.prev-btn');
        const nextBtn = carousel.querySelector('.next-btn');
        let currentIndex = 0;
        let autoSlideInterval;

        function showSlide(index) {
            items.forEach(item => item.classList.remove('active'));
            items[index].classList.add('active');
            currentIndex = index;
        }

        function nextSlide() {
            let newIndex = (currentIndex + 1) % items.length;
            showSlide(newIndex);
        }

        function prevSlide() {
            let newIndex = (currentIndex - 1 + items.length) % items.length;
            showSlide(newIndex);
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000);
        }

        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }

        prevBtn.addEventListener('click', () => {
            resetAutoSlide();
            prevSlide();
        });

        nextBtn.addEventListener('click', () => {
            resetAutoSlide();
            nextSlide();
        });

        // Fare carousel üzerindeyken otomatik geçişi durdur
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoSlideInterval);
        });

        // Fare carousel'den ayrılınca otomatik geçişi başlat
        carousel.addEventListener('mouseleave', startAutoSlide);

        // Başlangıçta otomatik geçişi başlat
        startAutoSlide();
    });
</script>
