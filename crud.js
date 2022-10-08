(function($) {
    read();
}(jQuery));

function read() {
    $.post({
        url: 'http://localhost/backend/list.php',
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
            url:"http://localhost/backend/delete.php",
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
    