 $(document).ready(function(){  
      $('#new_dept').click(function(){  
           var deptName = $('#deptName').val();
           if(deptName == '')  
           {  
                $('#addDeptResponse').html('<span class="text-danger">All Fields are required</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"ajax/addDepartment.php",  
                     method:"POST",  
                     data:$('#add_new_dept').serialize(),  
                     beforeSend:function(){  
                          $('#addDeptResponse').html('<span class="text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#addDeptResponse').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#addDeptResponse').fadeOut("slow");  
                          }, 5000);  
                     } 
                });  
           }  
      });  
 });