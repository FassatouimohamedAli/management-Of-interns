var id;
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update]', function () {
        id = $(this).data('id'); // store the ID in a global variable

    });
    $('#update').click(function () {
        //e.preventDefault();
        var firstName = $('input[name=nn]').val();
        var lastName = $('input[name=pp]').val();
        var email = $('input[name=add]').val();
        var domain = $('input[name=dd]').val();
        var phoneNumber = $('input[name=tt]').val();
        var stagiaire = $('#sell1').val();

        if (firstName === '' || lastName === '' || email === '' || domain === '' || phoneNumber === '' || stagiaire === '') {
            alert("All fields are required");
            return;
        }
        if (!firstName.match(/^[a-zA-Z]+$/)) {
            alert("Invalid first name");
            return;
        }
        if (!lastName.match(/^[a-zA-Z\s]+$/)) {
            alert("Invalid  lastname");
            return;
        }
        if (!domain.match(/^[a-zA-Z]+$/)) {
            alert("Invalid domain");
            return;
        }
        var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!email.match(emailRegex)) {
            alert("Invalid Email ");
            return;
        }

        var phoneNumberRegex = /^[0-9]{8}$/;
        if (!phoneNumber.match(phoneNumberRegex)) {
            alert("Invalid Phone Number");
            return;
        }





        $.ajax({
            url: "updaten.php",
            type: "post",
            data: {
                id: id,
                firstName: firstName,
                lastName: lastName,
                email: email,
                domain: domain,
                phoneNumber: phoneNumber,
                stagiaire: stagiaire
            },
            success: function (response) {
                if (response == 1) {

                    alert('Encadrant modify successfully');

                    $('#myModal').modal('hide');



                } else {
                    alert(response);
                }
            }
        });
    });

});
