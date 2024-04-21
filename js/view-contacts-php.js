function updateColors() {
    var table = document.getElementById("existing-contact-table");

    var rows = table.rows;

    for (let i = 0; i < rows.length; i++) {
        if (rows[i].classList.contains("white")) {
            rows[i].style.backgroundColor = "#ebe9e7";
        }
    }
}

updateColors();