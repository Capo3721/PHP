<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 até 100, Multiplos de 5 e PingPongPloc</title>
</head>
<body>
    <?php
    	while($i<100){
        	$i+=1;
        	echo"I tem: $i <br>";
        }
    ?>
    <?php
    	for($i = 0; $i<101; $i++){
        	if($i % 5 == 0){
            	echo"$i é multiplo de 5.<br>";
            }
        }
    ?>
    <?php
    	for($i = 1; $i<101; $i++){
        	if($i % 3  == 0 and $i % 5 == 0)
            	echo"$i. <em>ploc</em><br>";
            elseif($i % 3 == 0)
            	echo"$i. <strong>ping</strong><br>";
            elseif($i % 5 == 0)
            	echo"$i. <i>pong</i><br>";
            else
            	echo"$i. ok<br>";
            
        }
    ?>
</body>
</html>