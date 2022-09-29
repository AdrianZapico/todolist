<?php

$task = $_GET['task'];

$conn= new PDO("mysql:host=localhost;dbname=todolist","root","root");

$sql = "insert into todolist(task)values(?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$task]);
echo "Salvo with sucessfully";
header("Refresh:0; url=index.php");