<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un jeu</title>
    <link rel="stylesheet" href="ajout.css">
</head>
<body>
    <h2>Supprimer un jeu</h2>
    <div class="header1">
        <form action="formulairesupp.php" method="post">
        <label for="id_jeux">ID du jeu à supprimer :</label>
        <input type="number" id="id_jeux" name="id_jeux" required>
        <div class="bt1">
            <input type="submit" value="Supprimer">
        </div>
        
    </form>
    </div>
</body>
</html>

