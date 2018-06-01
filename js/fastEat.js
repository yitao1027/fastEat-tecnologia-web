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

    $("#divMsg").on('hidden.bs.modal', function (e) {
      location.reload();
    })

    $(".cart-container").click(function(){
      location.assign("Carrello.php");
    })

    $(".rimuovi").click(function(){
      var request=[{"POST":"rimuovi"}];
      request.push({"piattoName": $(this).attr("value")});
      $.post("CarrelloServer.php",JSON.stringify(request),function(data){
        location.reload();
      },"text");

    })

      $("#FormRitiro").css("display","none");



    $("select").on("change",function(){
      if((this.value)=="TipoConsegna"){

        $("#FormRitiro").fadeOut("slow",function(){
          $("#FormConsegna").fadeIn();
        });


      }else{
        $("#FormConsegna").fadeOut("slow",function(){
          $("#FormRitiro").fadeIn();
        });

      }
    });

    $("#btn-pagamento").click(function(){
      if($("select").val()=="TipoConsegna"){
            $("#FormConsegna").submit();
      }else {
            $("#FormRitiro").submit();
      }
      //$("#FormPay").submit();

    });

  });
