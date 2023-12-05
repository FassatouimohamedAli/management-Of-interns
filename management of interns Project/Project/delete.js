var id;
var confirmed = false;

$(document).ready(function () {
    $(document).on('click', 'a[data-role=delete]', function () {
        //alert($(this).data('id'));

        if (!confirmed) {
            id = $(this).data('id');
            confirmed = confirm("Are you sure you want to delete this item?");
        }
        if (confirmed) {
            $.ajax({
                url: 'delete.php',
                method: 'post',
                data: { id: id },
                success: function (response) {

                }
            });
            confirmed = false;
        }
    });
});
