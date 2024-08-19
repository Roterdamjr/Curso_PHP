<?php
    class Pessoa{
        function falar(){
            echo "olá";
        }
    }

    $pess = new Pessoa();
    $pess->nome ="Roterdam";

    echo $pess->nome;
    echo "<br";
    $pess->falar();


?>

