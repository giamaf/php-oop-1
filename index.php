<?php

require_once __DIR__ . '/models/Actor.php';
require_once __DIR__ . '/models/Director.php';
require_once __DIR__ . '/models/Movie.php';
require __DIR__ . '/data/movies.php';

$page_label = 'PHP Movies';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_label ?></title>

    <!-- Bootstrap 5 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />

    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <section id="movies" class="my-4">

        <div class="container">
            <div class="row">

                <!-- Movie Card -->
                <?php foreach ($movies as $movie) : ?>
                <div class="col">
                    <div class="card my-2">
                        <img src="<?= $movie->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie->title ?></h5>
                            <p class="plot"><?= $movie->cutPlot() ?></p>
                            <p class="director"><b>Regia: </b><?= $movie->director->full_name ?></p>
                            <p class="actors"><b>Attori:</b>
                                <?= "{$movie->actors->main_actors[0]}, {$movie->actors->main_actors[1]}" ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach  ?>

            </div>
        </div>

    </section>
</body>

</html>