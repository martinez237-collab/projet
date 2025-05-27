<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_jeux = $_POST['id_jeux'];
    $nom_jeu = $_POST['nom_jeu'];
    $annee_sortie = $_POST['annee_sortie'];
    $genre = $_POST['genre'];
    $type = $_POST['type'];
    $description_courte = $_POST['description_courte'];
    $regles = $_POST['regles'];
    $visuel = $_POST['visuel'];


    $sql = "UPDATE jeux SET nom_jeu = :nom_jeu, annee_sortie = :annee_sortie, 
            type = :type, genre = :genre, description_courte = :description_courte, 
            regles = :regles, visuel = :visuel WHERE id_jeux = :id_jeux";

    $SQLStmt = $conn->prepare($sql);
    $SQLStmt->bindParam(':id_jeux', $id_jeux, PDO::PARAM_INT);
    $SQLStmt->bindParam(':nom_jeu', $nom_jeu, PDO::PARAM_STR);
    $SQLStmt->bindParam(':annee_sortie', $annee_sortie, PDO::PARAM_INT);
    $SQLStmt->bindParam(':genre', $genre, PDO::PARAM_STR);
    $SQLStmt->bindParam(':type', $type, PDO::PARAM_STR);
    $SQLStmt->bindParam(':description_courte', $description_courte, PDO::PARAM_STR);
    $SQLStmt->bindParam(':regles', $regles, PDO::PARAM_STR);
    $SQLStmt->bindParam(':visuel', $visuel, PDO::PARAM_STR);


    if ($SQLStmt->execute()) {
        echo "Jeu mis à jour avec succès !";
    } else {
        echo "Erreur lors de la mise à jour : " . implode(", ", $SQLStmt->errorInfo());
    }
}
?>


