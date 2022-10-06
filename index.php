<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/1399a3c061.js" crossorigin="anonymous"></script>
  <title>Todolist</title>
</head>
<i class="fa fa-tasks" aria-hidden="true"></i>
<body style="background-color: #DFDFDF;">


  <h1 style="background-color:DodgerBlue">TAREFAS A FAZER</h1>
  <h4 style="background-color:Red">INSERIR TAREFA NO CAMPO ABAIXO</h4>
  
  <textarea type="text" id="pegartexto" name="task" style="width: 400px; height:100px"></textarea><br>

  <meta><button id="salvar" class="btn btn-dark">Salvar tarefa</button></meta></br>
  


  </br></br>

  <button id="hidecoments"  class="btn btn-primary">Listar tarefas</button>

  <div id="myDIV">

    <?php
    include "list.php";
    ?>
    

  </div>

 


  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="index.js" type="text/javascript"></script>
</body>

</html>