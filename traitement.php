<?php

if (isset($_POST['nom'])){
    $message = "Ce message vous a été envoyé via la page contact du site
     lauravedrine.fr
    Nom : ". $_POST["nom"]."
    Prenom : ". $_POST["prenom"]."
    Email : ". $_POST["mail"]."
    Message : ". $_POST["message"];

    $retour = mail("vedrinelaura4@gmail.com",
        "Mail PORTFOLIO",
        $message,
        "From:contact@portfolio.fr". "\r\n".
        "Reply-to:" . $_POST["mail"]);
    header('Location:https://lauravedrine.fr/contact.html');
}
