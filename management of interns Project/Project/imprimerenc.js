$(document).ready(function () {
    var printButton = $("#print-button");
    var editColumn = $(".edit-column");
    var deletecolumn = $(".delete-column");

    printButton.click(function () {
        var dataTable = $("#mytable");
        var editButtons = dataTable.find(".btn.btn-primary.btn-lg");
        var deleteButtons = dataTable.find(".btn.btn-danger.btn-lg");

        // hide "delete" column before print
        deletecolumn.hide();
        // hide "delete" buttons before print
        deleteButtons.hide();
        // hide "Edit" column before print
        editColumn.hide();
        // hide "Edit" buttons before print
        editButtons.hide();

        var newWin = window.open("");
        newWin.document.write("<html><head><style>th{ border: 0.5px solid black; border-collapse: separate; } .edit-column, .delete-column { display: none; } th,td{ padding: 5px; text-align: center; }</style></head><body>" + dataTable.prop("outerHTML") + "</body></html>");
        newWin.print();
        newWin.close();

        // show "delete" buttons after print
        deleteButtons.show();
        // show "delete" column after print
        deletecolumn.show();
        // show "Edit" buttons after print
        editButtons.show();
        // show "Edit" column after print
        editColumn.show();
    });
});

function checkSession(callback) {
    $.get("checkSession.php", function (data) {
        var isLoggedIn = data === "1";
        callback(isLoggedIn);
    });
}
