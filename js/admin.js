$(document).ready(function () {

  console.log("DOM ready");

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
    $.post("listaprodotto.php",$("#FormProdotto").serialize(),function(data){
      if(data=="ok"){
        alert("piatto aggiunto al database");
        location.reload();
      }else if(data=="ok new categoria"){
        alert("Nuova categoria ! piatto aggiunto al database");
        location.reload();
      }else{
        alert("errore controllare i dati inseriti");
      }
    },"text");
  });


  $(".modifica").click(function(){
    var id=$(this).val();
    $("#"+id+"ID").attr("contenteditable","true");
    $("#"+id+"name").attr("contenteditable","true");
    $("#"+id+"prezzo").attr("contenteditable","true");
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


$(".rimuoviDb").click(function(){
  if(confirm("sei sicuro che vuoi eliminare il piatto selezionato ?")){
    var msg={"POST":"elimina","ID":$(this).val()};
    $.post("listaprodotto.php",JSON.stringify(msg),function(data){
      if(data=="ok"){
        alert("Messaggio inviato con successo");
      }else{
        alert("errore");
      }
    },"text");
  }else {

  }

  /*$.post("AdminServer.php",$(this).val(),function(data){
    if(data=="ok"){
      alert("Messaggio inviato con successo");
    }else{
      alert("errore");
    }
  },"text");
});*/

});

});
