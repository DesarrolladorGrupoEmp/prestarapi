//Testimonios
jQuery(function($) {
    $('.slider-testimonial').sss({
        slideShow: true,
        speed: 3500
    });
});
//Smartsupp Live Chat script
var _smartsupp = _smartsupp || {};
_smartsupp.key = '1bd189848695f858a608e9d5180c18a3760164f1';
window.smartsupp || (function(d) {
    var s, c, o = smartsupp = function() {
        o._.push(arguments)
    };
    o._ = [];
    s = d.getElementsByTagName('script')[0];
    c = d.createElement('script');
    c.type = 'text/javascript';
    c.charset = 'utf-8';
    c.async = true;
    c.src = 'https://www.smartsuppchat.com/loader.js?';
    s.parentNode.insertBefore(c, s);
})(document);
// banner (logo)
smartsupp('banner:set', 'image', {
    src: '../images/favicon.png'
})
//Sliders de valores
//Funcion para el monto
$(function() {
    $("#slider-monto").slider({
        range: "min",
        step: 10000,
        value: 100000,
        min: 100000,
        max: 500000,
        slide: function(event, ui) {
            //Monto
            monto = parseInt(ui.value);
            $("#monto").val(ui.value);
            $("#monto_mask").val('$ ' + Intl.NumberFormat("de-DE").format(monto));
            //Monto solicitado
            $("#monto_solicitado").val(ui.value);
            $("#monto_solicitado_mask").val('$ ' + Intl.NumberFormat("de-DE").format(monto));
            //Tasa de interes
            tasa = monto * 0.38 / 100;
            $("#tasa").val();
            $("#tasa_mask").val('$ ' + Intl.NumberFormat("de-DE").format(tasa));
            //Plataforma
            plataforma = parseInt($("#plataforma").val());
            $("#plataforma_mask").val('$ ' + Intl.NumberFormat("de-DE").format(plataforma));
            //Seguro
            seguro = monto * 4 / 100;
            $("#seguro").val(seguro);
            $("#seguro_mask").val('$ ' + Intl.NumberFormat("de-DE").format(seguro));
            //Subtotal
            subtotal = monto + tasa + plataforma + seguro;
            $("#subtotal").val(subtotal);
            $("#subtotal_mask").val('$ ' + Intl.NumberFormat("de-DE").format(subtotal));
            //IVA
            iva = monto * 0.19;
            $("#iva").val('$ ' + iva);
            $("#iva_mask").val('$ ' + Intl.NumberFormat("de-DE").format(iva));
            //Total
            total = subtotal + iva;
            $("#total").val('$ ' + total);
            $("#total_mask").val('$ ' + Intl.NumberFormat("de-DE").format(total));
        }
    });
    $("#monto").val('$' + $("#slider-monto").slider("value"));
});
//Funcion para los dias
$(function() {
    $("#slider-dias").slider({
        range: "min",
        step: 1,
        value: 4,
        min: 4,
        max: 30,
        slide: function(event, ui) {
            //Monto
            monto = $("#monto_solicitado").val();
            $("#dias").val(ui.value);
            dias = ui.value;
            tasa = monto * (0.38 * dias) / 100;
            $("#tasa").val(tasa);
            $("#tasa_mask").val('$ ' + Intl.NumberFormat("de-DE").format(tasa));
        }
    });
    $("#dias").val(+$("#slider-dias").slider("value"));
});
//Fin de Sliders de valores