<?php

namespace Chestersa\TopTrumps\Decks;

use Chestersa\TopTrumps\Deck;

class Dinosaurs
{
    public static function get()
    {
        $deck = new Deck('Dinosaurs');

        $deck->setCategories([
            'Height' => 'inc',
            'Weight' => 'inc',
            'Length' => 'inc',
            'Killer Rating' => 'inc',
            'Intelligence Rating' => 'inc',
            'Age (Million Years)' => 'inc'
        ]);

        try {
            $deck->addCard('Stenonychosaurus', [1.8, 60, 0, 7, 10, 76]);
            $deck->addCard('Suchomimus', [4, 0, 12, 8, 7, 100]);
            $deck->addCard('Pachyrhinosaurus', [3, 0, 7, 2, 4, 70]);
            $deck->addCard('Oviraptor', [0.8, 20, 1.8, 5, 8, 70]);
            $deck->addCard('Coelophysis', [2, 27, 3, 4, 7, 225]);
            $deck->addCard('Centrosaurus', [2, 1000, 6, 2, 4, 76]);
            $deck->addCard('Euplocephalus', [1.8, 2000, 6, 3, 3, 76]);
            $deck->addCard('Brachiosaurus', [16, 80000, 26, 3, 2, 156]);
            $deck->addCard('Pachycephalosaurus', [6, 3000, 8, 2, 7, 76]);
            $deck->addCard('Giganotosaurus', [6, 8000, 16, 10, 7, 100]);
            $deck->addCard('Pentaceratops', [3, 8000, 8, 3, 5, 75]);
            $deck->addCard('Archaeopteryx', [0.3, 6, 0.3, 6, 4, 150]);
            $deck->addCard('Compsognathus', [0.7, 3, 1.4, 5, 7, 145]);
            $deck->addCard('Protoceratops', [1.5, 400, 2, 2, 4, 72]);
            $deck->addCard('Gallimimus', [3, 200, 5.6, 5, 7, 74]);
            $deck->addCard('Maiasaura', [2.5, 3000, 9, 2, 3, 80]);
            $deck->addCard('Triceratops', [3, 5500, 9, 2, 4, 72]);
            $deck->addCard('Megalosaurus', [3, 1000, 9, 9, 8, 175]);
            $deck->addCard('Stegosaurus', [3, 3100, 9, 2, 1, 76]);
            $deck->addCard('Tyrannosaurus Rex', [5.6, 6000, 12, 9, 9, 67]);
            $deck->addCard('Herrerasaurus', [1, 350, 5, 7, 6, 230]);
            $deck->addCard('Corythosaurus', [5, 5000, 8, 2, 5, 80]);
            $deck->addCard('Styracosaurus', [2, 3000, 5, 2, 3, 77]);
            $deck->addCard('Iguanodon', [5, 4500, 10, 3, 6, 135]);
            $deck->addCard('Barosaurus', [26, 40000, 26, 3, 2, 156]);
            $deck->addCard('Dimorphodon', [0.25, 4, 0.25, 4, 0, 200]);
            $deck->addCard('Velociraptor', [1, 15, 2, 9, 10, 85]);
            $deck->addCard('Heterodontosaurus', [0.5, 10, 1.2, 1, 5, 208]);
            $deck->addCard('Hypsilophodon', [0.8, 50, 2, 1, 6, 125]);
            $deck->addCard('Camarasaurus', [9, 20000, 18, 3, 2, 150]);
        } catch (\Exception $e){
            var_dump($e);
        }

        dd()
        return $deck;
    }
}