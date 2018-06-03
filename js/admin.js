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
});
