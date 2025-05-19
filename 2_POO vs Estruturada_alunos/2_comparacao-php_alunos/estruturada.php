<?php
// ==========================================
// PARTE 1: PROGRAMAÇÃO ESTRUTURADA
// ==========================================


// Dados do primeiro cachorro
$nome_cachorro_1 = 'Nelson';
$comida_cachorro_1 = 3;
$sono_cachorro_1 = false;

// Dados do segundo cachorro
$nome_cachorro_2 = 'Jeremias';
$comida_cachorro_2 = 1;
$sono_cachorro_2 = true;

// Função para manipular os dados dos cachorros
function comer($quantidade_comida) {
    return $quantidade_comida - 1;
}

function dormir() {
    return true;
}

// Usando as funções 
$comida_cachorro_1 = comer($comida_cachorro_1);
$sono_cachorro_2 = dormir();

echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Resultado PHP</title>
</head>
<body>
    <h1>Resultado PHP</h1>
    <p><strong>$nome_cachorro_1</strong> agora tem <strong>$comida_cachorro_1</strong> comidas restantes.</p>
    <p><strong>$nome_cachorro_2</strong> está com sono? <strong>" . ($sono_cachorro_2 ? 'sim' : 'não') .  "</strong></p>
</body>
</html>"

?>

