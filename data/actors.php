<?php
require __DIR__ . '/../models/Actor.php';

// Creo attori Spider-Man
$spider_man_actors = new Actor(['Tobey Maguire', 'Kirsten Dunst']);

// Creo attori Transformer
$transformer_actors = new Actor(['Shia LaBeouf', 'Megan Fox']);

// Creo attori Iron Man
$iron_man_actors = new Actor(['Robert Downey Jr.', 'Gwyneth Paltrow']);
// var_dump($iron_man_actors);