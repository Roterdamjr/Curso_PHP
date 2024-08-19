<?php
    $pagamento=12.8;
    $nome= "Roterdam";

    if(is_float($pagamento)){
        echo(" É float <br>");
    }

    $idade=15;
    echo ("Ele tem $idade anos<br>");
    echo ('Ele tem $idade anos');

    if(is_string($nome)){
        echo(" É String <br>");
    }

    $homem=true;
    if(is_bool($homem)){
        echo ("é homem<br>");
    }

    $ativos=['petr4',true, 12.34];
    print_r($ativos);
    echo "<br>indice 2: " ;
    echo $ativos[2] ;

    // Arrays Associativos
    $animais = ['nome'=>'shark', 'patas'=>4, 'cor'=>'marrom'];
    echo $animais['nome'];
    echo "<br>";
    print_r($animais);
?>