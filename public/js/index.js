function toggleMenu() {
    var items = document.querySelector(".items");
    items.classList.toggle("active");
}
document.addEventListener("DOMContentLoaded", (event) => {
    const radioPlayer = document.getElementById("radioPlayer");

    // Пример автоматического воспроизведения
    radioPlayer.play();

    // Пример управления громкостью
    radioPlayer.volume = 0.5; // Установите громкость от 0.0 до 1.0
});
document.addEventListener("DOMContentLoaded", function () {
    const audio = document.getElementById("radioPlayer");
    const playPauseBtn = document.getElementById("playPauseBtn");
    const volumeSlider = document.getElementById("volumeSlider");
    const volumeIcon = document.getElementById("volumeIcon");

    playPauseBtn.addEventListener("click", function () {
        if (audio.paused) {
            audio.play();
            playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        } else {
            audio.pause();
            playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
        }
    });

    volumeSlider.addEventListener("input", function () {
        audio.volume = volumeSlider.value;
        if (audio.volume == 0) {
            volumeIcon.classList.remove("fa-volume-up", "fa-volume-down");
            volumeIcon.classList.add("fa-volume-mute");
        } else if (audio.volume < 0.5) {
            volumeIcon.classList.remove("fa-volume-up", "fa-volume-mute");
            volumeIcon.classList.add("fa-volume-down");
        } else {
            volumeIcon.classList.remove("fa-volume-down", "fa-volume-mute");
            volumeIcon.classList.add("fa-volume-up");
        }
    });
});
var audio = document.getElementById("radioPlayer");

// Слушаем событие загрузки метаданных
audio.addEventListener("loadedmetadata", function () {
    // Получаем информацию о текущем треке
    var artist = audio.artist || "Unknown Artist";
    var title = audio.title || "Unknown Track";

    // Обновляем содержимое DOM
    document.querySelector(".artist").textContent = "Исполнитель: " + artist;
    document.querySelector(".title").textContent = "Название трека: " + title;
});

// Слушаем событие смены трека или воспроизведения
audio.addEventListener("play", function () {
    // Получаем информацию о текущем треке (если доступно)
    var artist = audio.artist || "Unknown Artist";
    var title = audio.title || "Unknown Track";

    // Обновляем содержимое DOM
    document.querySelector(".artist").textContent = "Исполнитель: " + artist;
    document.querySelector(".title").textContent = "Название трека: " + title;
});
