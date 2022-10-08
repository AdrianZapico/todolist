<?php

header('Content-Type: application/json; charset=utf-8');
require("connection.php");

$id = $_GET['id'];

$sql = "delete from todolist where id = ?";

$stmt = $conn->prepare($sql);

try{
  $stmt->execute([$id]);

  echo json_encode(["sucesso"=>"Excluido com sucesso!!!"]);

}
catch(Exception $e)
{
  echo json_encode(["erro"=>$e->getMessage()." Erro ao salvar!!!"]);
}