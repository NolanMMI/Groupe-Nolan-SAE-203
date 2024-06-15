function addModule() {
    let moduleInput = document.createElement('div');
    moduleInput.classList.add('Module');
    moduleInput.innerHTML = `
        <label for="module">Module</label>
        <input type="text" name="module" placeholder="Module">
        <button type="button" onclick="removeElement(this)">-</button>
    `;
    document.querySelector('form').insertBefore(moduleInput, document.querySelector('.button-group'));
}

function addMatiere() {
    let matiereInput = document.createElement('div');
    matiereInput.classList.add('Matiere');
    matiereInput.innerHTML = `
        <label for="matiere">Matière</label>
        <input type="text" name="matiere" placeholder="Matière">
        <button type="button" onclick="removeElement(this)">-</button>
    `;
    document.querySelector('form').insertBefore(matiereInput, document.querySelector('.button-group'));
}

function removeElement(button) {
    button.parentElement.remove();
}

document.getElementById('prof-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    
    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let modules = Array.from(document.querySelectorAll('input[name="module"]')).map(input => input.value);
    let matieres = Array.from(document.querySelectorAll('input[name="matiere"]')).map(input => input.value);
    let annee = document.getElementById('annee').value;
    let login = document.getElementById('login').value;
    let password = document.getElementById('password').value;

    
    console.log('Nom:', nom);
    console.log('Prénom:', prenom);
    console.log('Modules:', modules);
    console.log('Matières:', matieres);
    console.log('Année scolaire:', annee);
    console.log('Login:', login);
    console.log('Mot de passe:', password);

    
    alert('Professeur créé avec succès!');
});
