var id;
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update]', function () {
        id = $(this).data('id'); // store the ID in a global variable

    });
    $('#update').click(function () {
        //e.preventDefault();
        var titre = $('input[name=tt]').val();
        var description = $('input[name=desc]').val();
        var domain = $('input[name=dd]').val();
        var etat = $('#sel11').val();
        var encadrant = $('#sell2').val();

        if (titre === '' || description === '' || domain === '' || etat === '' || encadrant === '') {
            alert("All fields are required");
            return;
        }

        if (!titre.match(/^[a-zA-Z\s]+$/)) {
            alert("Invalid title name");
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
            url: "updatesujet.php",
            type: "post",
            data: {
                id: id,
                titre: titre,
                description: description,
                domain: domain,
                etat: etat,
                encadrant: encadrant
            },
            success: function (response) {
                if (response == 1) {

                    alert('sujet modify successfully');

                    $('#model').modal('hide');



                } else {
                    alert(response);
                }
            }
        });
    });

    $(document).on('click', 'a[data-role=delete]', function () {
        //alert($(this).data('id'));

        if (!confirmed) {
            id = $(this).data('id');
            confirmed = confirm("Are you sure you want to delete this item?");
        }
        if (confirmed) {
            $.ajax({
                url: 'deletesuj.php',
                method: 'post',
                data: { id: id },
                success: function (response) {

                }
            });
            confirmed = false;
        }
    });

});
