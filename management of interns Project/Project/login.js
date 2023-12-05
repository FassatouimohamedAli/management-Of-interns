$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault(); // to prevent the form from submitting and reloading the page
        var formData = {
            'user': $('input[name=user]').val(),
            'pw': $('input[name=pw]').val()

        };

        $.ajax({
            type: "POST",
            url: "login.php",
            data: formData,
            success: function (response) {
                if (response == 1) {

                    alert("login successfull!");
                    window.location.href = "layout.php";
                } else {
                    alert("login failed!");
                }
            }
        });
    });
    $('.btn-secondary').click(function () {
        window.location.href = 'register.html';
    });
});
