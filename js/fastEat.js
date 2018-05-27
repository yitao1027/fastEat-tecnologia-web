$(document).ready(function () {


  console.log("DOM ready");


  $(document).click(function(){
    if($("#navbar").hasClass('show')){
      $(".navbar-collapse").collapse("toggle");}
    })

    $("#cookiesModal").fadeIn();
    $("#OkCookie").click(function(){
      $("#cookiesModal").fadeOut();
    })

    $("#detailCookie").click(function(){
      $("#cookiesModal").fadeOut();
    })

  });
