(function($) {
    $.fn.valida = function(options) {
        //codigo de la funcion
        $this = $(this)
        var set = $.extend({
            size_font: "5px",
            clase_ok: "flaticon-ok",
            color_ok: "rgb(31, 176, 27)",
            clase_error: "flaticon-error",
            color_error: "#F12121"
        }, options);
        //inputs
        $inputs = $this.filter("input");
        //objeto
        $objt = {}; //objeto para validacion
        $estado = {}; //estado del formulario
        $cont = 0;
        for (var i = 0; i < $inputs.prevObject[0].length; i++) {
            if (($inputs.prevObject[0][i]["value"] == "") && ($inputs.prevObject[0][i]["required"] == true)) {
                //console.log($inputs.prevObject[0][i]["id"]+" está vacio.");
                $objt[i] = {
                    id: $inputs.prevObject[0][i]["id"],
                    valor: $inputs.prevObject[0][i]["value"],
                    req: $inputs.prevObject[0][i]["required"]
                };
                //console.log($inputs.prevObject[0][i]["required"]);
                //pone el estilo rojo
                //$("#"+$inputs.prevObject[0][i]["id"]).css("border","solid 3px red");
                $("<span id='s" + i + "' class='" + set.clase_error + "' style='color:" + set.color_error + "; font-size:" + set.size_font + "'></span>").insertAfter($("#" + $inputs.prevObject[0][i]["id"]));
                $("#" + $inputs.prevObject[0][i]["id"]).focus();
            } else {
                $("<span id='s" + i + "' class='" + set.clase_ok + "' style='color:" + set.color_ok + "; font-size:'" + set.size_font + "'></span>").insertAfter($("#" + $inputs.prevObject[0][i]["id"]));
                //console.log($inputs.prevObject[0][i]["required"]);
            }
        }; //cierra for
        //$cont=$cont + 1;
        if (Object.keys($objt).length > 0) {
            $estado.estado = false;
            $estado.objt = $objt;
        } else {
            $estado.estado = true;
            $estado.objt = $objt;
            $estado.srlz = $this.serialize()
        }
        /**/
        //---------------------------------------
        function quita_span() {
            $("span." + set.clase_error).remove();
            $("span." + set.clase_ok).remove();
        };
        var spans = $("span").length;
        console.log("spans " + spans + " inputs" + i);
        return $estado;
    };
})(jQuery);