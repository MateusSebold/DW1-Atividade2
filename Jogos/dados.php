<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados</title>
</head>
<body>
<?php  include "menu.php";  ?>   

<form action="" method="post">
    <input type="submit" value="lançar dado">
    </form>
    <h3>Jogador</h3>
    <?php
        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);
        $dado3 = rand(1, 6);
        $dado4 = rand(1, 6);
        echo "<img src='img\dado/$dado1.jpg' alt=''>";
        echo "<img src='img\dado/$dado2.jpg' alt=''>"; 
       
    ?>
    <br>
    <h3>Computador</h3>
    <?php
    echo "<img src='img\dado/$dado3.jpg' alt=''>";
    echo "<img src='img\dado/$dado4.jpg' alt=''>"; 

    ?>
    <br>

    <?php
    $mensagem1="Jogador Ganhou";
    $mensagem2="Computador Ganhou";

    if (($dado1+$dado2)>($dado2+$dado4))
        echo $mensagem1;
       
        else 
            echo $mensagem2;

    ?>

</body>
</html>