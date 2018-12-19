<?php

$conn = new PDO("mysql:dbname=dbphp7; host=127.0.0.1", "admin", "admin");

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = :ID");

$id= 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "DELETE OK!";

?>