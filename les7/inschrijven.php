<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inschrijven</title>
</head>

<body>
    <h1>Nieuwsbrief</h1>
    <h2>Registreren</h2>
    <a href="index.php">Klik om terug te keren naar de homepage</a> <br>
    <br>
    <form action="verwerk_inschrijving.php" method="POST">
        <!-- Voornaam -->
        <label for="Voornaam">Voornaam</label>
        <input type="text" name="Voornaam" id="Voornaam">
        <br>

        <!-- Tussenvoegsel -->
        <label for="Tussenvoegsel">Tussenvoegsel</label>
        <input type="text" name="Tussenvoegsel" id="Tussenvoegsel">
        <br>

        <!-- Achternaam -->
        <label for="Achternaam">Achternaam</label>
        <input type="text" name="Achternaam" id="Achternaam">
        <br>

        <!-- E-mail -->
        <label for="E-mail">E-mail</label>
        <input type="mail" name="E-mail" id="E-mail">
        <br>

        <input type="submit" name="submit">
    </form>
</body>

</html>