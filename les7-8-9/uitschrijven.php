<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uitschrijven</title>
</head>

<body>
    <h1>Nieuwsbrief</h1>
    <h2>Uitschrijven</h2>
    <a href="index.php">Klik om terug te keren naar de homepage</a> <br>
    <br>
    <form action="verwerk_uitschrijving.php" method="POST">
        <!-- E-mail -->
        <label for="E-mail">E-mail</label>
        <input type="mail" name="E-mail" id="E-mail">
        <br>

        <input type="submit" name="submit">
    </form>
</body>

</html>