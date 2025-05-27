<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['id_evenement']) || empty($_POST['id_evenement'])) {
        die("Erreur : ID de l'événement non spécifié !");
    }

    $id_evenement = $_POST['id_evenement'];
    if (!$conn) {
        die(" Erreur de connexion à la base de données !");
    }

    $sql = "DELETE FROM evenements WHERE id_evenement = :id_evenement";
    $SQLStmt = $conn->prepare($sql);
    $SQLStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);

    if ($SQLStmt->execute()) {
        echo "Événement supprimé avec succès !";
    } else {
        echo " Erreur lors de la suppression : " . implode(" | ", $SQLStmt->errorInfo());
    }
}
?>
