let matiereCount = 1;

function addMatiere() {
    const matiere = document.getElementById('matiere');
    
    const newMatiereInput = document.createElement('input');
    newMatiereInput.setAttribute('type', 'text');
    newMatiereInput.setAttribute('id', `matiere-${matiereCount}`);
    newMatiereInput.setAttribute('name', 'matiere');
    newMatiereInput.setAttribute('placeholder', 'Matière');
    newMatiereInput.required = true;
    
    matiereContainer.appendChild(newMatiereInput);
    matiereCount++;
}

document.getElementById('module-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    
    const nomModule = document.getElementById('nom-module').value;
    const matieres = Array.from(document.querySelectorAll('input[name="matiere"]')).map(input => input.value);
    
    
    console.log('Nom du module:', nomModule);
    console.log('Matières:', matieres);
    
   
    alert('Module créé avec succès!');
});
