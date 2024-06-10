function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var ressources = new RegExp("[\\?&]" + name + "=([^&#]*)");
    var nom = ressources.exec(location.search);
    return nom === null ? "" : decodeURIComponent(nom[1].replace(/\+/g, " "));
}

function displayRubriqueName() {
    var rubrique = getParameterByName('rubrique');
    document.getElementById('rubriqueName').innerText = rubrique;
}

window.onload = displayRubriqueName;