<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>beheren</title>
</head>

<body>
    <?php
    // 1. Connectie maken met de database
    $dbc = mysqli_connect('localhost', 'root', '', 'mijnschool') or die('ERROR CONNECTING TO THE DATABASE.');

    // 2. Kijken in de database en alle gegevens tevoorschijn halen
    $query = 'SELECT * FROM les7_nieuwsbrief';
    $result = mysqli_query($dbc, $query) or die('ERROR QUERYING.');

    echo '<table>';

    // 3. loopje waarin alle mailadressen in beeld word gebracht
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $voornaam = $row['voornaam'];
        $tussenvoegsel = $row["tussenvoegsel"];
        $achternaam = $row["achternaam"];
        $mailadres = $row["mailadres"];

        echo '<tr>';
        echo "<td>$id</td>";
        echo "<td>$voornaam</td>";
        echo "<td>$tussenvoegsel</td>";
        echo "<td>$mailadres</td>";

        echo '<td>';
        echo '<a href="delete.php?id=' . $id . '">DELETE</a>';
        echo '</td>';
        echo '<td>';
        echo '<a href="edit.php?id=' . $id . '&voornaam=' . $voornaam . '&tussenvoegsel=' . $tussenvoegsel . '&achternaam=' . $achternaam . '&mailadres=' . $mailadres . '">EDIT</a>';
        echo '</td>';

        echo '</tr>';
    }

    echo '</table>';

    // 4. database uitschakelen
    ?>
</body>

</html>