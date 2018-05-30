$(document).ready(function () {

  console.log("DOM ready");

  var piatto;
  var ordine=[];
  ordine[0]={"POST":"ordine"};

  $.post("CarrelloServer.php",JSON.stringify(ordine),function(data){

    if(data!="first"){
      console.log("carica");
      ordine=JSON.parse(data);
    }
    ordine[0]={"POST":"listaCarrello"};
      console.log(ordine);
  },"text");

  $.get("listaProdotto.php",function(data){

    $("#listMenu").after(data);

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
      });

});


$(window).on("unload", function(event){
  $.post("CarrelloServer.php",JSON.stringify(ordine),function(data){
  },"text");
});


});
