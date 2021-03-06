jQuery(".vlz_pin_check").on("click", function(){
    if( jQuery("input", this).attr("value") == "0" ){
        jQuery("input", this).attr("value", "1");
        jQuery(this).removeClass("vlz_no_check");
        jQuery(this).addClass("vlz_check");
    }else{
        jQuery("input", this).attr("value", "0");
        jQuery(this).removeClass("vlz_check");
        jQuery(this).addClass("vlz_no_check");
    }
});

jQuery( document ).ready(function() {

    jQuery("#estado").on("change", function(e){
        var estado_id = jQuery("#estado").val();       
        if( estado_id != "" ){
            jQuery.getJSON( 
                HOME+"procesos/generales/municipios.php", 
                {estado: estado_id} 
            ).done(
                function( data, textStatus, jqXHR ) {
                    var html = "<option value=''>Seleccione un municipio</option>";
                    jQuery.each(data, function(i, val) {
                        html += "<option value="+val.id+">"+val.name+"</option>";
                    });
                    jQuery("#delegacion").html(html);
                }
            ).fail(
                function( jqXHR, textStatus, errorThrown ) {
                    console.log( "Error: " +  errorThrown );
                }
            );
        }

    });
  



      } 

    jQuery( function() {
    jQuery( "#datepicker" ).datepicker({
      numberOfMonths: 2,
      showButtonPanel: true
    });
  } );


   });