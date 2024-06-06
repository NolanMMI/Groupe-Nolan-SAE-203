document.getElementById('eleve-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
   
    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let login = document.getElementById('login').value;
    let password = document.getElementById('password').value;
    let numeroId = document.getElementById('numero-id').value;
    let annee = document.getElementById('annee').value;
    let classe = document.getElementById('classe').value;

    
    console.log('Nom:', nom);
    console.log('Prénom:', prenom);
    console.log('Login:', login);
    console.log('Mot de passe:', password);
    console.log('Numéro ID:', numeroId);
    console.log('Année scolaire:', annee);
    console.log('Classe:', classe);

   
    alert('Élève créé avec succès!');
});
