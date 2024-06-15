function showTable() {
    var select = document.getElementById("tpSelect");
    var value = select.value;
    var tables = document.getElementsByClassName("table-container");
    for (var i = 0; i < tables.length; i++) {
        tables[i].style.display = "none";
    }
    document.getElementById(value).style.display = "block";
}