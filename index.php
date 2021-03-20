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

    <h1>Simulador de Dados RPG</h1>
    <p>Gere resultados aleatórios de dados para o seu jogo RPG!</p>
    

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

        include 'model\config.php';
        
    ?>

    <p>
        Este é um gerador de dados simples e minimalista para você jogador ou mestre que precisa lançar 
        uns dados rapidamente no meio de uma partida.
    </p>
    <p>
        O RPG usa dados poliédricos com números diferentes de faces. Normalmente eles são nomeados com 
        um "d" mais o número de faces do dado.
    </p>
    <p>
        Exemplo:
        <ul>
            <li>d4 = um dado de 4 faces;</li>
            <li>d10 = um dado de 10 faces;</li>
            <li>d20 = um dado de 20 faces.</li>
        </ul>
    </p>
    <p>
        Os dados no RPG são juízes sem partido. Eles podem ser designados para definir resultados de 
        movimentos sem atribuir favorecimentos a ninguém no jogo. Mas fica ao seu cargo decidir se 
        vai usá-lo com mais frequência ou não. Há Mestres que os usam apenas em combates, outros para 
        tudo. Vai do seu bom senso e do seu estilo como Mestre.
    </p>

    <footer>
        <h2>Simulador de Dados RPG</h2>
        <p>Este gerador foi desenvolvido por <a href="https://github.com/LeCynge">@LeCynge</a></p>
        © 2021-<?php echo date("Y");?>
    </footer>


</body>
</html>