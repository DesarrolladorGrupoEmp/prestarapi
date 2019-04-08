$(function() {
    //---------------------------------------------------------
    //variable para el objeto del formulario
    var objt_f_cliente = {};
    //variable para el id del registro
    var idCliente = "";
    //---------------------------------------------------------
    //cierra funcion
    $("#solicitar").click(function() {
        var datos = $("#form_cliente").serialize();
        $.ajax({
            type: "POST",
            url: "../controlador/ajaxController.php",
            data: datos + "&tipo=inserta_registro&nom_tabla=cliente",
            success: function(r) {
                registrar_cliente();
                registrar_solicitud(r[0]["last_id"]);
            }
        });
        return false;
    });
    //Registra valor en la tabla de cliente
    function registrar_cliente() {
        var datos = $("#form_cliente").serialize();
        $.ajax({
            type: "POST",
            url: "../controlador/ajaxController.php",
            data: datos + "&tipo=inserta_registro&nom_tabla=clente",
            success: function(r) {}
        });
    }
    //Registra valores en tabla de solicitud
    function registrar_solicitud(id) {
        var datos = $("#form_solicitud").serialize();
        var f = new Date();
        fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate());
        datos = "FKcliente=" + id + "&fecha=" + fecha + "&" + datos;
        $.ajax({
            type: "POST",
            url: "../controlador/ajaxController.php",
            data: datos + "&tipo=inserta_registro&nom_tabla=solicitud",
            success: function(r) {
                alert(r[0]["mensaje"]);
                location.href = "../";
            }
        });
    }
});