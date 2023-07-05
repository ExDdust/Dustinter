let prevScrollPos = window.pageYOffset;
const siteHeader = document.getElementById("siteHeader");

window.addEventListener("scroll", function () {
    let currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
        siteHeader.style.transform = "translateY(0)"; // При скролле вверх, шапка появляется
    } else {
        siteHeader.style.transform = "translateY(-100%)"; // При скролле вниз, шапка скрывается
    }

    prevScrollPos = currentScrollPos;
});



$(document).ready(function () {
    // Открытие формы и затемнение фона
    $('#profileIcon').click(function () {
        $('.popup-form').fadeIn(300);
        $('.popup-overlay').fadeIn(300);
    });

    // Закрытие формы при клике вне ее области
    $(document).click(function (event) {
        if (!$(event.target).closest('.popup-form, .popup-form1, #profileIcon').length) {
            $('.popup-form').fadeOut(300);
            $('.popup-form1').fadeOut(300);
            $('.popup-overlay').fadeOut(300);
        }
    });

    // Переключение на форму Регистрация
    $('#registerButton').click(function () {
        $('#loginForm').fadeOut(300, function () {
            $('#registerForm').fadeIn(300);
            $('.popup-overlay').fadeIn(300); // Затемнение фона при открытии формы Регистрация
        });
    });

    // Переключение на форму Вход
    $('#loginButton').click(function () {
        $('#registerForm').fadeOut(300, function () {
            $('#loginForm').fadeIn(300);
            $('.popup-overlay').fadeIn(300); // Затемнение фона при открытии формы Вход
        });
    });
});


function showRegisterForm() {
    document.getElementById("registerForm").style.display = "block";
    document.getElementById("loginForm").style.display = "none";
}

function showLoginForm() {
    document.getElementById("loginForm").style.display = "block";
    document.getElementById("registerForm").style.display = "none";
}