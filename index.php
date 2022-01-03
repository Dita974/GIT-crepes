<?php

    class Crepe {

        public $farine = 150;     //quantité en gramme
        public $oeufs = 3;        //quantité d'oeuf
        public $sucre = 50;       //quantité en gramme
        public $sel = 2;          //quantité en pincée


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
            echo "ajouter" . $farine . "g de farine \n";
            echo "ajouter" . $oeufs . "d'oeufs \n";
            echo "ajouter" . $sucre . "g de sucre \n";
            echo "ajouter" . $sel . "pincée de sel \n";
        }
        
    }

    // function verser_la_farine($farine){
    //     echo "ajouter $farine g de farine" ;
    // }
    // function ajouter_du_sucre(){
    //     echo "ajouter . '$sucre' . g de sucre";
    // }