<?php
// FORMULIER UITLEZEN (DATA BINNENHALEN)
$mailadres = $_POST['E-mail'];

// CONNECTIE MAKEN MET DE DATABASE 
$dbc = mysqli_connect('localhost', 'root', '', 'mijnschool') or die('ERROR CONECTING TO THE DATABASE.');

// QUERY SCHRIJVEN VOOR ZOEKEN NAAR DATA 
$query = "SELECT * FROM les7_nieuwsbrief WHERE mailadres = '$mailadres'";

// QUERY UITVOEREN
$result = mysqli_query($dbc, $query) or die('ERROR QUERYING (SELECT).');

// TELLEN HOEVEEL REGELS WE NU HEBBEN
$number_of_rows = mysqli_num_rows($result);

//TESTEN OF ER REGELS ZIJN EN DAAR CONCLUSIES AAN VERBINDEN 
if ($number_of_rows == 0) {
    echo 'helaas, het mailadres' . $mailadres . ' staat niet in de database. <br>';
    echo '<a href="uitschrijven.php">Klik hier om nogmaals te proberen...</a>';
    exit();
} else {
    echo 'Hoera! het mailadres is gevonden ' . $mailadres . ' is gevonden in de database!';
}

// QUERY SCHRIJVEN VOOR HET VERWIJDEREN VAN DATA
$query = "DELETE FROM les7_nieuwsbrief WHERE mailadres ='$mailadres'";

// QUERYING UITVOEREN
$result = mysqli_query($dbc, $query) or die('ERROR QUERYING (DELET).');

// CONECTIE VERBREKEN
mysqli_close($dbc);

// VERSLAG DOEN VAN HET RESULTAAT
echo ' Het mailadres ' . $mailadres . ' is verwijdered uit de data base! <br>';
echo '<a href="index.php">Klik om terug te keren naar de homepage</a> <br>';
