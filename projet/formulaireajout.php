<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout de jeu</title>
    
</head>
<link rel="stylesheet" href="ajout.css">
<body>

<h2>Ajouter un jeu</h2>
<div class="header1">
<form action="ajout.php" method="POST">
    <div>
       <label>Nom du jeu :</label>
    <input type="text" name="nom_jeu" required>
 
    </div>
    <div>
        <label>Année de sortie :</label>
    <input type="number" name="annee_sortie" required min="1900" max="2100">

    </div>
    <div>
    <label>Genre :</label>
    <input type="text" name="genre" required>
    </div>
    <div>
      <label>Type :</label>
    <input type="text" name="type" required>
    </div>
    <div>
      <label>Description courte :</label>
      <textarea name="description_courte"></textarea>
    </div>
    <div>
      <label>Règles :</label>
    <textarea name="regles"></textarea>  
    </div>
    <div >
         <label> url("jeu1")</label>
    <input type="text" name="visuel" required>

    </div>
    <div class="bt1">
      <button type="submit">Ajouter</button>
    </div>
</form>
</div>
</body>
</html>

