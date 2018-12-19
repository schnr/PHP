<?php


interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {


    public function acelerar($velocidade)
    {
        // TODO: Implement acelerar() method.
        echo "O veiculo acelerou até " . $velocidade . " km/h <br>";
    }

    public function frenar($velocidade)
    {
        // TODO: Implement frenar() method.
        echo "O veiculo frenou até " . $velocidade . " km/h <br>";
    }

    public function trocarMarcha($marcha)
    {
        // TODO: Implement trocarMarcha() method.
        echo "O veículo engatou a marcha " . $marcha . "<br>";
    }
}


?>