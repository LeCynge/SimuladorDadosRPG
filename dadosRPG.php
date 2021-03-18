<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Dados RPG</title>
</head>
<body>
    <h1>Gerador de Dados RPG</h1>
    <p>Gere resultados aleatórios de dados para o seu jogo RPG!</p>
    <p>Este gerador foi desenvolvido por @lecynge</p>

<form action="" method="post">
    <input type="submit" name="dice" value="4">
    <input type="submit" name="dice" value="6">
    <input type="submit" name="dice" value="8">
    <input type="submit" name="dice" value="10">
    <input type="submit" name="dice" value="12">
    <input type="submit" name="dice" value="16">
    <input type="submit" name="dice" value="20">
    <input type="submit" name="dice" value="30">
    <input type="submit" name="dice" value="100">
</form>

<?php
    
    $a = $_POST['dice'];

    if( !empty($a)) {
        if($a == '4')
            $b = rand(1,4);
        else if($a == '6')
            $b = rand(1,6);
        else if($a == '8')
            $b = rand(1,8);
        else if($a == '10')
            $b = rand(1,10);
        else if($a == '12')
            $b = rand(1,12);
        else if($a == '16')
            $b = rand(1,16);
        else if($a == '20')
            $b = rand(1,20);
        else if($a == '30')
            $b = rand(1,30);
        else
            $b = rand(1,100);

        echo "O dado mostra: $b";
    }
    

?>

    
</body>
</html>