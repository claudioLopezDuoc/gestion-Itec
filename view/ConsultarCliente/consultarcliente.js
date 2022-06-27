function init() {

}

$(document).ready(function () {
    $.post("../../controller/usuario.php?op=combo_usu", function (data) {
        $('#usu_asig').html(data);
    });

    $(document).on("click", "#btnenviar", function() {

        var usu_id = $('#usu_asig').val();


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

        $.post("../../controller/usuario.php?op=grafico", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);
        });
        
    
    });
});

init();