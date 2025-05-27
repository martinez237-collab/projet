<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="gestioninscription.css">
<body>
    <div class="header1">
       <form action="gestioninscription.php" method="POST">
        <div>
           <label for="id_participant">Participant :</label>
           <input name="id_participant" required>
        </div>
    
     <div>
        <label for="id_evenement">Événement :</label>
        <input name="id_evenement" required>
     </div>

    <label for="statut_inscription">Statut :</label>
    <select name="statut_inscription" class="header2">
        <option value="valide">Validé</option>
        <option value="attente">En attente</option>
        <option value="annule">Annulé</option>
    </select>
    <div class="bt1">
          <button type="submit">Enregistrer l'inscription</button>
    </div>
</form>

    </div>
</body>
</html>