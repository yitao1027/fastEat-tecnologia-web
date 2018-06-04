$(document).ready(function () {

  console.log("DOM ready");
  $("#cookiesModal").fadeIn();

  var now = new Date();

  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
    $('#ConsegnaData').val(today);

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

        $("#FormRitiro").fadeOut("fast",function(){
          $("#FormConsegna").fadeIn();
          $('#ConsegnaData').val(today);

        });


      }else{
        $("#FormConsegna").fadeOut("fast",function(){
          $("#FormRitiro").fadeIn();
          $('#RitiroData').val(today);

        });

      }
    });

    $("#btn-pagamento").click(function(){

      var validDate=false;
      var data;
      var ora;
      if($("select").val()=="TipoConsegna"){
        data=$("#ConsegnaData").val();
      //  ora=$("#ConsegnaOra").val();
        console.log(Date.parse(data));
        console.log(Date.now()+432000);
          console.log(Date.now());
        if((Date.parse(data))>Date.now() && (Date.parse(data)<Date.now()+432000) ){
        var require=$("#FormConsegna").serialize();
      }else{
        alert("errore data");
        $("#ConsegnaDate").focus();
      }
      }else {
        data=$("#RitiroData").val();
      //  ora=$("#ConsegnaOra").val();

        if((Date.parse(data))>Date.now()  && (Date.parse(data)<Date.now()+259200)){
        var require=$("#FormRitiro").serialize();
      }
      else{
        alert("errore data");
        $("#ConsegnaDate").focus();
      }
      }
      if(validDate){
      $.post("checkOut.php",require,function(data){
        alert(data);
        location.href="FASTEAT.php";
      },"text");
      //$("#FormPay").submit();
}
    });

  });
