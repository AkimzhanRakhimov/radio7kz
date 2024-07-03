const container = document.querySelector(".review-cards");
let isDown = false;
let startX;
let scrollLeft;

container.addEventListener("mousedown", (e) => {
    isDown = true;
    startX = e.pageX - container.offsetLeft;
    scrollLeft = container.scrollLeft;
});

container.addEventListener("mouseleave", () => {
    isDown = false;
});

container.addEventListener("mouseup", () => {
    isDown = false;
});

container.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - container.offsetLeft;
    const walk = x - startX;
    container.scrollLeft = scrollLeft - walk;
});
container.addEventListener("touchstart", (e) => {
    isDown = true;
    startX = e.touches[0].clientX - container.offsetLeft;
    scrollLeft = container.scrollLeft;
});

container.addEventListener("touchend", () => {
    isDown = false;
});

container.addEventListener("touchcancel", () => {
    isDown = false;
});

container.addEventListener("touchmove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.touches[0].clientX - container.offsetLeft;
    const walk = x - startX;
    container.scrollLeft = scrollLeft - walk;
});

document.getElementById("openModalBtn").addEventListener("click", function () {
    document.getElementById("myModal").style.display = "block";
});

document
    .getElementsByClassName("close")[0]
    .addEventListener("click", function () {
        document.getElementById("myModal").style.display = "none";
    });

window.addEventListener("click", function (event) {
    if (event.target == document.getElementById("myModal")) {
        document.getElementById("myModal").style.display = "none";
    }
});
document.addEventListener("DOMContentLoaded", function () {
    var menuItems = document.querySelectorAll(".menuItem");

    menuItems.forEach(function (item) {
        item.addEventListener("click", function () {
            var items = document.querySelector(".items");
            items.classList.remove("active");
        });
    });
});

function toggleMenu() {
    var items = document.querySelector(".items");
    items.classList.toggle("active");
}
var modal = document.getElementById("modal-review");
var closeModalBtn = document.querySelector("#modal-review .close");

// Найти все ссылки "Читать весь отзыв"
var readMoreLinks = document.querySelectorAll(".read-more");

// Для каждой ссылки "Читать весь отзыв" добавить обработчик события
readMoreLinks.forEach(function (link) {
    link.addEventListener("click", function () {
        // Найти родительский элемент карточки отзыва
        var reviewCard = this.closest(".review-card");

        // Получить HTML содержимое карточки отзыва
        var reviewCardHTML = reviewCard.innerHTML;

        // Отобразить модальное окно с полным содержимым карточки отзыва
        document.getElementById("full-review").innerHTML = reviewCardHTML;
        modal.style.display = "block";

        var modalReadMore = document.querySelector("#modal-review .read-more");
        modalReadMore.remove();
        // Удалить свойство -webkit-line-clamp: 14; для всех элементов .review в модальном окне
        var modalReviews = modal.querySelectorAll(".review");
        modalReviews.forEach(function (modalReview) {
            modalReview.style.webkitLineClamp = "unset";
        });
    });
});

// Закрыть модальное окно при нажатии на кнопку закрытия
closeModalBtn.addEventListener("click", function () {
    modal.style.display = "none";
});

// Закрыть модальное окно при нажатии вне его области
window.addEventListener("click", function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});
function success(message) {
    alert(message);
    location.reload();
}

document.getElementById("myForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Отменяем стандартное действие отправки формы
    var form = this;
    var formData = new FormData(form);
    // Делаем AJAX-запрос на сервер
    fetch(form.action, {
        method: form.method,
        body: formData,
    })
        .then(function (response) {
            if (response.ok) {
                return response.json(); // Парсим JSON из ответа
            } else {
                throw new Error("Произошла ошибка");
            }
        })
        .then(function (data) {
            success(data.message); // Показываем сообщение об успешной отправке
            form.reset(); // Очищаем форму
        })
        .catch(function (error) {
            console.error("Ошибка:", error);
            alert("Произошла ошибка"); // В случае ошибки выводим сообщение
        });
});

document
    .getElementById("mainForm")
    .addEventListener("submit", function (event) {
        event.preventDefault(); // Отменяем стандартное действие отправки формы
        var form = this;
        var formData = new FormData(form);
        // Делаем AJAX-запрос на сервер
        fetch(form.action, {
            method: form.method,
            body: formData,
        })
            .then(function (response) {
                if (response.ok) {
                    return response.json(); // Парсим JSON из ответа
                } else {
                    throw new Error("Произошла ошибка");
                }
            })
            .then(function (data) {
                success(data.message); // Показываем сообщение об успешной отправке
                form.reset(); // Очищаем форму
            })
            .catch(function (error) {
                console.error("Ошибка:", error);
                alert("Произошла ошибка"); // В случае ошибки выводим сообщение
            });
    });
const scrollContainer = document.querySelector(".review-cards");
const scrollCards = document.querySelector(".review-card");
const scrollLeftButton = document.querySelector(".scroll-left");
const scrollRightButton = document.querySelector(".scroll-right");

scrollLeftButton.addEventListener("click", () => {
    scrollContainer.scrollBy({
        left: -300, // Change this value according to the width of your card
        behavior: "smooth",
    });
});

scrollRightButton.addEventListener("click", () => {
    scrollContainer.scrollBy({
        left: 300, // Change this value according to the width of your card
        behavior: "smooth",
    });
});
