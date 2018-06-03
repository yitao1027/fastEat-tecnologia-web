$(document).ready(function () {
    console.log("DOM ready");


var img=new Array();
var i;
for(i=0;i<12;i++){
  img[i]="img/"+i+".jpg";

}
var a=3;

function imgChange(a){
  $("#img1").fadeOut();
  $("#img1").attr("src",img[a]);
  $("#img1").fadeIn();
  setTimeout(function(){  $("#img2").fadeOut();
    $("#img2").attr("src",img[a+1]);
    $("#img2").fadeIn();
    setTimeout(function(){  $("#img3").fadeOut();
      $("#img3").attr("src",img[a+2]);
      $("#img3").fadeIn();},2000);},2000);
}


setInterval(function(){imgChange(a);   a+=3 ;if(a>10){a=0;};},6*1000);


if( $(window).width()<987){
    $(".streetView").css("display","none");
    $(".btnStreetView").css("display","block");
}



    //Add smooth scrolling on all links inside the navbar
    $("#navbar a ").on("click", function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

            $('html, body').animate({
                    scrollTop: ($(hash).offset().top)-100}, 1000, function () {

            });
            if( $(window).width()<987){
                $('button').click();
            }

        }  // End if
    });


    $("#toTop").on("click", function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

            $("html, body").animate({
                    scrollTop: ($(hash).offset().top)-100}, 1000, function () {

            });
        }  // End if
    });
});
