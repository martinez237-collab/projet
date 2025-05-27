<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout evenement</title>
    
</head>
<link rel="stylesheet" href="evenementajout.css">
<body>

<h2>Ajouter un jeu</h2>
<div class="header1">
<form action="ajout_evenement.php" method="POST">
    <div>
       <label>titre :</label>
    <input type="text" name="titre" required>
 
    </div>
    <div style="margin-top: 20px;">
        <label>duree :</label>
        <select name="duree" id="duree">
            <option value="demi-journee"> demi-journee</option>
            <option value="journee">journee</option>
            <option value="weekend">weekend</option>
        </select>
    </div>
    <div  style="margin-top: 30px;">
    <label>nombre_max :</label>
    <input type="number" name="nombre_max" required>
    </div>
   
    <div style="margin-top: 25px;">
      <label>Description  :</label>
      <textarea name="description"></textarea>
    </div>
   
    <div class="bt1">
      <button type="submit">Ajouter</button>
    </div>
</form>
</div>
</body>
</html>

