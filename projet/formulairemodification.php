<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification du jeu</title>
</head>
<link rel="stylesheet" href="ajout.css">
<body>
     <h2>Modifier un jeu</h2>
    <div class="header1">
    <form action="modifierjeu.php" method="post">
        <div>
          <label for="id_jeux">ID Jeu :</label>
        <input type="text" id="id_jeux" name="id_jeux"  required><br>  
        </div>
        <div>
         <label for="nom_jeu">Nom du jeu :</label>
        <input type="text" id="nom_jeu" name="nom_jeu" required><br>
        </div>
        <div>
         <label for="annee_sortie">Année de sortie :</label>
        <input type="number" id="annee_sortie" name="annee_sortie"><br>
        </div>
        <div>
         <label for="genre">Genre :</label>
        <input type="text" id="genre" name="genre" required><br>
        </div>
        <div>
            <label for="type">Type :</label>
        <input type="text" id="type" name="type" required><br>
        </div>
        <div>
                   <label for="description_courte">Description courte :</label>
                   <textarea id="description_courte" name="description_courte"></textarea><br> 
        </div>
       <div>
        <label for="regles">Règles :</label>
        <textarea id="regles" name="regles"></textarea><br>
       </div>
        <div>
           <label for="visuel">URL du visuel :</label>
        <input type="text" id="visuel" name="visuel" required><br> 
        </div>
         <div class="bt1">
          <input type="submit" value="Modifier">
         </div>
    </form>
    </div>
    
</body>
</html>
