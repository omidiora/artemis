<?php
    session_start();
    require_once "GoogleAPI/vendor/autoload.php";
    $gClient = new Google_Client();
    $gClient->setClientId("866083326573-ukjs0givs2rtfvkfasa11orec6mi008p.apps.googleusercontent.com");
    $gClient->setClientSecret("ME_EnW0JaWiDG15Tud8_6g4v");
    $gClient->setApplicationName("Artemis");
    $gClient->setRedirectUri("http://localhost/Artemis/index.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>