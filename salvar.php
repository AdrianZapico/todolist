<?php

$task = $_POST['task'];
$hora = $_POST['hora'];

$conn= new PDO("mysql:host=localhost;dbname=todolist","root","root");

$sql = "insert into todolist(task,hora)values(?,?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$task,$hora]);
echo "Salvo com sucesso!!!";
