<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores, funções Aritméticos e Valores Personalizados</title>
</head>
<body>
    <?php
    	$n1 = 6;
    	$n2 = 3;
    	$s = $n1+$n2;
        $m = ($n1+$n2) / 2;
        
    	echo "A soma é: $s.<br>";
        echo "A subtração vale: ".($n1-$n2);
        echo "<br> A divisão vale: ".($n1/$n2);
        echo "<br> A multiplicação vale: ".($n1*$n2);
        echo "<br> O módulo vale: ".($n1%$n2);
        echo "<br> A média é: $m.";
        
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        
        $v1 = 10;
        $v2 = -5;
        
        echo"<br> O valor absoluto de $v2 é: ".abs($v2);
        echo"<br> O valor de $v1 <sup>3</sup> é: ".pow($v1,3);
        //sqrt() raiz quadrada
        //round() arredondamento
        //intval() pega a parte inteira de um floot
        //number_format() formata números, como moeda
        //number_format($v1,2,",",".");
       
    ?>
   
</body>
</html>