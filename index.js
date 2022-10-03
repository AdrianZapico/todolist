




$('#myDIV').hide();


$('#salvar').on("click", () => {

    let hora = String(new Date);
    let task = $('#pegartexto').val();
    let data = {
        task: task,
        hora: hora
    }
    
   $.post("salvar.php",data)

})

$('#hidecoments').on("click", () => {
    $('#myDIV').toggle();

});
//comentar