<?php


$connection = new PDO("mysql:host=localhost;dbname=todolist","root","root");
$stmt = $connection->query("select * from todolist"); 
echo "<h3><font color ='red'>";
foreach($stmt as $row)
{   
    echo($row [1])." - ";
    echo($row[0])."<br>";
}
echo"</font></h3>";