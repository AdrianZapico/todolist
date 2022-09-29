<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save.php" id="form1">
        <h1>TAREFAS</h1>
        <input type="text" id="task" name="task"><br><br>
        <input type="submit" value="Salvar">
        <input type="submit" id="delete"value="Deletar Tarefa">

      </form>
    <?php 
        include "list.php"
        
    ?>

</body>
</html>