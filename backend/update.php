<?php
header('Content-Type: application/json; charset=utf-8');

require("connection.php");




$id = $_GET['id'];
$task = $_GET['task'];

$sql = "update todolist set task = ? where id = ?";

$stmt = $conn->prepare($sql);

try{
  $stmt->execute([$task,$id]);

  echo json_encode("Updatado com sucesso!!!");

}
catch(Exception $e)
{
  echo json_encode($e->getMessage()." Erro ao Updatar!!!");
}