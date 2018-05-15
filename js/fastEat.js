$(document).ready(function () {

    
    console.log("DOM ready");


    $("[data-toggle=list-menu]").click(function () {
        $(".navbar-list").toggleClass('active', 1000);
    });

    $("#navbar-list a").click(function () {
        $(".navbar-list").toggleClass('active',1000);
    });


    $("#formButton").click(function () {
        $("#accessForm").modal('toggle');
    })

    $("#registra").click(function(){
        $("#accessForm").modal('toggle');
        $("#registerForm").modal('toggle');
    })
})
