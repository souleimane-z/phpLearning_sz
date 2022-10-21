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
    <div>
        <h1>Recommended Books Using PHP</h1>
        <p style="text-align: center; font-size:15px;">(Asso-Arrays)</p>
    </div>
    <?php $img = 'https://fivebooks.com/app/uploads/2020/08/most-recommended-books-share-image.jpg';
            
    $books = [
        [
            'title' => "Catch 22",
            'author' => "Joseph HELLER",
            'purchaseUrl' => "https://www.leslibraires.fr/article/8041853-catch-22-heller-joseph-vintage",
            'year' => "1953",
        ],
        [
            'title' => "1984",
            'author' => "George ORWELL",
            'purchaseUrl' => "https://www.leslibraires.fr/livre/13630007-1984-george-orwell-gallimard",
            'year' => "1949",
        ],
        [
            'title' => "Complot Contre l'Amérique",
            'author' => "Philip ROTH",
            'purchaseUrl' => "https://www.leslibraires.fr/livre/15304729-le-complot-contre-l-amerique-philip-roth-gallimard",
            'year' => "2004",
        ],
        [
            'title' => "Blade Runner",
            'author' => "Philip K. DICK",
            'purchaseUrl' => "https://www.leslibraires.fr/livre/20057768-blade-runner-les-androides-revent-ils-de-mouto--philip-k-dick-j-ai-lu",
            'year' => "1968",
        ],
        [
            'title' => "Le Maître du Haut Château",
            'author' => "Philip K. DICK",
            'purchaseUrl' => "https://www.leslibraires.fr/livre/20224310-le-maitre-du-haut-chateau-philip-k-dick-j-ai-lu",
            'year' => "1962",
        ],
    ];
    ?>
    <img src="<?= $img; ?>" alt="banner">

    <table>
        <thead>
            <tr>
                <th colspan="2" id="tableHeader">📚Click on the title to find where to buy the book!📚</th>
            </tr>
        </thead>
    </table>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>" target="_blank" rel="noopener">
                    <?= $book['title']; ?>
                </a> 
                 - <?= $book['author']; ?>
                <small>(<?= $book['year']; ?>)</small>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>