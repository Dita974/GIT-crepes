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

    
    $crepeAuSucre = new Crepe(150, 3, 50, 2);
  
//    var_dump($crepe1 -> afficher_recette());
   echo $crepeAuSucre -> afficher_recette();
?>

</main>
</body>
</html>