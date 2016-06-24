<!-- Start jQuery code -->
<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() { 

	    //get input field values data to be sent to server
	    post_data = {
	        'user_name'     : $('#name').val(), 
	        'user_email'    : $('#email').val(), 
	        'phone_number'  : $('#phone').val(), 
	        'msg'           : $('#message').val()
	    };

	    alert("done");

	   //  //Ajax post data to server
	   //  $.post('form.php', post_data, function(response){

	   //      if(response.type == 'error'){ //load json data from server and output message     
	   //          output = '<div class="error">'+response.text+'</div>';
	   //      }else{
	   //          output = '<div class="success">'+response.text+'</div>';
	   //          //reset values in all input fields
	   //          $("#contact_form  input[required=true], #contact_form textarea[required=true]").val(''); 
	   //          $("#contact_form #contact_body").slideUp(); //hide form after success
	   //      }
	   //      $("#contact_form #contact_results").hide().html(output).slideDown();
	   //  }, 'json');
        
    // });
    
    // //reset previously set border colors and hide all message on .keyup()
    // $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() { 
    //     $(this).css('border-color',''); 
    //     $("#result").slideUp();
    // });
});
</script>