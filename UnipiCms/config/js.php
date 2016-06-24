<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- jQuery UI -->
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!-- Leaflet map -->
<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

<!-- Form validation -->
<script src="js/jquery.validate.js"></script>

<script>
	
$(document).ready(function() {


	//--------------Debug console----------------

	$('#console-debug').hide();
	$('#btn-debug').click(function(){
		$('#console-debug').toggle();
	});



	//-----------Contact Form submit------------------

	//$("#contactForm").validate();

	$("#contactForm").validate({
	  	submitHandler: function() {
		    	
			//get input field values data to be sent to server
		    post_data = {
		        'user_name'     : $('#name').val(), 
		        'user_email'    : $('#email').val(), 
		        'phone_number'  : $('#phone').val(), 
		        'msg'           : $('#message').val()
		    };		    	

			//Ajax post data to server
			$.ajax({
	                
	            url: "template/mail.php",
	          	// url: "http://ucms.net78.net/Mail%20Service/mail.php",
	            type: "POST",
	            data: post_data
	         
	        }).done(function(){

	            $("#name").val("");
				$("#email").val("");
				$("#phone").val("");
				$("#message").val("");			

				$('<p class="message alert alert-success" style="font-size: 16px; font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;">Your message has been successfully sent! Thank you for contacting us!</p>').hide().prependTo("#contactForm").fadeIn(1000);

				$('.message').delay(1000).fadeOut(300, function(){
				   $(this).remove();
				});
	        
	        });
		}
	 });


	// function isValidEmail(email)
	// {
	//     return /^[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,4}$/.test(email)
	//         && /^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/.test(email);
	// }

	// function formValidation(oEvent) { 

	// 	if($('#name').val().length > 0 &&
	// 	   $('#email').val().length > 0 && 
	// 	   isValidEmail($('#email').val()) &&
	// 	   //$('#email').val().length > 0 && 
	// 	   $('#message').val().length > 0 ){

	// 		 $("#submit_btn").attr("disabled", false); 	
	// 	}else{
	// 		 $("#submit_btn").attr("disabled", true); 	
	// 	}		
	// } 

	// $("#submit_btn").attr("disabled", true);


	// $("#name").keyup(formValidation);
	// $("#email").keyup(formValidation);
	// $("#phone").keyup(formValidation);
	// $("#message").keyup(formValidation);


	// $("#submit_btn").click(function() {

		//get input field values data to be sent to server
	    // post_data = {
	    //     'user_name'     : $('#name').val(), 
	    //     'user_email'    : $('#email').val(), 
	    //     'phone_number'  : $('#phone').val(), 
	    //     'msg'           : $('#message').val()
	    // };

		//alert(JSON.stringify(post_data ));

		//Ajax post data to server
		// $.ajax({
                
  //           url: "template/mail.php",
  //         	// url: "http://ucms.net78.net/Mail%20Service/mail.php",
  //           type: "POST",
  //           data: post_data
         
  //       }).done(function(){

  //           $("#submit_btn").attr("disabled", true);
  //           $("#name").val("");
		// 	$("#email").val("");
		// 	$("#phone").val("");
		// 	$("#message").val("");			

		// 	$('<p class="message alert alert-success" style="font-size: 16px; font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;">Your message has been successfully sent! Thank you for contacting us!</p>').hide().prependTo("#contactForm").fadeIn(1000);

		// 	$('.message').delay(1000).fadeOut(300, function(){
		// 	   $(this).remove();
		// 	});
        
  //       });

  //       event.preventDefault();
	    
  //  	});


});

</script>

