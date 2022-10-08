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
    let  deleteConfirm = confirm("Are you sure you want to delete");
    if(deleteConfirm)
    {
        $.get({
            url:$(location).attr('href')+"/backend/delete.php",
            data:{id:id},
            success:(data)=>{
                
                alert(data.sucesso);
                location.reload();
            },
            error:(data)=>{
                alert(data.erro);
                location.reload();
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

    $.get({
        url:$(location).attr('href')+"/backend/salvar.php",
        data:objc,
        success:(data)=>{
            
            alert(data.sucesso);
            location.reload();
        },
        error:(data)=>{
            alert(data.erro);
            location.reload();
        }
    
    });
  
}
$("#saveBtn").on("click",()=>{
  
    saveTasks();
    
})