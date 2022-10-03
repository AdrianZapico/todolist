<?php


require("connection.php");

$task = $_POST['task'];
$hora = $_POST['hora'];



$sql = "insert into todolist(task,hora)values(?,?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$task, $hora]);
echo "Salvo com sucesso!!!";
