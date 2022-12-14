<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sommaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="index">
    <?php 
        $titles = [
            [
                'title' => "Syntaxe",
                'file' => "phpSyntax.php",
            ],
            [
                'title' => "Booleans & Conditionnelles",
                'file' => "boolean.php",
            ],
            [
                'title' => "Arrays",
                'file' => "arrays.php",
            ],
            [
                'title' => "Associative Arrays",
                'file' => "associativeArrays.php",
            ],
            [
                'title' => "Functions & Filters",
                'file' => "functionsFilters.php",
            ],
            [
                'title' => "Filters EXAMPLE",
                'file' => "functionsFilters_example.php",
            ],
        ]
    ?>

    <h1 class="h1">Sommaire</h1>

    <ul>
    <?php foreach ($titles as $title) : ?>
        <li class="li">
            <a href="<?= $title['file']; ?>" target="_blank" rel="noopener">
            <?= $title['title']; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>