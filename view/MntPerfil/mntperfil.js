function init() {

}

$(document).ready(function () {
    var usu_id = $('#user_idx').val();

    if ($('#rol_idx').val() == 1) {
        $.post("../../controller/usuario.php?op=total", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);
            $('#lbltotal').html(data.TOTAL);
        });

        $.post("../../controller/usuario.php?op=totalabierto", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);
            $('#lbltotalabierto').html(data.TOTAL);
        });

        $.post("../../controller/usuario.php?op=totalcerrado", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);
            $('#lbltotalcerrado').html(data.TOTAL);
        });

    } else if ($('#rol_idx').val() == 2) {
        $.post("../../controller/ticket.php?op=total", function (data) {
            data = JSON.parse(data);
            $('#lbltotal').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=totalabierto", function (data) {
            data = JSON.parse(data);
            $('#lbltotalabierto').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=totalcerrado", function (data) {
            data = JSON.parse(data);
            $('#lbltotalcerrado').html(data.TOTAL);
        });


    } else {
        $.post("../../controller/ticket.php?op=total", function (data) {
            data = JSON.parse(data);
            $('#lbltotal').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=totalabierto", function (data) {
            data = JSON.parse(data);
            $('#lbltotalabierto').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=totalcerrado", function (data) {
            data = JSON.parse(data);
            $('#lbltotalcerrado').html(data.TOTAL);
        });

    }


});

init();



$(document).on("click", "#btnactualizar", function() {
    var pass = $("#txtpass").val();
    var newpass = $("#txtpassnew").val();

    if (pass.length == 0 || newpass.length == 0) {
        swal("¡Error!", "Campos Vacios", "error");
    } else {
        if (pass == newpass) {

            var usu_id = $('#user_idx').val();
            $.post("../../controller/usuario.php?op=password", { usu_id: usu_id, usu_pass: newpass }, function(data) {
                swal("Itec", "Contraseña Actualizada", "success");
            });

        } else {
            swal("¡Error!", "Las contraseñas no coinciden", "error");
        }
    }
});

