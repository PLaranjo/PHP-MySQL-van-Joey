<?php
$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$mailadres = $_GET['mailadres'];

// connect to the database
$dbc = mysqli_connect('localhost', 'root', '', 'mijnschool',) or die('ERROR CONNECTING TO THE DATABASE.');

// query voor het editen van de id variable
$query = ("UPDATE les7_nieuwsbrief ");
$query .= "SET voornaam = '$voornaam', tussenvoegsel ='$tussenvoegsel', achternaam = '$achternaam', mailadres = '$mailadres'";
$query .= "WHERE id = '$id'";

//query uitvoeren
$result = mysqli_query($dbc, $query) or die('ERROR UPDATING');

// stuurt de gebruiker terug naar de vorige pagina
header("location: beheren.php");
