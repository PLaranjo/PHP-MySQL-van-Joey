<?php
// 0. uitlezen van de POST-array
$subject = $_POST['subject'];
$message = $_POST['message'];

// 1. Connectie maken met de database
$dbc = mysqli_connect('localhost', 'root', '', 'mijnschool') or die('ERROR CONNECTING TO THE DATABASE.');

// 2. Kijken in de database en alle mailadressen tevoorschijn halen
$query = 'SELECT mailadres FROM les7_nieuwsbrief';
$result = mysqli_query($dbc, $query) or die('ERROR QUERYING.');

// 3. loopje waarin een bericht word verzonden
while ($row = mysqli_fetch_array($result)) {
    echo 'mail verzonden naar: ' . $row['mailadres'] . '<br>';
    // Variabelen voor de mail
    $to = $row['mailadres'];
    $headers = 'From: schmitz@ma-web.nl';
    mail($to, $subject, $message, $headers);
}
echo 'klaar met verzenden';
// 4. database uitschakelen
