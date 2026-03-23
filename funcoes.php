<?php

function mostrarTotalProdutoFormatado(float $valor): void
{
    echo "<br /> Total do produto: " . number_format($valor, 2, ",", ".");
}

function calcularTotalProduto(float $precoUnitario, int $qtde = 1): float
{
    $resultado = $precoUnitario * $qtde;

    return $resultado;
}