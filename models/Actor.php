<?php

class Actor
{
    // Proprietà
    // Variabili d'istanza
public $main_actors;

// Costruttore
//! Permette di eseguire azioni nel momento in cui viene creata l'istanza della classe
public function __construct(array $main_actors)
{
    $this->main_actors = $main_actors;
}
}