<?php
function verificarAcesso($idade, $autorizacao) {
    if ($idade >= 18 && $autorizacao) {
        return "Acesso autorizado";
    } elseif ($idade < 18) {
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } else {
        return "Acesso negado. Autorização necessária";
    }
}


// Exemplo de uso
echo verificarAcesso(20, true);  // Saída: Acesso autorizado
echo "\n";
echo verificarAcesso(16, false); // Saída: Acesso negado. Idade mínima requerida: 18 anos
echo "\n";
echo verificarAcesso(20, false); // S


