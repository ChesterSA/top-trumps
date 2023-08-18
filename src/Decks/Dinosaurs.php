<?php

namespace C16R\TopTrumps\Decks;

use C16R\TopTrumps\Deck;

class Dinosaurs extends Deck
{
        protected static $name = 'Dinosaurs';

        protected static $categories = [
            'Height' => 'inc',
            'Weight' => 'inc',
            'Length' => 'inc',
            'Killer Rating' => 'inc',
            'Intelligence Rating' => 'inc',
            'Age (Million Years)' => 'inc'
        ];

        protected static $deck = [
            'Stenonychosaurus' => [1.8, 60, 0, 7, 10, 76],
            'Suchomimus' => [4, 0, 12, 8, 7, 100],
            'Pachyrhinosaurus' => [3, 0, 7, 2, 4, 70],
            'Oviraptor' => [0.8, 20, 1.8, 5, 8, 70],
            'Coelophysis' => [2, 27, 3, 4, 7, 225],
            'Centrosaurus' => [2, 1000, 6, 2, 4, 76],
            'Euplocephalus' => [1.8, 2000, 6, 3, 3, 76],
            'Brachiosaurus' => [16, 80000, 26, 3, 2, 156],
            'Pachycephalosaurus' => [6, 3000, 8, 2, 7, 76],
            'Giganotosaurus' => [6, 8000, 16, 10, 7, 100],
            'Pentaceratops' => [3, 8000, 8, 3, 5, 75],
            'Archaeopteryx' => [0.3, 6, 0.3, 6, 4, 150],
            'Compsognathus' => [0.7, 3, 1.4, 5, 7, 145],
            'Protoceratops' => [1.5, 400, 2, 2, 4, 72],
            'Gallimimus' => [3, 200, 5.6, 5, 7, 74],
            'Maiasaura' => [2.5, 3000, 9, 2, 3, 80],
            'Triceratops' => [3, 5500, 9, 2, 4, 72],
            'Megalosaurus' => [3, 1000, 9, 9, 8, 175],
            'Stegosaurus' => [3, 3100, 9, 2, 1, 76],
            'Tyrannosaurus Rex' => [5.6, 6000, 12, 9, 9, 67],
            'Herrerasaurus' => [1, 350, 5, 7, 6, 230],
            'Corythosaurus' => [5, 5000, 8, 2, 5, 80],
            'Styracosaurus' => [2, 3000, 5, 2, 3, 77],
            'Iguanodon' => [5, 4500, 10, 3, 6, 135],
            'Barosaurus' => [26, 40000, 26, 3, 2, 156],
            'Dimorphodon' => [0.25, 4, 0.25, 4, 0, 200],
            'Velociraptor' => [1, 15, 2, 9, 10, 85],
            'Heterodontosaurus' => [0.5, 10, 1.2, 1, 5, 208],
            'Hypsilophodon' => [0.8, 50, 2, 1, 6, 125],
            'Camarasaurus' => [9, 20000, 18, 3, 2, 150],
        ];
}