$(document).ready(function () {
    $("#datatable").DataTable(),
        $("#datatable-buttons")
            .DataTable({
                lengthChange: !1,
                buttons: ["copy", "excel", "pdf", "colvis"],
            })
            .buttons()
            .container()
            .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(document).ready(function () {
            $("#datatable2").DataTable();
        });
});
