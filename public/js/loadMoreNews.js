$("#loadMore").click(function () {
    $.ajax({
        url: "/othernews",
        data: { ajax: true },
        success: function (response) {
            $("#newsContainer").append(response); // Menambahkan berita ke container
        },
        error: function (xhr, status, error) {
            console.log("Error:", error); // Debugging jika ada error
        },
    });
});
