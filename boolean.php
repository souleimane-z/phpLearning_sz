<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals & Booleans</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $name = "L'étranger";
        $read = true;

        if ($read){
            $message = "Tu as lu $name de Camus";
        } else {
            $message = "Tu n'as pas lu $name de Camus";
        };
    ?>

    <h1> 
        <?= $message; ?>
    </h1>

</body>
</html>