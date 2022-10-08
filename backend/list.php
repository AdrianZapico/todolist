<?php

header('Content-Type: application/json; charset=utf-8');

require("connection.php");



function sendJquery($connection) {


    $stmt = $connection->query("select * from todolist"); 
    $sendFunc= json_encode( $stmt->fetchAll());

    return $sendFunc;
  }
 
  echo sendJquery($conn);