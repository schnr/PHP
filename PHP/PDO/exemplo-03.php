<?php

$conn = new PDO("mysql:dbname=dbphp7; host=127.0.0.1", "admin", "admin");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "enzo";
$password = "toptoptop";
$id= 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";

?>