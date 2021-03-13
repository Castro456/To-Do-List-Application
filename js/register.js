$(document).ready(function(){ 
$(document).on("click","button", function(){

    $(".create").attr("disabled", true);
    $(".create").text("Creating...");
    var firstname = $(".firstname").val();
    var email = $(".email").val();
    var usr = $(".usr").val();
    var psr = $(".psr").val();
    var dob = $(".dob1").val();
    var age = $(".age").val();

    $.ajax({
    url:"classes/register.classes.php",
    type:"POST",
    data:{
    firstname: firstname,
    email: email,
    usr: usr,
    psr: psr,
    dob: dob,
    age: age
    },

    success:function(result){
        $(".create").attr("disabled", false);
        $(".create").text("Create");

      if(result == "Please fill all the Details"){
      toastr.warning(result);
      }

      else if(result == "Name only be characters")
      {
      toastr.warning(result);
      }

      else if(result == "Password mustbe atleast 4 characters")
      {
      toastr.warning(result);
      }

      else if(result == "Enter a valid email address")
      {
      toastr.warning(result);
      }
      
      else if(result == "Entred email already exists")
      {
      toastr.warning(result);
      }

      else if(result == "Age must be above 1")
      {
      toastr.warning(result);
      }

      else if(result == "Registered Successfully can Login Now")
      {
        $("input").val("");
      toastr.success(result);
      window.setTimeout(function(){
        location.replace("login.php");  
      },800);
      }

      else{
        toastr.error(result);
      }
    },

});
});
});