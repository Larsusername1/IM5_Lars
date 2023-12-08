<?php
$to_email = 'lars.hanselmann@hotmail.com';
$subject = 'Kontaktformular - Lars Hanselmann Filmwerk';
$body = $_POST['message'];
$headers = 'From: ' . $_POST['email'];

if (mail($to_email, $subject, $body, $headers)) {
    echo '<!DOCTYPE html>
    <html lang="de">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="Erstellung, Gestaltung von multimedialen Werken. Der Fokus liegt auf audiovisuellen Beiträgen, sprich Filmformate wie Dokumentation, Reportage, Nachricht, Eventfilm sowie Werbefilm. Diese können real (nonfiktional) sowie erfunden (fiktional) sein.">
    
        <title>Lars Hanselmann Filmwerk | Kontakt</title>
    
        <link rel="stylesheet" href="css/style.css">
    
        <script src="js/skript.js"></script>
    
    </head>
    
    <body>
        <!-- Studentische Arbeit im Rahmen der Bachelorthesis MMP -->
        <header class="site-header">
            <div class="Banner">
                <img src="img/Banner.jpg" alt="Banner">
            </div>
        </header>

        <!-- Menue -->
        <nav class="site-nav">
            <ul class="site-nav-list">
                <li><a href="index.html">Startseite</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="uebermich.html">Über mich</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
            </ul>
        </nav>
        <!-- Ende Menue -->
    
        <!-- Erfolgsmeldung -->
        <div class="success-message">
            <p>Vielen Dank! Ihre Nachricht wurde erfolgreich gesendet.</p>
        </div>
    
        <!-- Footer -->
        <footer class="site-footer">
            <a href="#top">Nach oben</a>
        </footer>
    
        <!-- JavaScript-Weiterleitung nach 5 Sekunden -->
        <script>
            setTimeout(function () {
                window.location.href = "https://lhfilmwerk.ch/kontakt.html";
            }, 5000); // 5000 Millisekunden entsprechen 5 Sekunden
        </script>
    
    </body>
    
    </html>';
} else {
    echo "Fehler beim Versenden der E-Mail. Bitte versuchen Sie es später erneut.";
}
?>
