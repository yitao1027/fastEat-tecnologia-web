$(document).ready(function () {

  console.log("DOM ready");

  var piatto;
  var ordine=[];
  ordine[0]={"POST":"ordine"};
  var numPiatto=0;
  $.post("CarrelloServer.php",JSON.stringify(ordine),function(data){

    if(data!="first"){
      console.log("carica");
      ordine=JSON.parse(data);
      numPiatto=ordine[0].totale;
      updateQuant();
    }
    ordine[0].POST="listaCarrello";

  },"text");

  $.get("listaprodottoServer.php",function(data){

    $("#listMenu").after(data);

    $(".ordini").click(function(){

      if($(".log").html()!="LogIn"){
        numPiatto++;
        var found=false;
        var name=$("#"+$(this).val()+"name").html();
        var prez=$("#"+$(this).val()+"prezzo").html();
        for (i = 0; i < ordine.length; i++) {
          if(ordine[i].piattoName==name){
            found=true;
            ordine[i].quantità++;
            break;
          }
        }
        if(found==false){
          piatto={"piattoName":name,"quantità":1,"prezzo":prez};
          ordine.push(piatto);
        }
        ordine[0].totale=numPiatto;
        $.post("CarrelloServer.php",JSON.stringify(ordine));
        updateQuant();
      }
    });

  });

  function updateQuant(){
    if(numPiatto!=0){
      $(".pop-item").css("display","block");
      if(numPiatto>9){
        $(".pop-item").css("padding-left","4px");
      }
      $(".pop-item").html(numPiatto);
    }
  }

  /*  window.addEventListener('beforeunload', function(event) {


}
});*/

});
