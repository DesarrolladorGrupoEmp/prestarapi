//Testimonios
jQuery(function($){
	$('.slider-testimonial').sss({
	   slideShow : true,
	   speed : 3500
	});
});

//Smartsupp Live Chat script
var _smartsupp = _smartsupp || {};
_smartsupp.key = '1bd189848695f858a608e9d5180c18a3760164f1';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
  // banner (logo)
  smartsupp('banner:set', 'image', {
    src: 'favicon.png'
})

//Sliders de valores
    //Funcion para el monto
      $( function() {
        $( "#slider-monto" ).slider({
          range: "min",
          step: 10000,
          value: 100000,
          min: 100000,
          max: 500000,
          slide: function( event, ui ) {
            $( "#amount" ).val( '$' + ui.value );
          }
        });
        $( "#amount" ).val( '$' + $( "#slider-monto" ).slider( "value" ) );
      } );

    //Funcion para los dias
      $( function() {
        $( "#slider-dias" ).slider({
          range: "min",
          step: 1,
          value: 4,
          min: 4,
          max: 30,
          slide: function( event, ui ) {
            $( "#dias" ).val(  ui.value );
          }
        });
        $( "#dias" ).val( + $( "#slider-dias" ).slider( "value" ) );
      } );
//Fin de Sliders de valores