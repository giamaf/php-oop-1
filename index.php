<?php
class Actor
{
    // Proprietà
    // Variabili d'istanza
public $main_actor_one;
public $main_actor_two;

// Costruttore
//! Permette di eseguire azioni nel momento in cui viene creata l'istanza della classe
public function __construct(string $main_actor_one, string $main_actor_two)
{
    $this->main_actor_one = $main_actor_one;
    $this->main_actor_two = $main_actor_two;
}
}

// Creo un attore protagonista e un attore secondario
$main_actor_1 = new Actor('Tobey Maguire', 'Kirsten Dunst');

// Creo un attore protagonista e un attore secondario
$main_actor_2 = new Actor('Shia LaBeouf', 'Megan Fox');

// Creo un attore protagonista e un attore secondario
$main_actor_3 = new Actor('Robert Downey Jr.', 'Gwyneth Paltrow');


class Director
{
    // Proprietà
    // Variabili d'istanza
public $full_name;

// Costruttore
//! Permette di eseguire azioni nel momento in cui viene creata l'istanza della classe
public function __construct(string $full_name)
{
$this->full_name = $full_name;
}

}

// Creo un regista
$director_1 = new Director('Sam Raimi');
//  var_dump($director_1);

// Creo un secondo regista
$director_2 = new Director('Jon Favreau');
//  var_dump($director_2);

// Creo un terzo regista
$director_3 = new Director('Michael Bay');
//  var_dump($director_3);

//! ---------------------------------------------

class Movie
{
    // Proprietà
    // Variabili d'istanza
public $title;
public $plot;
public $genre;
public $year;
public $director;
public $actors;


//! Permette di eseguire az// Costruttoreioni nel momento in cui viene creata l'istanza della classe
public function __construct($title, $plot, $genre, $year, Director $director, Actor $actors)
{
    $this->title = $title;
    $this->plot = $plot;
    $this->genre = $genre;
    $this->year = $year;
    $this->director = $director;
    $this->actors = $actors;
    $this->createMovie();
}

  public function createMovie()
  {
    echo "<strong>Titolo:</strong> $this->title<br>
    <strong>Trama:</strong> $this->plot<br>
    <strong>Genere:</strong> $this->genre<br>
    <strong>Anno:</strong> $this->year<br>
    <strong>Regia:</strong> {$this->director->full_name}<br>
    <strong>Attori:</strong> {$this->actors->main_actor_one}, {$this->actors->main_actor_two}<hr>";
  }
}

$plot_1 = "Peter Parker (Tobey Maguire) è un giovane e goffo liceale che fa una vita tranquilla: lavora nel giornale della scuola come fotografo ed è innamorato di Mary Jane Watson (Kirsten Durst), la vicina di casa. Rimasto orfano da bambino, vive con i suoi zii Ben e May a New York.";

$plot_2 = "Iron Man, è un film del 2008 diretto da Jon Favreau. Tony Stark (Robert Downey Jr.), geniale quanto cinico inventore a capo delle Stark Industries, si reca in Afghanistan per presentare il nuovo missile da lui creato: Jericho. Al termine della presentazione, il convoglio diretto al jet privato di Stark viene attaccato da un gruppo di terroristi locali che rapiscono l’inventore, con l’intento di costringerlo a replicare la potente arma. A seguito dell’attentato Tony è stato colpito da un gran numero di schegge nel petto, formate dall\'esplosione della bomba, che potrebbero costargli la vita.";

$plot_3 = "La lotta tra il bene (gli Autobots) e il male (i Decepticons), dal pianeta Cybertron si è spostata sulla Terra dove milioni di anni fa è caduto il Cubo di Energon, il potere supremo capace di infondere la vita ai Transformers. Sam Witwicky - nipote dell'esploratore che per primo, durante una missione nel Circolo Polare Artico sul finire del 1800, ebbe a che fare con Megatron, il capo dei Decepticons - è l'unico che può aiutare Optimus Prime e i suoi Autobots a ritrovare il cubo e distruggerlo prima che finisca nelle mani dei nemici.";

// Creo un movie1
$movie_1 = new Movie('Spider-Man', $plot_1, 'Action/Fantasy', 2002, $director_1, $main_actor_1);
// var_dump($movie_1);

// Creo un movie2
$movie_2 = new Movie('Iron Man', $plot_2, 'Action/Fantasy', 2008, $director_2, $main_actor_2);
// var_dump($movie_2);

// Creo un movie3
$movie_3 = new Movie('Transformers', $plot_3, 'Action/Fantasy', 2007, $director_3, $main_actor_3);
// var_dump($movie_3);