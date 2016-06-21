/*-----------------------------------------------------------------------------------*/
/* 		Mian Js Start
/*-----------------------------------------------------------------------------------*/
$(document).ready(function($) {
"use strict"
/*-----------------------------------------------------------------------------------*/
/* 		Video Divs Show Hide
/*-----------------------------------------------------------------------------------*/
jQuery('#play').click(function(e) {
	jQuery(this).hide();
	jQuery('#pause').show();
});
jQuery('#pause').click(function(e) {
	jQuery(this).hide();
	jQuery('#play').show();
});




/*-----------------------------------------------------------------------------------*/
/* 		COURSER BOTTOM SCROLL
/*-----------------------------------------------------------------------------------*/
(function () {
  $('.mouse').removeClass('hidden');
}, 0);
setTimeout(function () {
  $('.mouse').addClass('play');
}, 1000);



/*-----------------------------------------------------------------------------------*/
/* 		Flex Slider
/*-----------------------------------------------------------------------------------*/
$(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade",
    controlNav: "thumbnails",
	slideshow: true
});


/*-----------------------------------------------------------------------------------*/
/* 		Flex Slider
/*-----------------------------------------------------------------------------------*/
$('.flex-blog').flexslider({
    animation: "fade",
	easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
	direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
	reverse: false,                 //{NEW} Boolean: Reverse the animation direction
	animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
	smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode  
	startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
	slideshow: true,                //Boolean: Animate slider automatically
	slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
	animationSpeed: 600,            //Integer: Set the speed of animations, in milliseconds
	initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
	randomize: false, 
  });
});


/*-----------------------------------------------------------------------------------*/
/*	ISOTOPE PORTFOLIO
/*-----------------------------------------------------------------------------------*/
$(document).ready(function () {
    var $container = $('.portfolio-wrapper .items');
    $container.imagesLoaded(function () {
        $container.isotope({
            itemSelector: '.item',
            layoutMode: 'fitRows'
        });
	});
    $('.filter li a').click(function () {
        $('.filter li a').removeClass('active');
        $(this).addClass('active');
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });
        return false;
    });
});




