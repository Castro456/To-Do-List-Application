
$(document).ready(function(){ 
    $(document).on("click","#addbtn", function(){

        $("#addbtn").attr("disabled", true);
        $("#addbtn").text("Adding...");
      var text = $("#text").val();
      
      $.ajax({
      url:"classes/add.classes.php",
      type:"POST",
      data:{
        add1: text
      },

      success:function(result){
        $("#addbtn").attr("disabled", false);
        $("#addbtn").text("Add");
        $("#text").val("");

        if(result == "Enter a task to ADD"){
        toastr.warning(result);
        }

        else if(result == "Task Added")
        {
        toastr.success(result);
        }

        else{
          toastr.error(result);
        }
      }

    });
    });
  });