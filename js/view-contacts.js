var contact = [];
const headers = ["First Name: ", "Last Name: ", "Address: ", "State: ", "Zip: ", "Telephone: ", "Email: "];
var index = 0;

function getContacts() {
    fetch("../contacts.txt")
    .then((res) => res.text())
    .then((text) => {
        const entries = text.split("\n");

        var j = 0;
        for (let i = entries.length - 1; i >= 0; i--) {
            // populate the 2d contact array in reverse order
            contact[j] = entries[i].split(",");
            j++;
        }

        // create blank table
        createTable();

        // display first contact
        displayContact(index);
    })
    .catch((error) => {
        console.error('Error fetching contacts:', error);
    });
}

/*
function createTable(contact) {
    var table = document.getElementById("existing-contact-table");
    var rows = table.rows;

    for  (let i = 0; i < contact.length; i++) {
        var tr = document.createElement("tr");
        tr.setAttribute("id", headers[i]);
        var td = document.createElement("td");
        var td2 = document.createElement("td");
        td.innerHTML = headers[i];
        td2.innerHTML = contact[i];
        tr.appendChild(td);
        tr.appendChild(td2);
        table.appendChild(tr);
    }
}  */

function createTable() {
    var table = document.getElementById("existing-contact-table");

    for (let i = 0; i < headers.length; i++) {
        var tr = document.createElement("tr");
        var td = document.createElement("td");
        var td2 = document.createElement("td");
        td2.setAttribute("id", headers[i]);
        td.innerHTML = headers[i];
        tr.appendChild(td);
        tr.appendChild(td2);
        table.appendChild(tr);
    }
}

function displayContact(index) {
    for (let i = 0; i < headers.length; i++) {
        var data = document.getElementById(headers[i]);
        data.innerHTML = contact[index][i];
    }
}

getContacts();

function showPrevious() {
    if (index > 0) {
        index--;
    }
    displayContact(index);
}

function showNext() {
    if (index < contact.length) {
        index++;
    }
    displayContact(index);
}

function showIndex() {
    if (index < contact.length && index > 0) {
        var input = document.getElementById("progress");
        var int = input.innerHTML;
        displayContact(int);
    }
}
