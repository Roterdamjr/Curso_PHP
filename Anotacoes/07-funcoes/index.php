<?php
  function soma(){
    $a=4;
    $b=5;
    echo $a + $b . "<br>";
  }

  function teste_implode(){
    $arr=["a" , "b", "c"];
    $texto = implode(",", $arr);
    echo  $texto;
  }

  function teste_deafult( $sal, $nome="Roterdam" ){
    echo "nome:  $nome,    salario:  $sal";
  }

  soma();
  soma();
  teste_implode();
  
  teste_deafult(1000);
  teste_deafult(1000,"pedro");
?>

