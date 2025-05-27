<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>modifier evenement</title>
    
</head>
<link rel="stylesheet" href="evenementajout.css">
<body>

<h2>modifier evenement</h2>
<div class="header1">
<form action="modifier_evenement.php" method="POST">
    <div>
         <label for="id_evenement">ID de l'événement :</label>
            <input type="number" id="id_evenement" name="id_evenement" required >
    </div>
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