$(document).ready(function () {
    $('#save').click(function (e) {
        //e.preventDefault();
        var firstName = $('input[name=n]').val();
        var lastName = $('input[name=p]').val();
        var email = $('input[name=ad]').val();
        var domain = $('input[name=d]').val();
        var phoneNumber = $('input[name=t]').val();
        var stagiaire = $('#sel1').val();

        if (firstName === '' || lastName === '' || email === '' || domain === '' || phoneNumber === '' || stagiaire === '') {
            alert("All fields are required");
            return;
        }
        if (!firstName.match(/^[a-zA-Z]+$/)) {
            alert("Invalid first name");
            return;
        }
        if (!lastName.match(/^[a-zA-Z\s]+$/)) {
            alert("Invalid last lastname");
            return;
        }
        if (!domain.match(/^[a-zA-Z]+$/)) {
            alert("Invalid first lastname");
            return;
        }
        var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!email.match(emailRegex)) {
            alert("Invalid email address");
            return;
        }

        var phoneNumberRegex = /^[0-9]{8}$/;
        if (!phoneNumber.match(phoneNumberRegex)) {
            alert("Invalid phone number");
            return;
        }



        $.ajax({
            url: "addencadrant.php",
            type: "post",
            data: {
                firstName: firstName,
                lastName: lastName,
                email: email,
                domain: domain,
                phoneNumber: phoneNumber,
                stagiaire: stagiaire
            },
            success: function (response) {
                if (response == 1) {

                    alert('Encadrant added successfully');
                    $('#myModal').modal('hide');


                    //$("form").unbind("submit").submit();
                } else {
                    alert(response);
                }
            }
        });
    });

});
