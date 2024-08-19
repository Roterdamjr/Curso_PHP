<?php
   include_once "backend.php";

?>

<h1> Seja bem vindo</h1>
<p>
    <?=$nome;  ?> veja as ofertas
</p>

<h2>Confira nossos produtos</h2>
    <?php foreach($produtos as $produto){ ?>
        <li> <?= $produto;?> </li>
    <?php }; ?>