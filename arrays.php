<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Recommended Books</h1>
    <?php 
        $books = [
            "Catch 22",
            "1984",
            "Complot Contre l'Amérique",
            "Blade Runner",
            "Le Maître du Haut Château"
        ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book; ?>™</li> 
        
        <?php endforeach; ?>
    </ul>


</body>
</html>