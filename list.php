<?php

require("connection.php");
$connection = new PDO("mysql:host=localhost;dbname=todolist","root","root");
$stmt = $connection->query("select * from todolist"); 
echo "<h3><font color ='DodgerBlue'>";
foreach($stmt->fetchAll() as $row)
{   $task = (string)$row[0];
    $id = (string)$row[1];
    
   
        echo($id)." - ";
        echo($task)." <button id='delete' onclick='deleteTask($id)' class='btn btn-danger'>Deletar</button>";
        echo" <br><button id='update' onclick='updateTask($id,$task)' class='btn btn-warnig'></button>";
    
}
echo"</font></h3>";
