$(".sent_edit_button").click(function(){
            var idDiry = jQuery(this).attr("id");
            $.getJSON( "ajax/editSent.php?id="+idDiry, function( json ) {
                $.each( json, function( key, val ) {
                    console.log( "JSON Data: " + key + " val "+ val );
                  });
                  
                $("#diry_id").val(json.id);
                $("#s_docno").val(json.docno);
                $("#s_date").val(json.date);
                $("#s_title").val(json.title);
                $("#s_send").val(json.send);
                
                return ;
            });
        });