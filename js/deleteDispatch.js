 $(document).ready(function(){  
      $('#dispatch_delete').click(function(){
          $.ajax({  
                     url:"deleteDispatch.php",  
                     method:"POST",  
                     data:$('#delete_dispatch_form').serialize(),  
                     beforeSend:function(){  
                          $('#deleteDispatchResponse').html('<span class="text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#deleteDispatchResponse').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#deleteDispatchResponse').fadeOut("slow");  
                          }, 5000);  
                     }  
                });    
      });  
 });