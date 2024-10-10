<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "dieunnuetzeseite@gmail.com";
    $subject = "Neue Nachricht von Kontaktformular";
    $body = "Name: $name\nE-Mail: $email\nNachricht:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Nachricht erfolgreich gesendet!";
    } else {
        echo "Fehler beim Senden der Nachricht.";
    }
}
?>
