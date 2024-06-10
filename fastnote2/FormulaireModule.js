let matiereCount = 1;

function addMatiere() {
    const matiereContainer = document.getElementById('matiere-container');
    
    const newMatiereGroup = document.createElement('div');
    newMatiereGroup.classList.add('form-group');
    
    const newMatiereLabel = document.createElement('label');
    
    newMatiereLabel.textContent = 'Matière';
    
    const newMatiereInput = document.createElement('input');
    newMatiereInput.setAttribute('type', 'text');
    newMatiereInput.setAttribute('name', 'matiere');
    newMatiereInput.required = true;

    const removeButton = document.createElement('button');
    removeButton.setAttribute('type', 'button');
    removeButton.textContent = '-';
    removeButton.onclick = function() {
        newMatiereGroup.remove();
    };
    
    newMatiereGroup.appendChild(newMatiereLabel);
    newMatiereGroup.appendChild(newMatiereInput);
    newMatiereGroup.appendChild(removeButton);
    
    matiereContainer.appendChild(newMatiereGroup);
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
