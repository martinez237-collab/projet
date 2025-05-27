<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout de jeu</title>
    <style>
        body { font-family: Arial, sans-serif; }
        form { width: 300px; margin: auto; }
        label, input, textarea { display: block; width: 100%; margin-bottom: 10px; }
    </style>
</head>
<body>

    <h2>Ajouter un jeu</h2>
    <form action="ajout.php" method="POST">
        <label>Nom du jeu :</label>
        <input type="text" name="nom_jeu" required>

        <label>Année de sortie :</label>
        <input type="number" name="annee_sortie" required min="1900" max="2100">

        <label>Genre :</label>
        <input type="text" name="genre" required>

        <label>Type :</label>
        <input type="text" name="type" required>

        <label>Description courte :</label>
        <textarea name="description_courte"></textarea>

        <label>Règles :</label>
        <textarea name="regles"></textarea>

        <label> url("jeu1")</label>
        <input type="text" name="visuel" required>

        <button type="submit">Ajouter</button>
    </form>

</body>
</html>
