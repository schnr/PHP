<?php

$conn = new PDO("mysql:dbname=dbphp7; host=127.0.0.1", "admin", "admin");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = ?");

$id= 2;

$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));

//$conn->rollBack();

$conn->commit();

echo "DELETE OK!";

?>