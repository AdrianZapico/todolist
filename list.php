<?php

require("connection.php");
$connection = new PDO("mysql:host=localhost;dbname=todolist","root","root");
$stmt = $connection->query("select * from todolist"); 
echo "<h3><font color ='blue'>";
foreach($stmt as $row)
{   
    echo($row [1])." - ";
    echo($row[0])." <button id='delete' class='btn btn-danger'>Deletar</button><button id='update' class='btn btn-info'>alterar</button><br>";
}
echo"</font></h3>";
