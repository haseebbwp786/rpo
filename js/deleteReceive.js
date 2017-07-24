$(".receive_Delete_button").click(function(){
            var idDiry = jQuery(this).attr("id");
            $.getJSON( "ajax/editSent.php?id="+idDiry, function( json ) {
                $.each( json, function( key, val ) {
                    console.log( "JSON Data: " + key + " val "+ val );
                  });
                  
                $("#del_dispatch").val(json.id);
                
                return ;
            });
        });