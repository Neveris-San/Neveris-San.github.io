<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecter les données du formulaire
    $date = $_POST['date'];
	$nom = $_POST['nom'];
    $tournee = $_POST['tournee'];
    $plaque = $_POST['plaque'];
    $carte_essence = $_POST['carte_essence'];
    $heures_sup = $_POST['heures_sup'];
    $commentaire = $_POST['commentaire'];

    // Adresse email de destination
    $to = "severin.prebois@gmail.com";
    
    // Sujet de l'email
    $subject = "Suivi quotidien de $nom";

    // Contenu de l'email
    $message = "
    <html>
    <head>
        <title>Suivi quotidien</title>
    </head>
    <body>
        <p><strong>Date :</strong> $date</p>
		<p><strong>Nom :</strong> $nom</p>
        <p><strong>Numéro de tournée :</strong> $tournee</p>
        <p><strong>Plaque d'immatriculation :</strong> $plaque</p>
        <p><strong>Carte essence prise aujourd'hui :</strong> $carte_essence</p>
        <p><strong>Heures supplémentaires :</strong> $heures_sup</p>
        <p><strong>Commentaire :</strong> $commentaire</p>
    </body>
    </html>
    ";

    // En-têtes de l'email
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Formulaire envoyé avec succès.";
    } else {
        echo "Échec de l'envoi du formulaire.";
    }
}
?>
