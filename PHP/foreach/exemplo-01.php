<?php

$meses = array(

    "Janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $indice => $mes) {
    
    echo "Indice: ".$indice . "<br/>";
    
    echo "O mês é: ". $mes. "<br><br>";
}

?>