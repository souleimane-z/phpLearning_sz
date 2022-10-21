<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="exemple.css">
</head>

<body>
    <?php
    $musics = [
        [
            'album' => 'My Beautiful Dark Twisted Fantasy',
            'artist' => 'Kanye West',
            'year' => '2010',
            'cover' => 'https://m.media-amazon.com/images/I/71EYmWxcmdL._SL1400_.jpg',
        ],
        [
            'album' => '808 & Heartbreak',
            'artist' => 'Kanye West',
            'year' => '2008',
            'cover' => 'https://m.media-amazon.com/images/I/31OAA6-u6wL._SX355_.jpg',
        ],
        [
            'album' => 'Wish You Were Here',
            'artist' => 'Pink Floyd',
            'year' => '1975',
            'cover' => 'https://m.media-amazon.com/images/I/71m0ofUWYXL._SL1300_.jpg',
        ],
        [
            'album' => 'III',
            'artist' => 'BadBadNotGood',
            'year' => '2014',
            'cover' => 'https://critiquedesalon.files.wordpress.com/2014/07/badbadnotgood_iii.jpg',
        ],
        [
            'album' => 'James Blake',
            'artist' => 'James Blake',
            'year' => '2011',
            'cover' => 'https://m.media-amazon.com/images/I/81phc2SOhRL._SL1500_.jpg',
        ],
    ];
    function filterRecent($musics, $year)
    {
        $filteredAlbumsRecent = [];

        foreach ($musics as $music) {
            if ($music['year'] >= $year) {
                $filteredAlbumsRecent[] = $music;
            };
        };
        return $filteredAlbumsRecent;
    };
    function filterOld($musics, $year)
    {
        $filteredAlbumsOld = [];

        foreach ($musics as $music) {
            if ($music['year'] < $year) {
                $filteredAlbumsOld[] = $music;
            };
        };
        return $filteredAlbumsOld;
    };
    ?>

    
    <p class="script">
        Une liste d'albums a été faite sous forme de tableau (array). 
        Je veux filtrer, grâce à une fonction:
        <br>
        les albums sortis en 2009 ou après.
        <br>
        Ensuite ceux qui sont sortis avant 2009.
    </p>

    <table>
        <thead>
            <tr>
                <th colspan="2" id="tableHeader">📚 Albums released after 2009 📚</th>
            </tr>
        </thead>
    </table>

    <div class="container">
        <?php foreach (filterRecent($musics, 2009) as $music) : ?>

            <div class="content">
                <img src="<?= $music['cover']; ?>" alt="album cover" class="albumCover">

                <div class="infos">

                    <h3 class="album">
                        <?= $music['album']; ?>
                    </h3>

                    <h4 class="artist">
                        <?= $music['artist']; ?>
                    </h4>

                    <p class="year">
                        <?= $music['year']; ?>
                    </p>

                </div>
            </div>

        <?php endforeach; ?>

    </div>


    <table>
        <thead>
            <tr>
                <th colspan="2" id="tableHeader">
                    📚 Albums released before 2009 📚
                </th>
            </tr>
        </thead>
    </table>


    <div class="container">
        <?php foreach (filterOld($musics, 2009) as $music) : ?>

            <div class="content">
                <img src="<?= $music['cover']; ?>" alt="album cover" class="albumCover">

                <div class="infos">

                    <h3 class="album">
                        <?= $music['album']; ?>
                    </h3>

                    <h4 class="artist">
                        <?= $music['artist']; ?>
                    </h4>

                    <p class="year">
                        <?= $music['year']; ?>
                    </p>

                </div>
            </div>

        <?php endforeach; ?>

    </div>

</body>

</html>