var id;
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update]', function () {

        var $row = $(this).closest("tr");
        var values = [];
        for (var i = 1; i <= 6; i++) {
            values[i] = $row.find("td:eq(" + i + ")").text();
        }
        var firstName = values[1];
        var lastName = values[2];
        var address = values[3];
        var domain = values[4];
        var phoneNumber = values[5];
        var stagiaires = values[6];

        $('input[name=nn]').val(firstName);
        $('input[name=pp]').val(lastName);
        $('input[name=add]').val(address);
        $('input[name=dd]').val(domain);
        $('input[name=tt]').val(phoneNumber);
        $('#sell1').val(stagiaires);
    });




});