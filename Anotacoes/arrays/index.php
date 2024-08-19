<?php
  $arr=[];

  $arr[0]=10;
  $arr[1]=15;
  $arr[15]=34;

  print_r($arr);
  echo "<br>";

  // Associativo
  $arrAssoc =[];
  $arrAssoc['carro']= "BMW";
  $arrAssoc['aviao']= "Boeing";
  print_r($arrAssoc);
  echo "<br>";

  //adicionar ao final
  $arr= [1,2,3];
  $arr[] = 4;
  print_r($arr);
  echo "<br>";
  
  // range
  $arr = range(1,10);
  print_r($arr);


  
?>

