<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mail versturen</title>
</head>

<body>
    <form action="verwerk_verzending.php" method="POST">
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject"><br><br>
        <label for="message">message</label>
        <textarea name="message" id="message" cols="20" rows="5"></textarea><br><br>
        <input type="submit" name="submit" value="SEND">
    </form>
</body>

</html>