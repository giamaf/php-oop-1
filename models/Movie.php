<?php

class Movie
{
    // Proprietà
    // Variabili d'istanza
public $image;
public $title;
public $plot;
public $genre;
public $year;
public $director;
public $actors;

//! Permette di eseguire az// Costruttoreioni nel momento in cui viene creata l'istanza della classe
public function __construct($image, $title, $plot, $genre, $year, Director $director, Actor $actors)
{
    $this->image = $image;
    $this->title = $title;
    $this->plot = $plot;
    $this->genre = $genre;
    $this->year = $year;
    $this->director = $director;
    $this->actors = $actors;
    // $this->createMovie();
}

public function cutPlot()
{
  return substr($this->plot, 0, 195) . '...';
}

  // public function createMovie()
  // {
  //   echo "<strong>Titolo:</strong> $this->title<br>
  //   <strong>Trama:</strong> $this->plot<br>
  //   <strong>Genere:</strong> $this->genre<br>
  //   <strong>Anno:</strong> $this->year<br>
  //   <strong>Regia:</strong> {$this->director->full_name}<br>
  //   <strong>Attori:</strong> {$this->actors->main_actors[0]}, {$this->actors->main_actors[1]}<hr>";
  // }
}