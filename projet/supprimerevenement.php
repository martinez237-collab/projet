<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supprimer evenement</title>
</head>
<link rel="stylesheet" href="evenementajout.css">
<body>
    <h2>Supprimer un événement</h2>
    <div class="header1">
        <form action="supprimerevenement.php" method="post">
            <label for="id_evenement">ID de l'événement :</label>
            <input type="number" id="id_evenement" name="id_evenement" required>
           <div class="bt1">
             <button type="submit">Supprimer</button>
           </div>
        </form>
    </div>
</body>
</html>