
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Par||Impar</title>
</head>
<body>
<?php include "menu.php";?>
<form action="" method="post">
    <select type="int" name="seleção" >

    <option  value="1"> 1</option>
    <option  value="2">2</option>
    <option  value="3">3</option>
    <option  value="4">4</option>
    <option  value="5">5</option>
    <option  value="6">6</option>
    <option  value="7">7</option>
    <option  value="8">8</option>
    <option  value="9">9</option>
    <option  value="10">10</option>

    </select> <br>
    
    
    <input type="radio" name="pampar" value="0" id="">PAR <br>
    <input type="radio" name="pampar" value="1" id="">IMPAR <br>

    <input type="submit" value="Jogar">


    
<?php
     
    $pampar = rand(1, 10);
    $pimpar="seleção";
    $radio= "pampar";
    $textob = " O Jogador Venceu";
    $textoc = "O Computador Venceu";
    $B2 =  "2";
    if((($pampar%$B2)*($pimpar%$B2)) == $radio)
        echo $textob;
     else
        echo $textoc;

    
    echo $pimpar; 
    
    echo $radio; 
   
    echo $pampar; 
    
    echo ($pampar+$pimpar); 
    
?>
    