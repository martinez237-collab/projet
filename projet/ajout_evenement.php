<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $duree = $_POST['duree'];
    $nombre_max = $_POST['nombre_max'];
    $description = $_POST['description'];

   
    $sql = "INSERT INTO evenements (titre, duree, nombre_max, description) 
            VALUES (:titre, :duree, :nombre_max, :description)";
    
    $SQLStmt = $conn->prepare($sql);
    $SQLStmt->bindParam(':titre', $titre, PDO::PARAM_STR);
    $SQLStmt->bindParam(':duree', $duree, PDO::PARAM_STR);
    $SQLStmt->bindParam(':nombre_max', $nombre_max, PDO::PARAM_INT);
    $SQLStmt->bindParam(':description', $description, PDO::PARAM_STR);

    if ($SQLStmt->execute()) {
        echo " Événement ajouté avec succès !";
    } else {
        echo " Erreur lors de l'ajout : " . implode(" | ", $SQLStmt->errorInfo());
    }
}
?>
