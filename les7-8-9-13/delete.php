<?php
// id opslaan in eenv ariable
$id = $_GET['id'];
// connecting to the database
$dbc = mysqli_connect('localhost', 'root', '', 'mijnschool',) or die('ERROR CONNECTING TO THE DATABASE.');

// query voor het verwijderen van de id variable
$query = "DELETE FROM les7_nieuwsbrief WHERE id = '$id'";

// query uitvoeren (DELETING de id)
$result = mysqli_query($dbc, $query) or die('ERROR DELETING');

// stuurt de gebruiker terug naar de vorige pagina
header("location: beheren.php");
