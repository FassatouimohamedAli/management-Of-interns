$(document).ready(function () {
    $('#save').click(function (e) {
        //e.preventDefault();
        var titre = $('input[name=t]').val();
        var description = $('input[name=des]').val();
        var domain = $('input[name=d]').val();
        var etat = $('#sel1').val();
        var encadrant = $('#sel2').val();

        if (titre === '' || description === '' || domain === '' || etat === '' || encadrant === '') {
            alert("All fields are required");
            return;
        }

        if (!titre.match(/^[a-zA-Z\s]+$/)) {
            alert("Invalid title");
            return;
        }

        if (!description.match(/^[a-zA-Z\s]+$/)) {
            alert("Invalid description");
            return;
        }
        if (!domain.match(/^[a-zA-Z]+$/)) {
            alert("Invalid domain");
            return;
        }


        $.ajax({
            url: "addsujet.php",
            type: "post",
            data: {
                titre: titre,
                description: description,
                domain: domain,
                etat: etat,
                encadrant: encadrant
            },
            success: function (response) {
                if (response == 1) {
                    $('#myModal').modal('hide');

                    alert('Sujet added successfully');




                    //$("form").unbind("submit").submit();
                } else {
                    alert(response);
                }
            }
        });
    });

});
