 $(document).ready(function(){  
      $('#updat_diry').click(function(){  
           var s_docno = $('#s_docno').val();  
           var s_date = $('#s_date').val();
           var s_title = $('#s_title').val();  
           var s_send = $('#s_send').val();
           if(s_docno == '' || s_date == '' || s_title == '' || s_send == '')  
           {  
                $('#updateDiryResponse').html('<span class="text-danger">All Fields are required</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"ajax/updateDiry.php",  
                     method:"POST",  
                     data:$('#update_diry_form').serialize(),  
                     beforeSend:function(){  
                          $('#updateDiryResponse').html('<span class="text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#updateDiryResponse').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#updateDiryResponse').fadeOut("slow");  
                          }, 5000);  
                     }  
                });  
           }  
      });  
 });