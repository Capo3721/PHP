<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais e Lógicos</title>
</head>
<body>
    <?php
        $n1 = $_GET["x"];
        $n2 = $_GET["y"];
        $tipo = $_GET["op"];
    
        echo"Os valors passados foram: $n1 e $n2 <br>";
        
        $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
        
        echo"A opção do usuário foi ($tipo) e o resultado da equação é: $r<br>";
        
        //a tag == compara se dois valores são iguais.
        
        //a tag === compara se os valores são iguais e do mesmo tipo.
        
       
        $a = 3;
        $b = "3";
        $r = ($a == $b)?"SIM":"NÃO";
        echo"As variáveis A e B são iguais? $r<br>";
        
        $ano = $_GET["ano"];
        $ano = 2022 - $ano;
        $voto = ($ano < 16 || $ano > 60)?"NÃO VOTA":"VOTA";
        echo"Você possui $ano anos e você $voto<br>";
    
    ?>