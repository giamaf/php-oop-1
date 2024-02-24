<?php

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