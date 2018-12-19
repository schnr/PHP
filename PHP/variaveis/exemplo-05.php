<?php

$nome = "Odair";

function teste() {

    global $nome;
    echo $nome;
}

function teste2() {

    $nome = " Enzo";
    echo $nome." agora no teste2";

}

teste();

teste2();

?>