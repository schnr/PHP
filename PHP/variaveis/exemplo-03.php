<?php
//Tipos basicos 

//strings
$nome = "Schnr";
$site = 'www.hcode.com.br';

//int
$ano = 1990;

//float
$salario = 5500.99;

//boolean
$bloqueado = false;

/////////////////////////////////////////////////

//Tipos compostos

//array
$frutas = array("abacaxi", "laranja", "melancia", "uva");

//echo $frutas[1];

//object  
$nascimento = new DateTime();

///////////////////////////////

//Tipos especiais

//Resource 
$arquivo = fopen("exemplo-03.php", "r");

//NULL 
$nulo = NULL; //ausencia de valor
$vazio = ''; //reserva espaço para variavel
?>