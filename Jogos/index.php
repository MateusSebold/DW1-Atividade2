<!DOCTYPE html>
<?php
 $jokenpo = rand(1, 3);
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jokenpo</title>
</head>
<body>
<?php include "menu.php";?>
<form action="" method="post">
    
    <input type="radio" name="nome" value="1" id="">Pedra <br>
    <input type="radio" name="nome" value="2" id="">Papel <br>
    <input type="radio" name="nome" value-="3" id="">Tesoura <br>

    <input type="submit" value="Jogar">


    
<?php
     echo "<img src='img\jokenpo/$jokenpo.JPG' alt=''>";
     
   $nome = $_POST["nome"];
    $aa = "1";
    $textoa = "Empate";
    $bb = "2";
    $textob = "Jogador Ganhou";
    $cc = "3";
    $textoc = "Jogador Perdeu";
    
    echo "<img src='img\jokenpo/$nome.JPG' alt=''>"; 
    
    if ($nome==$aa){
      
            if ($nome==$jokenpo)
               echo $textoa;
               
               else if((($jokenpo == $bb)&&($nome==$aa))||(($jokenpo==$aa)&& ($nome==$cc))||(($jokenpo==$cc)&&($nome==$bb)))
               echo $textoc;
                
               else 
                    echo $textob;
               

    }
    elseif ($nome==$bb){
        
                if ($nome==$jokenpo)
                   echo $textoa;
                
                   else if((($jokenpo == $bb)&&($nome==$aa))||(($jokenpo==$aa)&& ($nome==$cc))||(($jokenpo==$cc)&&($nome==$bb)))
                        echo $textoc;
                
                    else 
                    echo $textob;
    }
    else   {
        
        if ($nome==$jokenpo)
            echo $textoa;
    
        else if((($jokenpo == $bb)&&($nome==$aa))||(($jokenpo==$aa)&& ($nome==$cc))||(($jokenpo==$cc)&&($nome==$bb)))
            echo $textob;
     
        else 
            echo $textoc;

    }
    ?>
</form>
</body>
</html>
