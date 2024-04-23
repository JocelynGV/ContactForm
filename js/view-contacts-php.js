function updateColors() {
    var table = document.getElementById("existing-contact-table");

    var rows = table.rows;

    for (let i = 0; i < rows.length; i++) {
        if (i % 2 == 1) {
            // rows[i].classList.add("white");
            rows[i].style.backgroundColor = "#ebe9e7";
        } else {
            rows[i].style.backgroundColor = "#B0ACA4";
        }
    }
}

updateColors();