
<?php
include 'connexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_participant = $_POST["id_participant"];
    $id_evenement = $_POST["id_evenement"];
    $statut = $_POST["statut_inscription"];

    $sql = "INSERT INTO inscription (id_participant, id_evenement, statut_inscription) VALUES (:id_participant, :id_evenement, :statut_inscription)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
    $stmt->bindParam(':id_participant', $id_participant, PDO::PARAM_INT);
    $stmt->bindParam(':statut_inscription', $statut, PDO::PARAM_STR); 
    if ($stmt->execute()) {
        echo "Inscription enregistrée avec succès.";
    } else {
        echo "Erreur lors de l'inscription.";
    }
}
?>
