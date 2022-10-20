<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Recommended Books Using PHP</h1>
    <?php 
        $books = [
            [ 
                'title' => "Catch 22",
                'author' => "Joseph HELLER",
                'purchaseUrl' => "https://www.leslibraires.fr/article/8041853-catch-22-heller-joseph-vintage",
            ],
            [
                'title' => "1984",
                'author' => "George ORWELL",
                'purchaseUrl' => "https://www.leslibraires.fr/livre/13630007-1984-george-orwell-gallimard",

            ],
            [
                'title' => "Complot Contre l'Amérique",
                'author' => "Philip K. DICK",
                'purchaseUrl' => "https://www.leslibraires.fr/livre/15304729-le-complot-contre-l-amerique-philip-roth-gallimard",
            ],
        ];
    ?>

        <!-- <ul>
            <?php foreach ($books as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl']; ?>" target="_blank" rel="noopener">
                    <?= $book['title']; ?>
                    </a> - By <?= $book['author']; ?>
                </li>
            <?php endforeach; ?>
        </ul> -->

        <table>
    <thead>
        <tr>
            <th colspan="2" id="tableHeader">📚Click on the title to find where to buy the book!📚</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book) : ?>
        <tr>
            <td>
                <a href="<?= $book['purchaseUrl']; ?>" target="_blank" rel="noopener">
                    <?= $book['title']; ?>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                - By <?= $book['author']; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    
</body>
</html>