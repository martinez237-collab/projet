<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_evenement = $_POST['id_evenement'];
    $titre = $_POST['titre'];
    $duree = $_POST['duree'];
    $nombre_max = $_POST['nombre_max'];
    $description = $_POST['description'];
    $sql = "UPDATE evenements SET titre = :titre, duree = :duree, nombre_max = :nombre_max, 
            description = :description WHERE id_evenement = :id_evenement";

    $SQLStmt = $conn->prepare($sql);
    $SQLStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
    $SQLStmt->bindParam(':titre', $titre, PDO::PARAM_STR);
    $SQLStmt->bindParam(':duree', $duree, PDO::PARAM_STR);
    $SQLStmt->bindParam(':nombre_max', $nombre_max, PDO::PARAM_INT);
    $SQLStmt->bindParam(':description', $description, PDO::PARAM_STR);

    if ($SQLStmt->execute()) {
        echo "Événement modifié avec succès !";
    } else {
        echo " Erreur lors de la modification : " . implode(" | ", $SQLStmt->errorInfo());
    }
}
?>
