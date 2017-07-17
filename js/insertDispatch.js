 $(document).ready(function(){  
      $('#dispatch').click(function(){  
           var docno = $('#docno').val();  
           var date = $('#date').val();
           var title = $('#title').val();  
           var received = $('#received').val();
           if(docno == '' || date == '' || title == '' || received == '')  
           {  
                $('#response').html('<span class="text-danger">All Fields are required</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"insertDispatch.php",  
                     method:"POST",  
                     data:$('#dispatch_form_submit').serialize(),  
                     beforeSend:function(){  
                          $('#response').html('<span class="text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#response').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#response').fadeOut("slow");  
                          }, 5000);  
                     }  
                });  
           }  
      });  
 });