<?php
 require __DIR__ . '/actors.php';
 require __DIR__ . '/directors.php';
 require_once __DIR__ . '/../models/Movie.php';


 $image_1 = 'https://images-3.rakuten.tv/storage/snapshot/shot/02353693-0640-41e4-89f3-c4cb9484c985-snapshot-1590664528-width936-quality90.jpeg';
 
$plot_1 = "Peter Parker (Tobey Maguire) è un giovane e goffo liceale che fa una vita tranquilla: lavora nel giornale della scuola come fotografo ed è innamorato di Mary Jane Watson (Kirsten Durst), la vicina di casa. Rimasto orfano da bambino, vive con i suoi zii Ben e May a New York.";

//! ----------------------------------------------------------

$image_2 = 'https://images-0.rakuten.tv/storage/snapshot/shot/3cf247b1-8c8b-40dd-a7a5-69f3f3e10f54-snapshot-1590662595-width936-quality15.jpeg';

$plot_2 = "La lotta tra il bene (gli Autobots) e il male (i Decepticons), dal pianeta Cybertron si è spostata sulla Terra dove milioni di anni fa è caduto il Cubo di Energon, il potere supremo capace di infondere la vita ai Transformers. Sam Witwicky - nipote dell'esploratore che per primo, durante una missione nel Circolo Polare Artico sul finire del 1800, ebbe a che fare con Megatron, il capo dei Decepticons - è l'unico che può aiutare Optimus Prime e i suoi Autobots a ritrovare il cubo e distruggerlo prima che finisca nelle mani dei nemici.";

//! ----------------------------------------------------------

$image_3 = 'https://playblog.it/wp-content/uploads/2018/10/PCTV-1660000038-hcdl.jpg';

$plot_3 = "Iron Man, è un film del 2008 diretto da Jon Favreau. Tony Stark (Robert Downey Jr.), geniale quanto cinico inventore a capo delle Stark Industries, si reca in Afghanistan per presentare il nuovo missile da lui creato: Jericho. Al termine della presentazione, il convoglio diretto al jet privato di Stark viene attaccato da un gruppo di terroristi locali che rapiscono l’inventore, con l’intento di costringerlo a replicare la potente arma. A seguito dell’attentato Tony è stato colpito da un gran numero di schegge nel petto, formate dall\'esplosione della bomba, che potrebbero costargli la vita.";

//! ----------------------------------------------------------

// Creo un movie_1
$movie_1 = new Movie($image_1, 'Spider-Man', $plot_1, 'Action/Fantasy', 2002, $sam_raimi, $spider_man_actors);
// var_dump($movie_1);

// Creo un movie_2
$movie_2 = new Movie($image_2, 'Transformers', $plot_2, 'Action/Fantasy', 2008, $jon_favreau, $transformer_actors);
// var_dump($movie_2);

// Creo un movie_3
$movie_3 = new Movie($image_3, 'Iron Man', $plot_3, 'Action/Fantasy', 2007, $michael_bay, $iron_man_actors);
// var_dump($movie_3);

// Creo un array con tutti i movies
$movies = [$movie_1, $movie_2, $movie_3];