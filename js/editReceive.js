$(".receive_edit_button").click(function(){
            var idDispatch = jQuery(this).attr("id");
            $.getJSON( "ajax/editReceive.php?id="+idDispatch, function( json ) {
                $.each( json, function( key, val ) {
                    console.log( "JSON Data: " + key + " val "+ val );
                  });
                  
                $("#dispatch_id").val(json.id);  
                $("#r_docno").val(json.docno);
                $("#r_date").val(json.date);
                $("#r_title").val(json.title);
                $("#r_send").val(json.received);
                
                return ;
            });
        });