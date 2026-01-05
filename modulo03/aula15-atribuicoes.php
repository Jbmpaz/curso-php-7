<h2 class="titulo">Atribuições</h2>

<?php

$title = 'Atribuições';

// Número

$numero = 123;
echo $numero, "<br>";

$numero = $numero - 7;
echo $numero, "<br>";

$numero = $numero - 2.3;
echo $numero, "<br>";

$numero--;
echo $numero, "<br>";

--$numero;
echo $numero, "<br>";

$numero *= 2;
echo $numero, "<br>";

$numero /= 2;
echo $numero, "<br>";

$numero %= 6;
echo $numero, "<br>";

$numero **= 10;
echo $numero, "<br>";

// String

$texto = 'Esse texto recebe ';
$texto .= 'qualquer';
echo $texto, "<br>";

// $variavelTemp = 'Variável temporaria ibvcnfdisbv';
$valor = $variavelTemp ?? 'Variável não encontrada';
echo $valor, "<br>";

var_dump($variavelTemp);