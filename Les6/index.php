<?php

// CONNECTIE MAKEN MET DE DATABASE
$dbc = mysqli_connect('Localhost', 'root', '', 'mijnschool') or die('Error connecting.');

// QUERY SCHRIJVEN
$query = "SELECT * FROM klasgenoten";

// QUERY UITVOEREN
$result = mysqli_query($dbc, $query) or die('Error querying.');

// REGEL VOOR REGEL IN BEELD BRENGEN
while ($row = mysqli_fetch_array($result)) {
    echo $row['klasgenoot_id'] . ' / ' . $row['voornaam'] . ' / ' . $row['tussenvoegsel'] . ' / ' . $row['achternaam'] . '<br>' . ' / ' . $row['woonplaats'];
}
