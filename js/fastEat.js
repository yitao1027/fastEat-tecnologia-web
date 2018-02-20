$(document).ready(function () {


  console.log("DOM ready");


  $("[data-toggle=list-menu]").click(function () {
    $(".navbar-list").toggleClass('active', 1000);
  });

  $("#navbar-list a").click(function () {
    $(".navbar-list").toggleClass('active',1000);
  });


  $("#formButton").click(function () {
    $("#accessForm").modal('toggle');
  })

  $("#registra").click(function(){
    $("#accessForm").modal('toggle');
    $("#registerForm").modal('toggle');
  })





  $("#psw").blur(function(){
    $("#messagePsw").css({"display" : "none"});
  });


  $("#psw").keyup(function(){
    if($("#psw").val().length >= 8){
      $("#messagePsw").css({"display" : "none"});
    }else{
      $("#msm").html("password length min 8 char");
      $("#messagePsw").css({"display" : "block"});
    }
  });

  $("#confpsw").keyup(function(){
    if(  $("#confpsw").val().length >= 8){
      $("#messageConfpsw").css({"display" : "none"});
      if(  $("#confpsw").val() !=  $("#psw").val()){
        $("#confmsm").html("errore non corrisponde al password");
        $("#messageConfpsw").css({"display" : "block"});
        $("#register").prop("disabled",true) ;
        }
        else{
          $("#register").prop("disabled",false) ;
        }
    }else{
      $("#confmsm").html("password length min 8 char");
      $("#messageConfpsw").css({"display" : "block"});
    }
  });





})
