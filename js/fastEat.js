$(document).ready(function () {

  console.log("DOM ready");
  $("#cookiesModal").fadeIn();

  var now = new Date();

  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);
  var today = now.getFullYear()+"-"+(month)+"-"+(day);
  $('#ConsegnaData').val(today);

  $(document).click(function(){
    if($("#navbar").hasClass('show')){
      $(".navbar-collapse").collapse("toggle");}
    });


    $("#OkCookie").click(function(){
      $.get("FASTEAT.php?cookie=ok");
      $("#cookiesModal").fadeOut();
    });

    $("#detailCookie").click(function(){
      $("#cookiesModal").fadeOut();
    });


    $("#logOutBtn").click(function(){
      $.post("LoginRegisterserver.php",JSON.stringify("logOut"),function(data){

        $("#responseMsg").html(data);
        $("#divMsg").modal('toggle');
        $("#divMsg").on('hidden.bs.modal', function (e) {
          location.href="FASTEAT.php";
        })

      },"text");

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
        $("#costoConsegna").html("€ 3");
        var total=$("#totaleCosto").html().replace("€","");
        total=parseInt(total)+3;

        $("#totaleCosto").html("€ "+total);
        $("#FormRitiro").fadeOut("fast",function(){
          $("#FormConsegna").fadeIn();
          $('#ConsegnaData').val(today);

        });


      }else{
        $("#costoConsegna").html("€ 0");
        $("#totaleCosto").html(  $("#subtotale").html());
        $("#FormConsegna").fadeOut("fast",function(){
          $("#FormRitiro").fadeIn();
          $('#RitiroData').val(today);

        });

      }
    });

  

    $("#btn-pagamento").click(function(){

      var validDate=false;

      if($("select").val()=="TipoConsegna"){
        var data=new Date($("#ConsegnaData").val()+" "+$("#ConsegnaOra").val());

        if((Date.parse(data))>Date.now() && (Date.parse(data)<Date.now()+432000000) ){
          var require=$("#FormConsegna").serialize();
          validDate=true;
        }else{
          alert("Data consegna errore");
          $("#ConsegnaDate").focus();
        }
      }else {
        var data=new Date($("#RitiroData").val()+" "+$("#RitiroOra").val());
        if((Date.parse(data))>Date.now()  && (Date.parse(data)<Date.now()+432000000)){
          var require=$("#FormRitiro").serialize();
          validDate=true;
        }
        else{
          alert("Data consegna errore");
          $("#ConsegnaDate").focus();
        }
      }
      if(validDate){
        $.post("checkOutServer.php",require,function(data){
          alert(data);
          location.href="FASTEAT.php";
        },"text");
        //$("#FormPay").submit();
      }
    });

  });
