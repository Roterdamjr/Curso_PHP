<?php
  
  $nome = "Roterdam";
  $idade = 59 ;
  echo  "Meu nome é $nome e tenho $idade anos...\n pulando linha"; 
  echo "\t Tabulando..." ;
  echo "Escrevendo barra invertida: \\ \n";
  echo "<br><br>";
  
  $texto = "Botafogo campeão";
  echo "O tamanho do texto é " .  strlen ($texto);

  echo "<br><br>";

  for($i=0; $i < strlen($texto); $i++ ){
    echo "$texto[$i] <br>" ;
  }

  $texto = " texto  com espeços em branco      " ;
  echo "texto limpo: "  . trim($texto). " sem espaços";
?>

