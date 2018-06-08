$(document).ready(function () {

  console.log("DOM ready");

  $(".upload").css("display","none");
  $(".avviso").click(function(){
    $.post("AdminServer.php",$(this).val(),function(data){
      if(data=="ok"){
        alert("Messaggio inviato con successo");
      }else{
        alert("errore");
      }
    },"text");
  });



  $("#btn-addProdotto").click(function(){

    var form=$("#FormProdotto");
    form.validate();
    if(form.valid()){
      $.post("listaprodottoServer.php",form.serialize(),function(data){
        if(data=="ok"){

          alert("piatto aggiunto al database");

           location.reload();
        }else if(data=="ok new categoria"){
          alert("Nuova categoria ! piatto aggiunto al database");
          location.reload();
        }else if(data=="errore esiste"){
          alert("piatto ID gia usato errore !");

           location.reload();
        }
        else{
          alert("errore controllare i dati inseriti");
        }
      },"text");
    }
  });


  $(".modifica").click(function(){
    var id=$(this).val();
    $("#"+id+"ID").attr("contenteditable","true");
    $("#"+id+"name").attr("contenteditable","true");
    $("#"+id+"prezzo").attr("contenteditable","true");
    $("#"+id+"categoria").attr("contenteditable","true");
    $("#"+id+"upload").css("display","block");
    $("#"+id+"modifica").css("display","none");
    $("#"+id+"ID").focus();
    /*$.post("AdminServer.php",$(this).val(),function(data){
    if(data=="ok"){
    alert("Messaggio inviato con successo");
  }else{
  alert("errore");
}
},"text");
});*/

});



$(".upload").click(function(){
  var id=$(this).val();

  var data={"POST":"upload","piattoId": $("#"+id+"ID").html() , "piattoName":  $("#"+id+"name").html() ,"categoria":  $("#"+id+"categoria").html() , "prezzo":$("#"+id+"prezzo").html()  }
  $.post("listaprodottoServer.php",JSON.stringify(data),function(data){
    if(data=="ok"){
      alert("Piatto Modoficato");
      $("#"+id+"ID").attr("contenteditable","false");
      $("#"+id+"name").attr("contenteditable","false");
      $("#"+id+"prezzo").attr("contenteditable","false");
      $("#"+id+"categoria").attr("contenteditable","false");
      $("#"+id+"modifica").css("display","block");
      $("#"+id+"upload").css("display","none");
    }else if(data=="errore id"){
      alert("Non puoi sovrascrivere un piatto con Id esistente!");
        $("#"+id+"ID").focus();
    }
  },"text");

});
$(".rimuoviDb").click(function(){
  if(confirm("sei sicuro che vuoi eliminare il piatto selezionato ?")){
    var msg={"POST":"elimina","ID":$(this).val()};
    $.post("listaprodottoServer.php",JSON.stringify(msg),function(data){
      if(data=="ok"){
        alert("Piatto eliminato dal DB");
        location.reload();
      }else{
        alert("errore");
      }
    },"text");


  }});

});
