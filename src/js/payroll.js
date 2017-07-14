$(document).on("click", ".edit-department-modal", function () {

    $(".pr-department-modal #dept_id").val( $(this).data('dept-id'));
   $(".pr-department-modal #dept_name").val( $(this).data('dept-name'));
   $(".pr-department-modal #dept_designation").val( $(this).data('dept-designation') );
});

$(document).on("click", ".edit-vacancy-modal", function () {


    $(".pr-vacancy-modal #vacancy_id").val($(this).data('vacancy-id'));
   $(".pr-vacancy-modal #position_name").val($(this).data('position-name'));
   $(".pr-vacancy-modal #num_of_vac").val($(this).data('num-of-vac') );
    $(".pr-vacancy-modal #apply_last_date").val($(this).data('apply-last-date') );
});


$(document).on("click", ".edit-application-modal", function () {


  

    $(".pr-application-modal #application_id").val($(this).data('application-id'));
   $(".pr-application-modal #applicant_name").val($(this).data('applicant-name'));
   $(".pr-application-modal #position_id").val($(this).data('position-id') );
    $(".pr-application-modal #application_date").val($(this).data('application-date') );
     $(".pr-application-modal #status_id").val($(this).data('status-id') );
});




    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });  
        

    $('.myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    
  
    

 
    $('#apply_last_date').click(function(event){
       
   $('#myDatepicker3').datetimepicker();
    $('#myDatepicker2').datetimepicker();
});
    
  