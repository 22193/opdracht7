<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nieuwsbrief verstiren</title>
</head>
<body>
<form method="post" action="verwerk_verzending.php">
    <label>Onderwerp:
        <input type="text" name="subject"> </label> <br>
    <label>Bericht:
        <textarea name="message" cols="100" rows="30"></textarea> <br>
    </label>
    <input type="submit" name="submit" value="VERSTUUR">
</form>
</body>
</html>