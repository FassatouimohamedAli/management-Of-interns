$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault();

        var n = $('input[name=n]').val();
        var p = $('input[name=p]').val();
        var c = $('input[name=c]').val();
        var ad = $('input[name=ad]').val();
        var t = $('input[name=t]').val();
        var nv = $('input[id=niv]').val();
        var s = $('input[name=s]').val();
   
        if (n == "" || p == "" || c == "" || ad == "" || t == "" || nv == "" || s == "") {
            alert("All fields are required");
            return;
        }

        if (!n.match(/^[a-zA-Z]+$/)) {
            alert("Invalid First name");
            return;
        }
        if (!p.match(/^[a-zA-Z\s]+$/)) {
            alert("Invalid  Last name");
            return;
        }
        
        if (t.length != 8 || isNaN(t)) {
            alert("Telephone number must be 8 digits and numeric only");
            return;
        }
        if (c.length != 8 || isNaN(t)) {
            alert("cin  must be 8 digits and numeric only");
            return;
        }
        var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!ad.match(emailRegex)) {
            alert("Invalid Email ");
            return;
        }

        $.ajax({
            url: "register.php",
            type: "post",
            data: { n: n, p: p, c: c, ad: ad, t: t, nv: nv, s: s },

            success: function (response) {
                alert(nv);
                if (response == 1) {

                    alert("successful registration");
                    $("form").unbind("submit").submit();
                    window.location.href = "log_copy.html";
                } else {
                    // alert("nooo");
                    alert(response);
                }
            }
        });
    });
});
