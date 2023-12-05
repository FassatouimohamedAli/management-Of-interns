$(document).ready(function () {
    $("#search-input").on("input", function () {
        var query = $(this).val();
        if (query.length === 0) {
            $.ajax({
                url: "searchenc.php",
                method: "post",
                data: { type: "all" },
                success: function (data) {
                    $("#mytable tbody").html(data);
                }
            });
        } else {
            $.ajax({
                url: "searchenc.php",
                method: "post",
                data: { query: query },
                success: function (data) {
                    if (data == "0") {
                        alert("Encadrant With ID " + query + " not exist");
                    } else {
                        $("#mytable tbody").html(data);
                    }
                }
            });
        }
    });
});
