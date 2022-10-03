
<?php


require("connection.php");

$delete = $_GET['delete'];




$sql = "DELETE FROM todolist WHERE id = ? ;";
$stmt = $conn->prepare($sql);
$stmt->execute([$delete]);
echo "Salvo with sucessfully";
header("Refresh:0; url=index.php");
