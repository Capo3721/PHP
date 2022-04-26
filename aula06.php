<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuições</title>
</head>
<body>
    <?php
        $c = 0;
        $c += 5;
        $c++;
        "adição: $a+=$b";
        "subtração: $a-=$b";
        "multiplicação: $a*=$b";
        "divisão: $a/=$b";
        "módulo: $a%=$b";
        "concatenação $a.=$b";
        
        #Exercitando as atribuições:
        $preco = $_GET["x"];
        echo"O preço do produto é R$ ".number_format($preco, 2);
        $preco += $preco * 10 / 100;
        echo"<br> O novo preço com 10% a mais é: R$ ".number_format($preco, 2);
        
        $npreco = $_GET["y"];
        echo"<br> O preço do produto sem desconto é: R$ ".number_format($npreco, 2);
        $npreco -= $npreco * 10 / 100;
        echo"<br>O novo preço do produto com 10% de desconto é: R$ ".number_format($npreco, 2);
        
        echo"<br>";
        
        //Exercitando o pré e pós-incremento:
        $atual = $_GET["aa"];
        echo"<br>O ano atual é: $atual e o seu ano posterior é: ". ++$atual;
        echo"<br> ".--$atual;
        
        //Fazendo referência entre variáveis: 
        $a = 3;
        $b = $a;
        $b += 5;
        echo"<br> a=$a e b=$b";
        echo"<br>";
        $d = 3;
        $e = &$d;
        $e += 5;
        echo"<br> d=$d e e=$e";
        
        #Variáveis de variáveis:
        $x = "abc";
        $$x = "def";
        echo"<br>O conteúdo da variável x é: $x";
        echo"<br>O conteúdo da variável ABC criada recebeu o valor: $abc";
    
    ?>
</body>
</html>