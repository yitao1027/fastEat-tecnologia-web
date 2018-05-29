$(document).ready(function () {





  console.log("DOM ready");

  var piatto;
  var ordine=[];
  ordine[0]={"POST":"listaCarrello"};

  $.get("server.php","ordine",function(data){
      console.log(data);
  });


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
        console.log(ordine);
      }
      caricalista();
    });

  });

  function caricalista(){
    $.post("server.php",ordine,function(data){
    },"text");
  }


});
