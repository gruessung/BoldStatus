$(document).ready( function(){
    $(".column-status").css( "font-weight", "bold").css("text-align", "center").css("color", "black").css("width", "150px").css("vertical-align", "middle");
    $(".column-status").not("th").each(function(index) {
        var aktuellerStatus = $(this).find("span").html();
        $(this).html('<span title="'+aktuellerStatus+'">'+aktuellerStatus+'</span>');
    });
});
