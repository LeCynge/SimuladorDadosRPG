<?php

function diceGenerator(){

    $a = $_POST['dice'];

    switch ($a) {
    case '4':
        $b = rand(1,4);
        echo "O d4 mostra $b";
        break;
    case '6':
        $b = rand(1,6);
        echo "O d6 mostra $b";
        break;
    case '8':
        $b = rand(1,8);
        echo "O d8 mostra $b";
        break;
    case '10':
        $b = rand(1,10);
        echo "O d10 mostra $b";
        break;
    case '12':
        $b = rand(1,12);
        echo "O d12 mostra $b";
        break;
    case '16':
        $b = rand(1,16);
        echo "O d16 mostra $b";
        break;
    case '20':
        $b = rand(1,20);
        echo "O d20 mostra $b";
        break;
    case '30':
        $b = rand(1,30);
        echo "O d30 mostra $b";
        break;
    case '100':
        $b = rand(1,100);
        echo "O d100 mostra $b";
        break;
    default:
        break;
    }

}

if (isset($_POST['dice'])) {
    diceGenerator();
} else {
    echo "Selecione um dado!";
}

?>