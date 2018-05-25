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


function ConvertFormToJSON(form){
      var array = form.serializeArray();
      var json = {};

      $.each(array, function() {
          json[this.name] = this.value || '';
      });

      return json;
  }


  $("#signUpForm").submit(function(event){
    event.preventDefault();
    var formDataJson=ConvertFormToJSON($("#signUpForm"));
    console.log(formDataJson);
    $.ajax({
      type:'POST',
      url:$("#signUpForm").attr('action'),
      data: JSON.stringify(formDataJson),
      contentType: "application/json; charset=utf-8",
      dataType: "json",
      success:function(response){
          $("#logIn").append(response)
      },
      failure:function(response){
          $("#logIn").append(response)
      }
    });
  });




});
