<?php

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Odair");
$cad->setEmail("aoba@gmail.com");
$cad->setSenha("AAraa");

$cad->registrarVenda();


?>