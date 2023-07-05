<link rel="stylesheet" href="/css/gamepageslider.css">

<div class="slider">
    <ul>
        <li><img src="/image/game/photo1.png" alt="Slide 1"></li>
        <li><img src="/image/game/photo2.png" alt="Slide 2"></li>
        <li><img src="/image/game/photo3.png" alt="Slide 2"></li>
        <li><img src="/image/game/photo4.png" alt="Slide 2"></li>
    </ul>
</div>


<script>
    let slider = document.querySelector('.slider ul');
    let slides = document.querySelectorAll('.slider li');
    let currentSlide = 0;
    let slideInterval = setInterval(nextSlide, 5000);

    function nextSlide() {
        slides[currentSlide].className = '';
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].className = 'active';
        slider.style.left = -currentSlide * 629 + 'px';
    }

    // Добавляем обработчик события клика на каждую картинку
    for (let i = 0; i < slides.length; i++) {
        slides[i].addEventListener('click', openImage);
    }

    function openImage(event) {
        let clickedImage = event.target;
        let imageUrl = clickedImage.src;
        let imageAlt = clickedImage.alt;

        // Создаем модальное окно с изображением
        let modal = document.createElement('div');
        modal.className = 'modal';
        modal.innerHTML = '<div class="modal-content">' +
            '<span class="close">&times;</span>' +
            '<img src="' + imageUrl + '" alt="' + imageAlt + '">' +
            '</div>';

        // Добавляем модальное окно в DOM
        document.body.appendChild(modal);

        // Добавляем обработчик события клика на кнопку закрытия
        let closeButton = modal.querySelector('.close');
        closeButton.addEventListener('click', closeImage);
    }

    function closeImage() {
        let modal = document.querySelector('.modal');
        modal.parentNode.removeChild(modal);
    }
</script>
