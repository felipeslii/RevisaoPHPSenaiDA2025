<?php
// Exercício PHP em arquivo único abordando 5 conceitos:
// 1. Variáveis
// 2. Arrays
// 3. Condicionais
// 4. Loops
// 5. Funções

// ---- 1. VARIÁVEIS ----
echo "<h2>1. Variáveis</h2>";

// Atribuição das variáveis
$nome = "Maria";
$idade = 25;
$profissao = "Desenvolvedora";
$salario = 5000.50;
$ativo = true;

// Exibir Valores
echo "Nome:  $nome  <br>";
echo "Idade:  $idade anos.  <br>";
echo "Profissão:  $profissao  <br>";
echo "Salário:  R$ " .number_format($salario, 2, ',', '.').  "<br>";
echo "Status: " . ($ativo ? "Ativo" : "Inativo") . "<br>";



echo "<br>";
echo "=============================================================================";

// ---- 2. ARRAYS ----
echo "<h2>2. Arrays</h2>";


// array indexado
$frutas = ["maçã", "banana", "laranja", "uva", "morango"];

// Aray associativo
$funcionario = [
    "nome" => "João",
    "cargo" => "Analista",
    "departamento" => "TI",
    "salario" => 4500.00,
];

// Array multidimensional
$alunos = [
    ["nome" => "Pedro", "nota" => 8.5],
    ["nome" => "Ana", "nota" => 9.0],
    ["nome" => "Carlos", "nota" => 7.5],
    ["nome" => "Mariana", "nota" => 8.0],
    ["nome" => "Juliana", "nota" => 9.5]
];

// Exibir Valores Array indexado
echo "<strong>Lista de Frutas:</strong><br>";
foreach ($frutas as $fruta) {
    echo "- $fruta<br>";
}
echo "<br>";

// Exibir Valores Array associativo
echo "<strong> Dados do Funcionário:</strong><br>";
foreach ($funcionario as $chave => $valor) {
    echo ucfirst($chave) . ": " . $valor . "<br>";
}
echo "<br>";

// Exibir Valores Array multidimensional
echo "<strong>Notas dos Alunos:</strong><br>";
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["nome"] . "- Nota: " . $aluno["nota"] . "<br>";
}
echo "<br>";

// Exebir aluno especifico
echo "<strong>Nome do primeiro aluno:</strong><br>";
echo $alunos[0]["nome"]; // Exibe o nome do primeiro aluno



echo "<br>";
echo "=============================================================================";

// ---- 3. CONDICIONAIS ----
echo "<h2>3. Condicionais</h2>";

$temperatura = 28; // Temperatura em graus Celsius
echo "Temperatura Atual: $temperatura °C<br>";

// Condicional Simples ou Normal
if ($temperatura < 15) {
    echo "Está Frio!<br>";
} elseif ($temperatura >= 15 && $temperatura <= 25) {
    echo "Está Agradável!<br>";
} else {
    echo "Está Calor!<br>";
}

// Condicional Ternário
echo ($temperatura < 15) ? "Está Frio!" : (($temperatura >= 15 && $temperatura <= 25) ? 
"Está Agradável!" : "Está Calor!") . "<br>";    

// Condicional Switch
$dia_semana = date ("w"); // 0 (domingo) a 6 (sábado)
echo "Hoje é: ";
switch ($dia_semana) {
    case 0:
        echo "Domingo!<br>";
        break;
    case 1:
        echo "Segunda-feira!<br>";
        break;
    case 2:
        echo "Terça-feira!<br>";
        break;
    case 3:
        echo "Quarta-feira!<br>";
        break;
    case 4:
        echo "Quinta-feira!<br>";
        break;
    case 5:
        echo "Sexta-feira!<br>";
        break;
    case 6:
        echo "Sábado!<br>";
        break;
}





echo "<br>";
echo "=============================================================================";

// ---- 4. LOOPS ----
echo "<h2>4. Loops</h2>";


// Loop For
for ($i = 1; $i <= 5; $i++) {
    echo "Contagem: $i<br>";
}
echo "<br>";

