<?php
// gegevens opslaan in variablen
$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$mailadres = $_GET['mailadres'];

echo "<h2>Edit id $id</h2>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data</title>
</head>

<body>

    <form action="verwerk_edit.php" method="get">
        <!-- id -->
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <!-- voornaam -->
        <label for="voornaam">voornaam:
            <input type="text" name="voornaam" value="<?php echo $voornaam; ?>">
        </label>
        <!-- tussenvoegsel --><br>

        <label for="tussenvoegsel">tussenvoegsel:
            <input type="text" name="tussenvoegsel" value="<?php echo $tussenvoegsel; ?>">
        </label>
        <!-- achternaam --><br>

        <label for="achternaam">achternaam:
            <input type="text" name="achternaam" value="<?php echo $achternaam; ?>">
        </label>
        <!-- mailadres --><br>
        <label for="mailadres">mailadres:
            <input type="text" name="mailadres" value="<?php echo $mailadres; ?>">
        </label>

        <!-- submit button -->
        <input type="submit" name="submit" value="GO!">

    </form>
</body>

</html>