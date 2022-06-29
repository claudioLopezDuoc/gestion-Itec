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


        
        $.post("../../controller/usuario.php?op=informatica", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);
            $('#lblinformatica').html(data.TOTAL);
        });

        $.post("../../controller/usuario.php?op=redes", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);
            $('#lblredes').html(data.TOTAL);
        });
        $.post("../../controller/usuario.php?op=teleco", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);
            $('#lblteleco').html(data.TOTAL);
        });
        $.post("../../controller/usuario.php?op=otros", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);
            $('#lblotros').html(data.TOTAL);
        });
       
        
    
    });
});

init();