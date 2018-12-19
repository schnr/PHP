<?php

class Pessoa {
    
    public $nome; //Atributo

    public function falar() { //Métodos

        return "O meu nome é ".$this->nome;

    }

}

$odair = new Pessoa();
$odair->nome = "Odair";
echo $odair->falar();


?>