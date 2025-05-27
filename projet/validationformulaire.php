<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification des champs obligatoires
    if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['statut_inscription']) || empty($_POST['id_evenement'])) {
        die("Erreur : Tous les champs obligatoires doivent être remplis !");
    }

    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $nombre_d_accompagnants = isset($_POST['nombre_d_accompagnants']) ? $_POST['nombre_d_accompagnants'] : 0;
    $statut_inscription = $_POST['statut_inscription'];
    $id_evenement = $_POST['id_evenement'];

    try {
        // Préparation et exécution de la requête SQL
        $sql = "INSERT INTO participant (nom, prenom, email, nombre_d_accompagnants, statut_inscription, id_evenement) 
                VALUES (:nom, :prenom, :email, :nombre_d_accompagnants, :statut_inscription, :id_evenement)";
        $SQLStmt = $conn->prepare($sql);
        $SQLStmt->bindParam(':nom', $nom);
        $SQLStmt->bindParam(':prenom', $prenom);
        $SQLStmt->bindParam(':email', $email);
        $SQLStmt->bindParam(':nombre_d_accompagnants', $nombre_d_accompagnants);
        $SQLStmt->bindParam(':statut_inscription', $statut_inscription);
        $SQLStmt->bindParam(':id_evenement', $id_evenement);
        if (!isset($_POST['id_evenement']) || empty($_POST['id_evenement'])) {
            die("Erreur : ID de l'événement est manquant !");
        }


        if ($SQLStmt->execute()) {
            echo "Inscription enregistrée avec succès !";
        } else {
            echo "Erreur : " . $SQLStmt->errorCode();
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'inscription : " . $e->getMessage();
    }
}
?>

