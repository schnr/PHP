<?php

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'João',
    'idade'=>20

));


array_push($pessoas, array(
    'nome'=>'Odair',
    'idade'=>25

));

echo json_encode($pessoas);

?>