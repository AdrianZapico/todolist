
<?php


require("connection.php");




$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todolist";
$taskid = $_POST['taskid'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM todolist WHERE id='$taskid'";

  
  $conn->exec($sql);
  echo "Deletado com sucesso!!!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
/*

try {
    $conn = new PDO("mysql:host=localhost;dbname=todolist", "root", "root");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // sql to delete a record
    $sql = "DELETE FROM todolist WHERE id=92";
  
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
  } catch(PDOException $delete) {
    echo $sql . "<br>" . $delete->getMessage();
  }
*/
