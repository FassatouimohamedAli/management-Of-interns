var id;
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update]', function () {
        //alert($(this).data('id'));
        id = $(this).data('id'); // stocker l'ID dans une variable globale
        $('#myModal').modal('show');
    });
    $(document).on('click', '#checkbox1', function () {
        $('#checkbox2').prop('checked', false);
    });
    $(document).on('click', '#checkbox2', function () {
        $('#checkbox1').prop('checked', false);
    });
    $(document).on('click', '#update-state', function () {

        var state;
        if ($('#checkbox1').is(':checked')) {
            state = $('#checkbox1').val();
        } else if ($('#checkbox2').is(':checked')) {
            state = $('#checkbox2').val();
        } else {
            alert("Please select a state");
            return;
        }
        $.ajax({
            url: 'update.php',
            method: 'post',
            data: { id: id, state: state }, // utiliser la variable globale pour envoyer l'ID
            success: function (response) {

                $('#etat_').text(state);
                if (response == 1) {

                    alert("update successfull!");
                    //$('#myModal').modal('hide');
                } else {
                    alert("update failed!");
                }
            }
        });
    });
});
