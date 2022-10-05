




$('#myDIV').hide();


$('#salvar').on("click", () => {

    let hora = String(new Date);
    let task = $('#pegartexto').val();
    let data = {
        task: task,
        hora: hora
    }
    
    alert("Tarefa salva com sucesso!!!");
   
    if(task == "" )
    {
        alert("Dados vazios");
        
        return;
    }
    else
    {
        $.post("salvar.php",data)
        location.reload();
    }
 

})

$('#hidecoments').on("click", () => {
    $('#myDIV').toggle();

});
//comentar

$('#delete').on("click", () => {
   
    location.reload();

});

