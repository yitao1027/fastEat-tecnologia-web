  $(document).ready(function () {


    console.log("DOM ready");

    $.get("listaProdotto.php",function(data){
        $("#listMenu").after(data);
    });

  });
