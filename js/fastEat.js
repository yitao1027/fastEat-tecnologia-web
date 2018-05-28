$(document).ready(function () {


  console.log("DOM ready");
  $("#cookiesModal").fadeIn();

  $(document).click(function(){
    if($("#navbar").hasClass('show')){
      $(".navbar-collapse").collapse("toggle");}
    });


    $("#OkCookie").click(function(){
        $("#cookiesModal").fadeOut();
    });

    $("#detailCookie").click(function(){
          $("#cookiesModal").fadeOut();
    });


    $("#logOutBtn").click(function(){
      $.post("server.php",JSON.stringify("logOut"),function(data){

        $("#responseMsg").html(data);
        $("#divMsg").modal('toggle');


      },"text");

    })


  });
