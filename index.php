<?php
$mensagem = "Eu sou uma string"; // string
$idade = 26; // int
$montanteTransferido = 259.817; // float
$transferidoComSucesso = true; // bool

// $montanteTransferido = (int) $montanteTransferido;

echo "<br /> ---------- VARS E TIPOS ------- <br />";
echo gettype($mensagem);
echo "<br />";
echo gettype($idade);
echo "<br />";
echo gettype($montanteTransferido);
echo $montanteTransferido;
echo "<br />";
echo gettype($transferidoComSucesso);

// Constantes
echo "<br /> ---------- CONSTANTES ------- <br />";
define("PI", 3.14);
const IVA = 14.0;

echo "<br />";
echo PI;
echo "<br />";
echo IVA;

echo "<br /> ---------- OPERADORES ------- <br />";
// Operadores
// Aritmeticos +, - , *, /, %
$numero1 = 8;
$numero2 = 4;
$resultado = $numero1 + $numero2;
echo "<br />";
echo "Resultado: " . $resultado;
// Relacionais >, <, >=, <=, ==, ===, !=, !==
$resultado = $numero1 !== $numero2;
echo "<br />";
var_dump($resultado);
// Logicos &&, ||, ! 
$resultado = ($numero1 > $numero2) && $numero1 === 10;
echo "<br />";
var_dump($resultado);
// Atribuicao =, +=, -=, *=, /=
// $numero1 = $numero1 + 10;
$numero1 += 10;
// echo "Soma: $numero1";
echo $numero1;

echo "<br /> ---------- EST. CONDICIONAIS------- <br />";
// Estruturas condicionais if, switch, operador ternario
$idade = 18;
if ($idade <= 18) {
    // So executa se a expressao for true
    echo "Adolescente ";
}

echo "<br />";

$idade = 50;
if ($idade <= 18) {
    echo "Adolescente";
} else {
    echo "Adulto";
}

echo "<br />";

// 0 - 18 adolescente, 19 - 50 jovem, 51+ idoso
$idade = 10;

if ($idade >= 0 && $idade <= 18)
    echo "Adolescente";
else if ($idade >= 19 && $idade <= 50)
    echo "Jovem";
else if ($idade >= 51)
    echo "Idoso";
else
    echo "ERRO!! idade invalida";

echo "<br />";

$operacao = "*";
switch ($operacao) {
    case "+":
        echo "Adicao";
        break;
    case "-":
        echo "Subtracao";
        break;
    default:
        echo "Invalido!!";
}
// Operador ternario
echo "<br />";
$precoUnitario = 230;
$quantidade = 9;

$precoTotal = $precoUnitario * $quantidade;

// $precoTotalComDesconto = $precoTotal;
// if ($quantidade > 5) {
//     $precoTotalComDesconto = $precoTotal - 100;
// } 

// echo $precoTotal;
// echo "<br /> $precoTotalComDesconto";

$precoTotalComDesconto = ($quantidade > 5) ? $precoTotal - 100 : $precoTotal;

echo "Total: $precoTotal Kz";
echo "<br /> Total com desconto: $precoTotalComDesconto Kz";

echo "<br /> ---------- EST. REPETITIVAS------- <br />";

// while, do-while, for, foreach

// $contador = 0;
// while($contador < 10) {
//     echo "$contador - Ola, mundo!!! <br />";

//     $contador += 1;
// }

// $contador = 0; // inicializacao

// do {
//     echo "$contador - Ola, mundo!!! <br />";

//     $contador += 1; //incremento ou decremento
// } while ($contador < 10); // verificacao

for ($contador = 10; $contador > 0; $contador--) {
    echo "$contador - Ola, mundo!!! <br />";
}

echo "<br /> ---------- FUNCOES ------- <br />";

$prod1Nome = "Notebook core i5";
$prod1Preco = 20_000;
$prod1Qtde = 2;

$prod1Total = $prod1Preco * $prod1Qtde;
echo "<br /> Total do produto 1: " . number_format($prod1Total, 2, ",", ".");

$prod2Nome = "Mouse wireless";
$prod2Preco = 5_800;
$prod2Qtde = 1;

$prod2Total = $prod2Preco * $prod2Qtde;
echo "<br /> Total do produto 2: " . number_format($prod2Total, 2, ",", ".");

$prod3Nome = "<br /> Agua mineral pura 1l";
$prod3Preco = 500;
$prod3Qtde = 5;

$prod3Total = $prod3Preco * $prod3Qtde;
echo "<br /> Total do produto 3: " . number_format($prod3Total, 2, ",", ".");


function saudarABC(string $nome, string $sobrenome = "Desconhecido"): string
{
    $mensagem = "Ola, " . $nome . " " . $sobrenome;
    // $mensagem = $sobrenome === "Desconhecido"? "Ola, $nome" : "Ola, $nome $sobrenome";

    return $mensagem;
}

function saudar(string $nome, string $sobrenome = ""): void
{
    $mensagem = "Ola, " . $nome . " " . $sobrenome;

    echo $mensagem;
}

$nome = "Joao";
$sobrenome = "dos Santos";

// $resultadoProduzido = saudar($nome);
// saudar($nome);

// echo "<br />" . $resultadoProduzido;
// echo saudar();
// echo "ola mundo.." . saudar();

function retornarValorDePI(): float {
    return 3.14;
}

// echo retornarValorDePI() + 18;

// echo $mensagem;