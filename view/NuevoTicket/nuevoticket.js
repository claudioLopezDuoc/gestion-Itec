function init() {
    $("#ticket_form").on("submit", function(e) {
        guardaryeditar(e);
    });
}

$(document).ready(function() {
    $('#tick_descrip').summernote({
        height: 150,
        callback: {
            onImageUpload: function(image) {
                console.log("Image detect...");
                myimagetreat(image[0]);
            },
            onPaste: function(e) {
                console.log("Text detect...");
            }
        }
    });

    $.post("../../controller/categoria.php?op=combo", function(data, status) {
        $('#cat_id').html(data);
    });
});

function guardaryeditar(e) {
    e.preventDefault();
    var formData = new FormData($("#ticket_form")[0]);
    $.ajax({
        url: "../../controller/ticket.php?op=insert",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
            $('#tick_titulo').val('');
            $('#tick_descrip').summernote('resert');
            swal("Correcto!", "Registrado Correctamente", "success")
        }
    })
}

init();