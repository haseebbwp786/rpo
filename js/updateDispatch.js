 $(document).ready(function(){  
      $('#update_dispatch').click(function(){  
           var r_docno = $('#r_docno').val();  
           var r_date = $('#r_date').val();
           var r_title = $('#r_title').val();  
           var r_send = $('#r_send').val();
           if(r_docno == '' || r_date == '' || r_title == '' || r_send == '')  
           {  
                $('#updateDispatchResponse').html('<span class="text-danger">All Fields are required</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"updateDispatch.php",  
                     method:"POST",  
                     data:$('#update_dispatch_form').serialize(),  
                     beforeSend:function(){  
                          $('#updateDispatchResponse').html('<span class="text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#updateDispatchResponse').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#updateDispatchResponse').fadeOut("slow");  
                          }, 5000);  
                     }  
                });  
           }  
      });  
 });