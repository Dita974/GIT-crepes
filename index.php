<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crepes</title>
</head>
<body>
    <main>
    

<?php

    class Crepe {

        public $farine;     //quantité en gramme
        public $oeufs;        //quantité d'oeuf
        public $sucre;       //quantité en gramme
        public $sel;          //quantité en pincée


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
            echo 'Pour ma recette de crêpe, j\'utilise : <br>';
            echo $this -> farine. 'g de farine \n';
            echo $this -> oeufs . 'd\'oeufs \n';
            echo $this -> sucre . 'g de sucre \n';
            echo $this -> sel . 'pincée de sel \n';
        }
        
    }

    // function verser_la_farine($farine){
    //     echo "ajouter $farine g de farine" ;
    // }
    // function ajouter_du_sucre(){
    //     echo "ajouter . '$sucre' . g de sucre";
    // }
    ?>


    </main>
</body>
</html>