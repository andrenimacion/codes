console.log("esta conectado");

$(function(){
  
    $('#search').keyup(function(){
        let search = $('#search').val();
        console.log(search);
        $.ajax({
            url: 'backend/selecttask.php',
            type: 'POST',
            data: {
               search
            },
            success: function(response){
                console.log(response);
            }
        })
    })

});