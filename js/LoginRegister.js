$(document).ready(function(){
  console.log("DOM ready");

  $("#LogIn").fadeIn("slow");

  $("button#TosignUp").click(function(){
    $("#LogIn").fadeOut("fast",function(){
      $("#SignUp").fadeIn("slow");
    });
  });

  $(".fa-angle-left").click(function(){
    $("#SignUp").fadeOut("fast",function(){
      $("#LogIn").fadeIn("slow");
    });
  });



  function checkPsw(){
    if($("#signUpPassword").val()!=$("#RepertPassword").val()){
      return false;
    }else {
      return true;
    }
  }








  function ConvertFormToJSON(form,func){
    var array = form.serializeArray();
    var json = {};
    json["POST"]=func || '';
    $.each(array, function() {
      json[this.name] = this.value || '';
    });
    json["psw"]=hex_sha512(json["psw"]);
    return json;
  }



  $("#signUpForm").submit(function(event){
    event.preventDefault();
    if(checkPsw()){
      var formDataJson=ConvertFormToJSON($("#signUpForm"),"signUp");
      console.log(formDataJson);
      $.post($("#signUpForm").attr('action'),JSON.stringify(formDataJson),function(data){

        $("#responseMsg").html(data);
        $("#divMsg").modal('toggle');

      },"text");
      $(".invalid-feedback").css("display","none");
    }else {
      $(".invalid-feedback").css("display","inline");
      $("#RepertPassword").focus();

    }
  });

  var response;
  $("#logInForm").submit(function(event){
    event.preventDefault();
    var formDataJson=ConvertFormToJSON($("#logInForm"),"logIn");
    console.log(formDataJson);
    $.post($("#logInForm").attr('action'),JSON.stringify(formDataJson),function(data){
      $("#responseMsg").html(data);
      $("#divMsg").modal('toggle');
      if(data=="Log In effettuato"){
        $("#divMsg").on('hidden.bs.modal', function (e) {
          document.location.href ="Menu.php";
        });
      }else if(data=="Administratore.Benvenuto!"){
        $("#divMsg").on('hidden.bs.modal', function (e) {
          document.location.href ="Administratore.php";
        });}
        else {
          $("#InputPassword").focus();
        }
      },"text");





    });

});
