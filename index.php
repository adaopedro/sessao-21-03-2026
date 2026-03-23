<?php
// // require
// // require_once
// // include
// // include_once

// require "funcoes.php";

// $itemVenda = [
//     "id_produto" => 937476,
//     "preco_unitario" => 230000,
//     "quantidade" => 2
// ];

// $pu = $itemVenda["preco_unitario"];
// $qtde = $itemVenda["quantidade"];

// $total = calcularTotalProduto($pu, $qtde);

// mostrarTotalProdutoFormatado($total);



// require
// include
// require_once
// include_once

require "funcoes.php";

$preco = 1900;
$qtde = 3;

$total = calcularTotalProduto($preco, $qtde);

echo $total;
