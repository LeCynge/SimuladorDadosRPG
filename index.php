<?php

    session_start()

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Dados RPG</title>
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

        include 'config.php';
        
    ?>


</body>
</html>