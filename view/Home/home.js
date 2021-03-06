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

        $.post("../../controller/usuario.php?op=asignado", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);
            $('#lblasignado').html(data.TOTAL);
        });

        $.post("../../controller/usuario.php?op=noasignado", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);
            $('#lblnoasignado').html(data.TOTAL);
        });

        $.post("../../controller/usuario.php?op=grafico", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);

            new Morris.Bar({
                element: 'divgrafico',
                data: data,
                xkey: 'nom',
                ykeys: ['total'],
                labels: ['Total'],
                barColors: ["#07e2ed"],
            });
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

        $.post("../../controller/ticket.php?op=asignado", function (data) {
            data = JSON.parse(data);
            $('#lblasignado').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=noasignado", function (data) {
            data = JSON.parse(data);
            $('#lblnoasignado').html(data.TOTAL);
        });


        $.post("../../controller/ticket.php?op=grafico", function (data) {
            data = JSON.parse(data);

            new Morris.Bar({
                element: 'divgrafico',
                data: data,
                xkey: 'nom',
                ykeys: ['total'],
                labels: ['Total'],
                barColors: ["#07e2ed"],
            });
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

        $.post("../../controller/ticket.php?op=asignado", function (data) {
            data = JSON.parse(data);
            $('#lblasignado').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=noasignado", function (data) {
            data = JSON.parse(data);
            $('#lblnoasignado').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=grafico", function (data) {
            data = JSON.parse(data);

            new Morris.Bar({
                element: 'divgrafico',
                data: data,
                xkey: 'nom',
                ykeys: ['total'],
                labels: ['Total'],
                barColors: ["#07e2ed"],
            });
        });

    }


});

init();