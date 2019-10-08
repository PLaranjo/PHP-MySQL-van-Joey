<?php
// mail variabelen aanmaken
$to = 'patrick.laranjoG@gmail.com';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['from'];

// mail versturen
mail($to, $subject, $message, $headers) or die('Error mailing.');

// Bevestiging voor de gebruiker
echo 'Uw mail is verstuurd.';
