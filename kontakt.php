<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Empfänger-E-Mail-Adresse
    $to_email = 'lars.hanselmann@hotmail.com'; // Hier deine tatsächliche E-Mail-Adresse eintragen

    // Betreff der E-Mail
    $subject = 'Neue Kontaktanfrage';

    // Formulardaten abrufen
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // E-Mail-Inhalt
    $body = "Name: $name\n";
    $body .= "E-Mail: $email\n";
    $body .= "Nachricht:\n$message";

    // Zusätzliche Header
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Versuche, die E-Mail zu senden
    if (mail($to_email, $subject, $body, $headers)) {
        echo "Vielen Dank! Ihre Nachricht wurde erfolgreich gesendet.";
        echo '<script>
                setTimeout(function(){
                    window.location.href = "https://lhfilmwerk.ch/kontakt.html";
                }, 5000); // 5000 Millisekunden entsprechen 5 Sekunden
              </script>';
    } else {
        echo "Fehler beim Versenden der E-Mail. Bitte versuchen Sie es später erneut.";
    }
}
?>