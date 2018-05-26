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


function ConvertFormToJSON(form,func){
      var array = form.serializeArray();
      var json = {};
      json["POST"]=func || '';
      $.each(array, function() {
          json[this.name] = this.value || '';
      });

      return json;
  }


  $("#signUpForm").submit(function(event){
    event.preventDefault();
    var formDataJson=ConvertFormToJSON($("#signUpForm"),"signUp");
    console.log(formDataJson);
    $.post($("#signUpForm").attr('action'),JSON.stringify(formDataJson),function(data){

            $("#responseMsg").html(data);
            $("#divMsg").modal('toggle');

    },"text");

    });

    $("#logInForm").submit(function(event){
      event.preventDefault();
      var formDataJson=ConvertFormToJSON($("#logInForm"),"logIn");

      $.post($("#logInForm").attr('action'),JSON.stringify(formDataJson),function(data){

              $("#responseMsg").html(data);
              $("#divMsg").modal('toggle');

      },"text");

      });



/*
$.ajax({
  type:'POST',
  url:$("#signUpForm").attr('action'),
  data: JSON.stringify(formDataJson),
  contentType: "application/json; charset=utf-8",
  dataType: "json",
  success:function(response){
      $("#SignUp").append(response)
  },
  failure:function(response){
      $("#SignUp").append(response)
  }
});
});

*/


});
