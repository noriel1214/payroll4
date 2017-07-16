$(function() {
    // Remove button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
        function(e) {
            e.preventDefault();
            $(this).closest('.form-inline').remove();
        }
    );
    // Add button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
        function(e) {
            e.preventDefault();
            var container = $(this).closest('[data-role="dynamic-fields"]');
            new_field_group = container.children().filter('.form-inline:first-child').clone();
            new_field_group.find('input').each(function(){
                $(this).val('');
            });
            container.append(new_field_group);
        }
    );
});








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



     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Mail'  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='Mobile'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});


function makeAjaxCall(){
    
    var BASE_URL = "<?php echo base_url();?>";
    
    alert(BASE_URL);
    $.ajax({
        type: "post",
        url: "http://localhost/CodeIgnitorTutorial/index.php/usercontroller/verifyUser",
        cache: false,               
        data: $('#userForm').serialize(),
        success: function(json){                        
        try{        
            var obj = jQuery.parseJSON(json);
            alert( obj['STATUS']);


        }catch(e) {     
            alert('Exception while request..');
        }       
        },
        error: function(){                      
            alert('Error while request..');
        }
 });}
  