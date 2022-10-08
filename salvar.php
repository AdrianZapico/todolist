<?php

header('Content-Type: application/json; charset=utf-8');
require("connection.php");

$task = $_GET['task'];
$hora = $_GET['hora'];



$sql = "insert into todolist(task,hora)values(?,?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$task, $hora]);
echo json_encode("Salvo com sucesso!!!");



