$(document).ready(function(){
  console.log("DOM ready");

$("#LogIn").fadeIn("slow");

  $("button#signUpForm").click(function(){
    $("#LogIn").fadeOut("fast",function(){
        $("#SignUp").fadeIn("slow");
    });
  });

  $(".fa-angle-left").click(function(){
    $("#SignUp").fadeOut("fast",function(){
       $("#LogIn").fadeIn("slow");
    });
  });


});
