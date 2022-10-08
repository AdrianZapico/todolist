(function($) {
    read();
}(jQuery));

function read() {
    $.post({
        url: $(location).attr('href')+"/backend/list.php",
        success: data=> {
            data.map(row=>{
                let deleteBtn = $('<button></button>').text("delete").attr("onclick",`deleteTask(${row.id})`);
                let updateBtn = $('<button></button>').text("alterar").attr("onclick",`updateTask(${row.id},'${row.task}')`);
                let listTask = $("<p></p>").text(row.task).attr("class","linetask").append(deleteBtn,updateBtn);
                $("#tasks").append(listTask);
            
            })
                
        }
    })
}
function deleteTask(id){
    let  deleteConfirm = confirm("Tem certeza que quer deletar???");
    if(deleteConfirm)
    {
        $.get({
            url:$(location).attr('href')+"/backend/delete.php",
            data:{id:id},
            success:(data)=>{
                
                dataUpdate();
                alert(data.sucesso);
                
            },
            error:(data)=>{
                alert(data.erro);
                dataUpdate();
            }
        
        });
      
    }  
    else{
        return;
    }
}
    
function saveTasks(){
 
    let task = $("#inputTask").val();
    let hora = new Date();
    let objc = {
        task:task,
        hora:hora
    };
    if(task.length <= 2){

        return alert("Campo vazio!!!")
    }

    $.get({
        url:$(location).attr('href')+"/backend/salvar.php",
        data:objc,
        success:(data)=>{
            dataUpdate();
            alert(data.sucesso);
           
        },
        error:(data)=>{
            alert(data.erro);
          
        }
    
    });
  
}
$("#saveBtn").on("click",()=>{
  
    saveTasks();
    
})

function dataUpdate(){
    
    $("#tasks").empty();
    read();
}