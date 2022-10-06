<?php


require("connection.php");


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todolist";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE todolist SET task = 'update funcionando'  WHERE id = 100 ";


  $stmt = $conn->prepare($sql);


  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>