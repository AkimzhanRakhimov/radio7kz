function toggleTable(tableId) {
    var tables = document.querySelectorAll(".table-container");
    var buttons = document.querySelectorAll(".toggle-button");

    tables.forEach(function (table) {
        if (table.id === tableId) {
            table.style.display = "block";
        } else {
            table.style.display = "none";
        }
    });

    buttons.forEach(function (button) {
        if (button.dataset.target === tableId) {
            button.classList.add("active");
        } else {
            button.classList.remove("active");
        }
    });

    // Сохраняем выбранную таблицу в localStorage
    localStorage.setItem("selectedTable", tableId);
}

document.addEventListener("DOMContentLoaded", function () {
    var selectedTableId = localStorage.getItem("selectedTable");
    if (selectedTableId) {
        toggleTable(selectedTableId); // Показываем выбранную таблицу

        // Делаем соответствующую кнопку активной
        var activeButton = document.querySelector(
            '.toggle-button[data-target="' + selectedTableId + '"]'
        );
        if (activeButton) {
            activeButton.classList.add("active");
        }
    }
});

function confirmDelete(button) {
    if (confirm("Вы уверены, что хотите удалить эту запись?")) {
        button.parentNode.submit();
    }
}
