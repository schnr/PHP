<?php
$nome = "Thiago";

$sobreNome = "Schnr";


$nomeCompleto = $nome . " " . $sobreNome;

echo $nomeCompleto;

exit; //executa apenas até aqui

echo $nome;

echo "<br/>";

unset($nome1); //exclui a variavel

if(isset($nome1)){
    echo $nome1;
}
?>