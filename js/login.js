$(document).ready(function(){ 
  $(document).on("click","#log", function(){

      $("#log").attr("disabled", true);
      $("#log").text("Login...");
    var email = $("#email").val();
    var pass = $("#pass").val();
    
    $.ajax({
    url:"classes/login.classes.php",
    type:"POST",
    data:{
      em: email,
      psr : pass
    },

    success:function(result){
      $("#log").attr("disabled", false);
      $("#log").text("Login");

      if(result == "Please Fill both the Fields"){
        toastr.warning(result);
        }

        else if(result == "Enter valid Mail Format")
        {
        toastr.warning(result);
        }

        else if(result == "Message: Username or Password Incorrect")
        {
        toastr.warning(result);
        }

        else if(result == "Success")
        {
        $("input").val("");
        toastr.success(result);
        window.setTimeout(function(){
          location.reload();
        },800);
        }

        else{
          toastr.error(result);
        }
    }

  });
  });
});