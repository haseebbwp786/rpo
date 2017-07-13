 $(document).ready(function(){  
      $('#diry').click(function(){  
           var docno = $('#docno').val();  
           var date = $('#date').val();
           var title = $('#title').val();  
           var send = $('#send').val();
           if(docno == '' || date == '' || title == '' || send == '')  
           {  
                $('#response').html('<span class="text-danger">All Fields are required</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"insertDiry.php",  
                     method:"POST",  
                     data:$('#diry_form_submit').serialize(),  
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