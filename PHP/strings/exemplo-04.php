<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra); //posição da palavra

$texto = substr($frase, 0, $q); // frase do começo até a palavra

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // frase a partir da variavel $palavra

echo"<br>";

var_dump($texto2);


?>