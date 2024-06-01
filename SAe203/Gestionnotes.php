<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Gestionnotes.css">
    <title>Gestion des notes</title>
</head>
<body>
<a href="#"><img src="#" alt="LOGO"></a> 
    <fieldset class="latino">
        <div class="gentil"  style="text-align: center;">
            <h1>Gestion des notes</h1> 
        </div>
        
        <form action="#" method="POST">

            <label for="modules">Modules :</label>
            <select id="modules" name="modules" required class="gris">
                <option value="Anglais">Anglais</option>
                <option value="UI">UI/UX</option>
                <option value="R214">R214</option>
                <option value="R213">R213</option>
                <option value="SAe203">SAe203</option>
                <option value="SAe201">SAe201</option>
            </select>

             <br><br>

            <label for="coef">Coefficient :</label>
            <input type="number" id="coef" name="coef" min="0" required>
           
            <br><br>
            
           <label for="eval">Type d'évaluation :</label>
            <select id="eval" name="eval" required class="gris">
                <option value="Pratique">Pratique</option>
                <option value="Théorique">Théorique</option>
                <option value="SAe">SAé</option>
                <option value="Compte rendu">Compte rendu</option>
            </select>
            
             <br><br>
            
            <label for="libelle">Libellé de l’évaluation :</label>
            <input type="text" id="libelle" name="libelle" required>

             <br><br>

            <label for="groupe">Groupe :</label>
            <select id="groupe" name="groupe" required class="gris">
                <option value="TPA">TPA</option>
                <option value="TPB">TPB</option>
                <option value="TPC">TPC</option>
                <option value="TPD">TPD</option>
                <option value="TPE">TPE</option>
                <option value="TPF">TPF</option>
            </select>

             <br><br>

            <input type="submit" id="enregistrer" name="enregistrer" value="Enregistrer">
        </form>
    </fieldset>
</body>
</html>
