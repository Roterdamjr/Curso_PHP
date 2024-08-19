<?php

  function itensCaros($arr) {
    $arrCaros=[];

    foreach($arr as $item=>$preco){
      if($preco>10){
        array_push($arrCaros, $item);
      }
    }

    return $arrCaros;
  }

  $arr=['porta'=>100, 'macaneta'=>5, 'motor'=>2000 , 'retroviso'=>8];

  print_r(itensCaros($arr));


?>

