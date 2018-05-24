$(document).ready(function () {


  console.log("DOM ready");


  $(document).click(function(){
    if($("#navbar").hasClass('show')){
    $(".navbar-collapse").collapse("toggle");}
  })

});
