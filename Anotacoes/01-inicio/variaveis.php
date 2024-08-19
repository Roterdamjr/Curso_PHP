<?php
    $variavel = "nome";
    $$variavel = "Roterdam Holanda ";
    echo $nome;
    echo "<br>-----------<br><br>";
    
    // POR REFERENCIA
    $salario = 1205.67;
    $ref = & $salario;
    echo $salario;    echo "<br>";    echo $ref;
    echo "<br>Após<br>";
    
    $ref = 1408.67;
    echo $salario;    echo "<br>";    echo $ref;
    echo "<br>Após<br>";
    $salario = 123.67;
    echo $salario;    echo "<br>";    echo $ref;

    //GLOBAL
    echo "<br>-----------<br><br>";
    $teste="asd";
    echo "$teste global1 <br>";

    if(5>2){
        $teste="dsa";
        echo "$teste if<br>";
    }

    echo "$teste global2 <br>";
    echo "<br>testando global<br>";

    function testando(){
        global $teste;
        echo "$teste testando";
    }
    testando();


    

?>