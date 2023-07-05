<div class="slider">
    <ul>
        <li><img src="/Cite/image/mainpage/sliderimage1.jpg" alt="Slide 1"></li>
        <li><img src="/Cite/image/mainpage/sliderimage2.jpg" alt="Slide 2"></li>
    </ul>
</div>


<script>
    // Код JavaScript для автоматического слайдера
    var slider = document.querySelector('.slider ul');
    var slides = document.querySelectorAll('.slider li');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide, 5000); // Интервал между слайдами (в миллисекундах)

    function nextSlide() {
        // Переход к следующему слайду
        slides[currentSlide].className = '';
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].className = 'active';
        slider.style.left = -currentSlide * 100 + '%';
    }
</script>