<?php
// POST ARRAY UITLEZEN
$voornaam = $_POST['Voornaam'];
$tussenvoegsel = $_POST['Tussenvoegsel'];
$achternaam = $_POST['Achternaam'];
$mailadres = $_POST["E-mail"];

// DATA IN DATABASE STOPPEN
// 1. VERBINDING MAKEN MET DE DATABASE
$dbc = mysqli_connect('localhost', 'root', '', 'mijnschool') or die('ERROR CONNECTING.');
// 2. OPDRACHT (QUERY) SCHRIJVEN VOOR DE DATABASE
$query = "INSERT INTO les7_nieuwsbrief VALUES (0,'$voornaam', '$tussenvoegsel', '$achternaam', '$mailadres')";
// 3. QUERY UITVOEREN 
$result = mysqli_query($dbc, $query) or die('ERROR QUERYING');
// 4. VERBINDING VERBREKEN
mysqli_close($dbc);

// BEVESTIGEN DAT DE DATA IN DATABASE STAAT
if ($result) {
    echo 'de volgende gegevens zijn toegevoegd aan de database: <br>';
    echo $voornaam . '<br>' . $tussenvoegsel . '<br>' . $achternaam . '<br>' . $mailadres;
} else {
    echo 'Sorry er is iets misgegaan. probeer het opnieuw.';
}
