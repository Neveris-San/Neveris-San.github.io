<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date'];
    $nom_prenom = $_POST['nom_prenom'];
    $tournee = $_POST['tournee'];
    $immatriculation = $_POST['immatriculation'];
    $carte_essence = $_POST['carte_essence'];
    $heures_sup = $_POST['heures_sup'];
    $commentaires = $_POST['commentaires'];

    $to = "destinataire@example.com"; // Remplacez par l'adresse e-mail du destinataire
    $subject = "Formulaire de suivi quotidien - $date";
    $message = "
        Date : $date\n
        Nom et Prénom : $nom_prenom\n
        Tournée : $tournee\n
        Immatriculation du véhicule : $immatriculation\n
        Carte essence prise : $carte_essence\n
        Heures supplémentaires : $heures_sup\n
        Commentaires : $commentaires
    ";

    $headers = "From: suivi-quotidien@example.com"; // Remplacez par l'adresse e-mail d'envoi

    if (mail($to, $subject, $message, $headers)) {
        echo "Formulaire envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du formulaire.";
    }
}
?>
