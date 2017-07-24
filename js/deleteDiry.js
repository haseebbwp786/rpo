 $(document).ready(function(){  
      $('#diry_delete').click(function(){
          $.ajax({  
                     url:"deleteDiry.php",  
                     method:"POST",  
                     data:$('#delete_diry_form').serialize(),  
                     beforeSend:function(){  
                          $('#deleteDiryResponse').html('<span class="text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#deleteDiryResponse').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#deleteDiryResponse').fadeOut("slow");  
                          }, 5000);  
                     }  
                });    
      });  
 });