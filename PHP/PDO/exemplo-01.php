<?php

$conn = new PDO("mysql:dbname=dbphp7; host=127.0.0.1", "admin", "admin");


$stmt = $conn->prepare("SELECT * FROM tb_usuarios");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){

    foreach ($row as $key => $value){

        echo "<strong>".$key.":</strong>".$value."<br>";

    }

    echo "=====================================<br>";

}

?>