$(document).ready(function () {




  console.log("DOM ready");

  var piatto;
  var ordine=["listaCarrello"];

  $.get("listaProdotto.php",function(data){
    $("#listMenu").after(data);
    $(".ordine").click(function(){
      console.log("ordina prodotto");
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
        console.log(ordine);
      
      }


    });
  });



});
