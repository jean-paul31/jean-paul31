$(document).ready(function() {
    $('#myImg')
        .mouseover(function() {
            $(this).attr("src", "assets/manu.png");
        })
        .mouseout(function() {
            $(this).attr("src", "assets/interoManue.png");
        })
        // $(".boussole1")
        //     .mouseover(function() {
        //         $("#text1").css("display", "block");
        //     })
        //     .mouseout(function() {
        //         $("#text1").css("display", "none");
        //     })
})