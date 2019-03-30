$(function() {
    console.log('hola desde registro');
    //---------------------------------------------------------
    //variable para el objeto del formulario
    var objt_f_cliente = {};
    //variable para el id del registro
    var idCliente = "";
    //---------------------------------------------------------
    //cierra funcion
    $("#solicitar").click(function() {
        var datos = $("#form_registro").serialize();
        $.ajax({
            type: "POST",
            url: "../controlador/ajaxController.php",
            data: datos + "&tipo=inserta_registro&nom_tabla=cliente",
            success: function(r) {
                registrar_solicitud();
                alert(r[0]["mensaje"]);
            }
        });
        return false;
    });

    function registrar_solicitud() {
        var datos = $("#form_solicitud").serialize();
        $.ajax({
            type: "POST",
            url: "../controlador/ajaxController.php",
            data: datos + "&tipo=inserta_registro&nom_tabla=solicitud",
            success: function(r) {
                //alert(r[0]["mensaje"]);
            }
        });
    }
});