<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['id_jeux']) || empty($_POST['id_jeux'])) {
        die("Erreur : ID du jeu non spécifié !");
    }

    $id_jeux = $_POST['id_jeux'];

    $sqlDeleteResources = "DELETE FROM ressources WHERE id_jeux = :id_jeux";
    $SQLStmtResources = $conn->prepare($sqlDeleteResources);
    $SQLStmtResources->bindParam(':id_jeux', $id_jeux, PDO::PARAM_INT);
    $SQLStmtResources->execute();
    $sqlDeleteJeu = "DELETE FROM jeux WHERE id_jeux = :id_jeux";
    $SQLStmtJeu = $conn->prepare($sqlDeleteJeu);
    $SQLStmtJeu->bindParam(':id_jeux', $id_jeux, PDO::PARAM_INT);

    if ($SQLStmtJeu->execute()) {
        echo "Jeu supprimé avec succès !";
    } else {
        echo " Erreur lors de la suppression : " . implode(" | ", $SQLStmtJeu->errorInfo());
    }
}
?>



