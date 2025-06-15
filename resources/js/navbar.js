$(document).ready(function () {
    $("#goToAbout").click(function () {
        $("html, body").animate(
            {
                scrollTop: $("#about").offset().top,
            },
            500
        );
    });

    var currentPath = window.location.pathname;
    $("#beritaTerkini, #beritaLainnya").removeClass("underline");
    if (currentPath === routeHome) {
        $("#beritaTerkini").addClass("underline");
    } else if (currentPath === routeOtherNews) {
        $("#beritaLainnya").addClass("underline");
    }
});
