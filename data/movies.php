<?php
 require __DIR__ . '/actors.php';
 require __DIR__ . '/directors.php';
 require __DIR__ . '/../models/Movie.php';

$plot_1 = "Peter Parker (Tobey Maguire) è un giovane e goffo liceale che fa una vita tranquilla: lavora nel giornale della scuola come fotografo ed è innamorato di Mary Jane Watson (Kirsten Durst), la vicina di casa. Rimasto orfano da bambino, vive con i suoi zii Ben e May a New York.";

$plot_2 = "Iron Man, è un film del 2008 diretto da Jon Favreau. Tony Stark (Robert Downey Jr.), geniale quanto cinico inventore a capo delle Stark Industries, si reca in Afghanistan per presentare il nuovo missile da lui creato: Jericho. Al termine della presentazione, il convoglio diretto al jet privato di Stark viene attaccato da un gruppo di terroristi locali che rapiscono l’inventore, con l’intento di costringerlo a replicare la potente arma. A seguito dell’attentato Tony è stato colpito da un gran numero di schegge nel petto, formate dall\'esplosione della bomba, che potrebbero costargli la vita.";

$plot_3 = "La lotta tra il bene (gli Autobots) e il male (i Decepticons), dal pianeta Cybertron si è spostata sulla Terra dove milioni di anni fa è caduto il Cubo di Energon, il potere supremo capace di infondere la vita ai Transformers. Sam Witwicky - nipote dell'esploratore che per primo, durante una missione nel Circolo Polare Artico sul finire del 1800, ebbe a che fare con Megatron, il capo dei Decepticons - è l'unico che può aiutare Optimus Prime e i suoi Autobots a ritrovare il cubo e distruggerlo prima che finisca nelle mani dei nemici.";

// Creo un movie_1
$movie_1 = new Movie('Spider-Man', $plot_1, 'Action/Fantasy', 2002, $sam_raimi, $spider_man_actors);
// var_dump($movie_1);

// Creo un movie_2
$movie_2 = new Movie('Iron Man', $plot_2, 'Action/Fantasy', 2008, $jon_favreau, $transformer_actors);
// var_dump($movie_2);

// Creo un movie_3
$movie_3 = new Movie('Transformers', $plot_3, 'Action/Fantasy', 2007, $michael_bay, $iron_man_actors);
// var_dump($movie_3);