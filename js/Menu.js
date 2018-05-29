$(document).ready(function () {

  console.log("DOM ready");

  var piatto;
  var ordine=[];
  ordine[0]={"POST":"listaCarrello"};

  $.get("listaProdotto.php",function(data){

    $("#listMenu").after(data);

    $.get("CarrelloServer.php","ordine",function(data){

      if(data!="first"){
        console.log("carica");
        ordine=data;
        console.log(ordine);
      }
      });

      $(".ordine").click(function(){
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
          console.log(JSON.stringify(ordine));
        }
        caricalista();
      });

});




function caricalista(){
  $.post("CarrelloServer.php",JSON.stringify(ordine),function(data){
  },"text");
}


});
