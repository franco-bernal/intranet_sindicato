// barra 

$('body').on('click', '#popupback', function() {
    let margin = $(".barra").css("margin-left");
    openCloseBar(0);
});
$('body').on('click', '.openbarra', function() {
    let margin = $(".barra").css("margin-left");
    openCloseBar(margin);
});

function openCloseBar(margin) {
    margin = parseInt(margin, 10);
    if (margin < 0) {
        $("#popupback").fadeIn('slow');
        $('.barra').animate({
            "margin-left": '0px'
        }, 500);

    } else {
        $("#popupback").fadeOut('slow');
        $('.barra').animate({
            "margin-left": '-300px'
        }, 500);

    }
}