/*-----------------------------------------------------------------------------------*/
/* 		Hove Effects
/*-----------------------------------------------------------------------------------*/
 $(document).ready(function(){
    if (Modernizr.touch) {          
          // handle the closing of the overlay
          $(".close-overlay").click(function(e){
              e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
});


/*-----------------------------------------------------------------------------------*/
/* 	ANIMATION
/*-----------------------------------------------------------------------------------*/
var wow = new WOW({
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       100,          // distance to the element when triggering the animation (default is 0)
    mobile:       false        // trigger animations on mobile devices (true is default)
});
wow.init();

/*-----------------------------------------------------------------------------------*/
/*    CONTACT FORM FOOTER
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){

jQuery("#form_contacto").validationEngine('attach', {
      onValidationComplete: function(form, status){
        if (status == true) {
          $('#overlay, #PleaseWait').show();
          
          $.ajax({
            type: "POST",
            url:"Clases/send_contacto.php",
            data: {'btnContacto':true, 'nombre':$('#txtnombrec').val(), 'email':$('#txtemailc').val(), 'tel':$('#txttelc').val(), 'pais':$('#txtpaisc').val(), 'estado':$('#txtestadoc').val(), 'comentarios':$('#txtcomentariosc').val(), 'codigo':$('#txtcodigoc').val() },
            type:  'post',
            success: function(d) {
              
              //alert(d);
              //console.log(d);
              
              if(d == "<p>Captcha incorrecto</p>"){
                $('#overlay, #PleaseWait').hide();
              }
              
              $('#error_contacto').html(d);
            }
          });
        //return true;
        }
        
      }
  });

$("#formulario").bind("jqv.form.validating", function(event){
  $("#hookError").html("")
})

$("#formulario").bind("jqv.form.result", function(event , errorFound){
  if(errorFound) $("#hookError").append("There is some problems with your form");
})

$('body').prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1060; display: none;"></div>');
$('body').prepend('<div id="PleaseWait" class="wait"><img src="images/ajax-loader.gif" /></div>');
  
});

/*-----------------------------------------------------------------------------------*/
/*    CONTACT FORM INTERIOR
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){

jQuery("#form_interior").validationEngine('attach', {
      onValidationComplete: function(form, status){
        if (status == true) {
          $('#overlay, #PleaseWait').show();
          
          $.ajax({
            type: "POST",
            url:"Clases/send_interiores.php",
            data: {'btnInterior':true, 'titulo':$('#hdntituloInt').val(), 'url':$('#hdnurlInt').val(), 'nombre':$('#txtnombreInt').val(), 'email':$('#txtemailInt').val(), 'tel':$('#txttelInt').val(), 'comentarios':$('#txtcomentariosInt').val(), 'codigo':$('#txtcodigoInt').val() },
            type:  'post',
            success: function(d) {
              
              //alert(d);
              //console.log(d);
              
              if(d == "<p>Captcha incorrecto</p>"){
                $('#overlay, #PleaseWait').hide();
              }
              
              $('#error_interior').html(d);
            }
          });
        //return true;
        }
        
      }
  });

$("#formulario").bind("jqv.form.validating", function(event){
  $("#hookError").html("")
})

$("#formulario").bind("jqv.form.result", function(event , errorFound){
  if(errorFound) $("#hookError").append("There is some problems with your form");
})

$('body').prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1060; display: none;"></div>');
$('body').prepend('<div id="PleaseWait" class="wait"><img src="images/ajax-loader.gif" /></div>');
  
});

/*-----------------------------------------------------------------------------------*/
/*    CONTACT FORM TOUR
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){

jQuery("#form_tour").validationEngine('attach', {
      onValidationComplete: function(form, status){
        if (status == true) {
          $('#overlay, #PleaseWait').show();
          
          $.ajax({
            type: "POST",
            url:"Clases/send_tour.php",
            data: {'btnTour':true, 'nombre':$('#txtnombret').val(), 'email':$('#txtemailt').val(), 'tel':$('#txttelt').val(), 'comentarios':$('#txtcomentariost').val(), 'codigo':$('#txtcodigot').val() },
            type:  'post',
            success: function(d) {
              
              //alert(d);
              //console.log(d);
              
              if(d == "<p>Captcha incorrecto</p>"){
                $('#overlay, #PleaseWait').hide();
              }
              
              $('#error_tour').html(d);
            }
          });
        //return true;
        }
        
      }
  });

$("#formulario").bind("jqv.form.validating", function(event){
  $("#hookError").html("")
})

$("#formulario").bind("jqv.form.result", function(event , errorFound){
  if(errorFound) $("#hookError").append("There is some problems with your form");
})

$('body').prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1060; display: none;"></div>');
$('body').prepend('<div id="PleaseWait" class="wait"><img src="images/ajax-loader.gif" /></div>');
  
});

/*-----------------------------------------------------------------------------------*/
/*    CONTACT FORM TOUR MOVIL
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){

jQuery("#form_tour_movil").validationEngine('attach', {
      onValidationComplete: function(form, status){
        if (status == true) {
          $('#overlay, #PleaseWait').show();
          
          $.ajax({
            type: "POST",
            url:"Clases/send_tour.php",
            data: {'btnTour':true, 'nombre':$('#txtnombretm').val(), 'email':$('#txtemailtm').val(), 'tel':$('#txtteltm').val(), 'comentarios':$('#txtcomentariostm').val(), 'codigo':$('#txtcodigotm').val() },
            type:  'post',
            success: function(d) {
              
              //alert(d);
              //console.log(d);
              
              if(d == "<p>Captcha incorrecto</p>"){
                $('#overlay, #PleaseWait').hide();
              }
              
              $('#error_tourm').html(d);
            }
          });
        //return true;
        }
        
      }
  });

$("#formulario").bind("jqv.form.validating", function(event){
  $("#hookError").html("")
})

$("#formulario").bind("jqv.form.result", function(event , errorFound){
  if(errorFound) $("#hookError").append("There is some problems with your form");
})

$('body').prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1060; display: none;"></div>');
$('body').prepend('<div id="PleaseWait" class="wait"><img src="images/ajax-loader.gif" /></div>');
  
});


/*-----------------------------------------------------------------------------------*/
/*    CONTACT FORM FOOTER
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){

jQuery("#form_footer").validationEngine('attach', {
      onValidationComplete: function(form, status){
        if (status == true) {
          $('#overlay, #PleaseWait').show();
          
          $.ajax({
            type: "POST",
            url:"Clases/send_footer.php",
            data: {'btnFooter':true, 'titulo':$('#hdntitulo').val(), 'url':$('#hdnurl').val(), 'nombre':$('#txtnombre').val(), 'email':$('#txtemail').val(), 'tel':$('#txttel').val(), 'pais':$('#txtpais').val(), 'estado':$('#txtestado').val(), 'comentarios':$('#txtcomentarios').val(), 'codigo':$('#txtcodigo').val() },
            type:  'post',
            success: function(d) {
              
              //alert(d);
              //console.log(d);
              
              if(d == "<p>Captcha incorrecto</p>"){
                $('#overlay, #PleaseWait').hide();
              }
              
              $('#error').html(d);
            }
          });
        //return true;
        }
        
      }
  });

$("#formulario").bind("jqv.form.validating", function(event){
  $("#hookError").html("")
})

$("#formulario").bind("jqv.form.result", function(event , errorFound){
  if(errorFound) $("#hookError").append("There is some problems with your form");
})

$('body').prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1060; display: none;"></div>');
$('body').prepend('<div id="PleaseWait" class="wait"><img src="images/ajax-loader.gif" /></div>');
  
});

/*-----------------------------------------------------------------------------------*/
/* 		Parallax
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function(){
  jQuery.stellar({
    horizontalScrolling: false,
    scrollProperty: 'scroll',
    positionProperty: 'position',
  });
});
})(jQuery);















