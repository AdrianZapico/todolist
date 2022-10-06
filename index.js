




$('#myDIV').hide();


$('#salvar').on("click", () => {
    
    let hora = String(new Date);
    let task = $('#pegartexto').val();
    let data = {
        task: task,
        hora: hora
    }
    
    
   
    if(task == "" )
    {
        alert("Dados vazios,favor inserir algum dado!");
        
        return;
    }
    else
    {
        alert("Tarefa salva com sucesso!!!");
        $.post("salvar.php",data)
        location.reload();
    }
 
   
})

$('#hidecoments').on("click", () => {
    $('#myDIV').toggle();

});
//comentar

function deleteTask(taskid)
{

    
    $.post("delete.php",{taskid:taskid})
    location.reload();

}
function updateTask(id,task)
{

    
    
    $.post("update.php",{id:id,task:task})
    location.reload();

}

