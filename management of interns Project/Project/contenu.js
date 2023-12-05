$(document).ready(function () {
    $("#link1").click(function () {
        $(".con").load("Allstagiaires.php");
    });

    $("#link2").click(function () {
        $(".con").load("allencand.php");
    });
    $("#link3").click(function () {
        $(".con").load("allsujet.php");
    });
});