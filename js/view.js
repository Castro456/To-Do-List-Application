$(document).ready(function(){
    $.ajax({
    url:"classes/view.classes.php",
    type:"POST",
    success:function(result){
          $("#table").html(result);
    }
  });


  $(document).on("click",".deletebtn", function(){
    $(".deletebtn").attr("disabled", true);
    $(".deletebtn").text("Deleting..");
    
    $.ajax({
    url:"classes/delete.classes.php",
    type:"POST",
    data:{
      delete: $(this).val(),
    },

    success:function(result){
      $(".deletebtn").attr("disabled", false);
      $(".deletebtn").text("Delete");

      if(result == "Deleted")
      {
      toastr.error(result);
      }

      else{
        toastr.error(result);
      }
      
      window.setTimeout(function(){
        location.reload();
      },900);
    }
  });
  });


  $(document).on("click",".donebutton", function(){
    $(".donebutton").attr("disabled", true);
    $(".donebutton").text("Done...");

    $.ajax({
    url:"classes/done.classes.php",
    type:"POST",
    data:{
      done: $(this).val()
    },

    success:function(result){
      $(".donebutton").attr("disabled", false);
      $(".donebutton").text("Done");
      if(result == "Task Marked as Done")
      {
      toastr.success(result);
      }
      else{
        toastr.error(result);
      }
      window.setTimeout(function(){
        location.reload();
      },900);
    }
  });
  });

$(document).on("click","button[data-role=update]",function(){

  var id=($(this).data('id'));
  var task = $('#'+id).children("td[data-target=task]").text();    
  $("#task").val(task);
  $("#userid").val(id);
  $("#mymodal").modal("toggle");  
});

$("#save").click(function(){
  $("#save").attr("disabled", true);
  $("#save").text("Saving...");
	var id= $("#userid").val();
  var task= $("#task").val();
  console.log(id);
  console.log(task);
	$.ajax({
		url: "classes/update.classes.php",
		type:"POST",
		data:{id:id, task:task
    },
		success: function(result){
      $("#save").attr("disabled", false);
      $("#save").text("Save changes");
      $("#mymodal").modal("toggle");
      toastr.success(result);
      window.setTimeout(function(){
        location.reload();
      },900);
		}
	})
});

  });