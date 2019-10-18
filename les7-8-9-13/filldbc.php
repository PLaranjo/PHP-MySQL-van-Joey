<?php
$dbc = mysqli_connect('localhost', 'root', '', 'mijnschool') or die('ERROR CONECTING TO THE DATABASE.');
$voornaam = 'test';
$tussenvoegsel = 'de';
$achternaam = 'Database';
$mailadres = 'zomaar@niks.nl';
$query = "INSERT INTO les7_nieuwsbrief VALUES (0,'$voornaam', '$tussenvoegsel', '$achternaam', '$mailadres')";

for ($i = 0; $i < 10; $i++) {
    $result = mysqli_query($dbc, $query) or die('ERROR QUERYING.');
}
