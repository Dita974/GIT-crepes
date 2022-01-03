<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crepes</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
    <h1>Recettes de crêpes</h1>
    </header>
    <main>
        
    
<?php

    class Crepe {

        public $farine;     //quantité en gramme
        public $oeufs;        //quantité d'oeuf
        public $sucre;       //quantité en gramme
        private $sel;          //quantité en pincée


        public function __construct(
            $farine,
            $oeufs,
            $sucre,
            $sel
        ){
            $this -> farine = $farine;
            $this -> oeufs = $oeufs;
            $this -> sucre = $sucre;
            $this -> sel = $sel;

        }

        
        function afficher_recette(){
            echo 'Pour ma recette de crêpe au sucre, j\'utilise : <br>';
            echo $this -> farine. 'g de farine <br>';
            echo $this -> oeufs . ' d\'oeufs <br>';
            echo $this -> sucre . 'g de sucre <br>';
            echo $this -> sel . ' pincée de sel <br>';
        }
        
        public function getSel(){
            return $this -> sel;
    }

    }

    ?>


    </main>
</body>
</html>