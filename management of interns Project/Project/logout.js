$(document).ready(function () {
    $('#logout').click(function () {
        if (confirm("Are you sure you want to logout?")) {
            $.ajax({
                type: "POST",
                url: "logout.php",
                success: function (data) {
                    window.location.href = "log_copy.html";
                }
            });
        }
    });
});