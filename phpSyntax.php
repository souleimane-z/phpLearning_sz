<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP syntax</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
        <?php 
        $greeting = "Hello,"; 
        $whoWhat= "La Concaténation";
            echo  "$greeting $whoWhat";
        ?>
    </h1>
    <p>
        <?php 
            echo "ceci est un paragraphe";
        ?>
    </p>
</body>
</html>