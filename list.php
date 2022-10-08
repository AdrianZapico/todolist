<?php

header('Content-Type: application/json; charset=utf-8');

require("connection.php");
$connection = new PDO("mysql:host=localhost;dbname=todolist","root","root");
$stmt = $connection->query("select * from todolist"); 
echo json_encode( $stmt->fetchAll());