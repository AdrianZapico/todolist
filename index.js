




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
 
    alert("Tarefa salva com sucesso!!!");
})

$('#hidecoments').on("click", () => {
    $('#myDIV').toggle();

});
//comentar

$('#delete').on("click", () => {
   
    location.reload();

});

