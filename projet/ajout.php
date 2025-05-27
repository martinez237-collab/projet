<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_jeu = $_POST['nom_jeu'];
    $annee_sortie = $_POST['annee_sortie'];
    $genre = $_POST['genre'];
    $type = $_POST['type'];
    $description_courte = $_POST['description_courte'];
    $regles = $_POST['regles'];
    $visuel = $_POST['visuel'];

    $sql = "INSERT INTO jeux (nom_jeu, annee_sortie, genre, type, description_courte, regles, visuel) 
            VALUES (:nom_jeu, :annee_sortie, :genre, :type, :description_courte, :regles, :visuel)";
    $SQLStmt =  $conn->prepare($sql);
    $SQLStmt->bindParam(':nom_jeu', $nom_jeu);
    $SQLStmt->bindParam(':annee_sortie', $annee_sortie);
    $SQLStmt->bindParam(':genre', $genre);
    $SQLStmt->bindParam(':type', $type);
    $SQLStmt->bindParam(':description_courte', $description_courte);
    $SQLStmt->bindParam(':regles', $regles);
    $SQLStmt->bindParam(':visuel', $visuel);

    if ($SQLStmt->execute()) {
        echo "Jeu ajouté avec succès !";
    } else {
        echo "Erreur : " . $SQLStmt->errorCode();
    }
}
?>

