<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Opdracht 3</title>
</head>

<body>
    <?php
    $VoorNaam = $_POST['Vnaam'];
    $AchterNaam = $_POST['Anaam'];
    $Email = $_POST['Email'];
    $LeefTijd = $_POST['Leeftijd'];

    // Looks at the value of the radio button to see if you can drink 
    if ($LeefTijd == '18-') {
        $Drinken = "U mag nog niet drinken";
    } else {
        $Drinken = "U mag drinken";
    }

    echo 'Hallo ' . $VoorNaam . ' ' . $AchterNaam . ' ' . $Drinken . '<br>' . $Email;

    ?>

</body>

</html>