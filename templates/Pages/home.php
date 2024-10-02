<?php
/* 
1 – Implemente um programa com duas variáveis, uma variável para receber o
nome da pessoa e uma variável que receba o sobrenome. No final do
programa imprima na tela o nome e o sobrenome concatenado.
Nome do projeto – exercicio0001.php

2 – Implemente um programa com tres variáveis, uma para receber o nome da
pessoa, uma variável que receba o salário e uma variável que receba o nome
do cargo. No final do programa imprima na tela o nome, salário e o cargo.
Nome do projeto – exercicio0002.php
*/

$nome = "João Victor";
$sobrenome = "Ventura";

echo $nome ." ". $sobrenome;

echo "<br><br><br>";

$salario = 1288.00;
$profissao = "garçom";
echo "$nome <br>";
echo $salario;
echo "<br>$profissao";

echo "<br><br><br><br>";

/*
3 – Implemente um programa para converter o número 7.8 para um inteiro. No
final do programa imprima na tela o número convertido.
Nome do projeto – exercicio0003.php
4 – Implemente um programa com uma variável que receba o número 15 do
tipo inteiro e converta para um double. No final do programa imprima na tela o
número convertido, e para confirmar que o número está convertido implemente
o “var_dump()”.
Nome do projeto – exercicio0004.php 
*/

$result = 7.8;
echo $result;
var_dump(value: $result); 

echo "<br>trocando valores da variavel<br><br>";

$result = (int) $result;

echo $result;

var_dump(value: $result);


echo "<br><br><br>";
$result = 15;
echo $result;
var_dump(value: $result); 

echo "<br>trocando valores da variavel<br><br>";

$result = 15.0; 

echo $result;

var_dump(value: $result);