// Loop While
$i = 5;
while ($i >= 0) {
    echo "Contagem Regressiva: $i<br>";
    $i--;
}
echo "<br>";

// Do While
$z = 1;
do {
    echo "Valor: $z<br>";
    $z++;
}While ($z <= 8);
echo "<br>";

// Forach com arrays
echo "<br> <strong>Laço Foreach:</strong><br>";
$frutas = ["maçã", "banana", "laranja", "uva", "morango"];

foreach($frutas as $indice => $fruta) {
    echo "Índice: $indice - Fruta: $fruta<br>";
}


echo "<br>";
echo "=============================================================================";

// ---- 5. FUNÇÕES ----
echo "<h2>5. Funções</h2>";


// Função simples
function saudacao($nome) {
    return "Olá, $nome!<br>";
}
// exibição da função
echo saudacao("Maria");
echo saudacao("João");

// Função Anonima
$dobro = function($numero) {
    return $numero * 2;
};
// exibição da função
echo "Dobro de 5 é: " . $dobro(5) . "<br>";
echo "Dobro de 10 é: " . $dobro(10) . "<br>";


// O fatorial de um número N é o produto de todos os inteiros de 1 até N. O fatorial de 5, por exemplo, é 5 * 4 * 3 * 2 * 1 = 120.

// Função Recursiva:

// Recursão é um processo onde a função chama a si mesma. No caso da função fatorial(), ela chama a si mesma com o valor de $n - 1 até que $n seja menor ou igual a 1.
// A base da recursão (condição de parada) é quando $n <= 1, onde a função retorna 1. Isso é necessário para evitar que a função continue chamando a si mesma indefinidamente.

// Função para calcular fatorial
function fatorial($n) {
    if ($n <= 1) return 1; // Condição de parada{
    return $n * fatorial($n - 1); // Chamada recursiva 
}

// Exibindo o fatorial de 5
echo "Fatorial de 5 é: " . fatorial(5) . "<br>"; 

echo "<br>";
echo "=============================================================================";

// EXERCÍCIO PRÁTICO: Combinando todos os conceitos
echo "<h2>Exercício Prático</h2>";

// Função para calcular média de notas
function Media($notas) {
    $soma = array_sum($notas);
    $media = $soma / count($notas);
    return $media;
}

function determinarStatus($media) {
    if ($media >= 9.0) {
        return "<span style='color: blue;'>Excelente</span>";
    } elseif ($media >= 7.0) {
        return "<span style='color: green;'>Aprovado</span>";
    } elseif ($media >= 6.0) {
        return "<span style='color: orange;'>Recuperação</span>";
    } else {
        return "<span style='color: red;'>Reprovado</span>";
    }
}




// Criando um array com alunos e notas
$turma = [
    ["nome" => "Ana Silva", "notas" => [8.5, 9.0, 7.5]],
    ["nome" => "Pedro Santos", "notas" => [6.0, 7.5, 8.0]],
    ["nome" => "Maria Oliveira", "notas" => [9.5, 9.0, 10.0]],
    ["nome" => "João Costa", "notas" => [5.0, 6.5, 7.0]],
    ["nome" => "Lucia Pereira", "notas" => [7.5, 8.0, 6.5]]
];

// Exibindo os resultados
echo "<strong>Boletim Alunos:</strong><br>";
foreach ($turma as $aluno) {
    $media = Media($aluno["notas"]); // Calcula a média
    $status = determinarStatus($media); // Determina o status

    // Formata cada nota com uma casa decimal e vírgula como separador
    $notasFormatadas = implode(' - ', array_map(function($nota) {
        return number_format($nota, 1, ',', '.');
    }, $aluno["notas"]));

    $mediaFormatada = number_format($media, 1, ',', '.'); // Formata a média
    echo "Aluno(a): {$aluno['nome']} | Notas: {$notasFormatadas} | Média: {$mediaFormatada} - Status: {$status}<br>";
}


ini_set('display_errors', 1);
error_reporting(E_ALL);


?>