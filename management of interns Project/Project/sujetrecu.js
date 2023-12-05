var id;
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update]', function () {

        var $row = $(this).closest("tr");
        var values = [];
        for (var i = 1; i <= 5; i++) {
            values[i] = $row.find("td:eq(" + i + ")").text();
        }
        var titre = values[1];
        var description = values[2];
        var domain = values[3];
        var etat = values[4];
        var encadrant = values[5];


        $('input[name=tt]').val(titre);
        $('input[name=desc]').val(description);
        $('input[name=dd]').val(domain);
        $('#sel11').val(etat);
        $('#sell2').val(encadrant);
    });




});