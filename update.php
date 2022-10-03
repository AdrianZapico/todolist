<?php


require("connection.php");
$update = $_GET['update'];
$sql = "update todolist set task = ? where id = ?";
$stmt = $connection->prepare($sql);
$stmt->execute([$update]);
