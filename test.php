<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

<?php
    require './index.php';

    
    $crepe = new Crepe(150, 3, 50, 2, []);
  
    // echo $crepe -> afficher_recette();
//  var_dump($crepe -> afficher_recette());
     
    $crepe-> getSel();

    $crepe -> setCaramel ("caramel");
   echo  "\n". $crepe -> getCaramel();

   
   $crepe -> topping ("Vanille","Chocolat");

   $crepe -> unset ("Chocolat");


var_dump($crepe);



?>

</main>
</body>
</html>