let beritaCount = 5;

$("#loadMore").click(function () {
    $("#loadMore").addClass("hidden");
    $("#spinner").removeClass("hidden");

    $.ajax({
        url: "/othernews",
        type: "GET",
        data: {
            ajax: true,
            section: "othernews",
            offset: beritaCount,
        },
        success: function (response) {
            $("#newsContainer").append(response);
            beritaCount += 5;

            $("#loadMore").removeClass("hidden");
            $("#spinner").addClass("hidden");
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
            $("#spinner").addClass("hidden");
            $("#loadMore").removeClass("hidden").text("Gagal memuat berita");
        },
    });
});
