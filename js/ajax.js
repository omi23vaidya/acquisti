$(document).ready(function(){
	$('form span').hide();
	
	$('form button').click(function(e){
		
		var valid = true;
		
		var first_name = $('form #fname').val();
		var middle_name = $('form #mname').val();
		var last_name = $('form #lname').val();
		var contact = $('form #contact').val();
		var email = $('form #emailadd').val();
		var login = $('form #login').val();
		var pass1 = $('form #pass1').val();
		var pass2 = $('form #pass2').val();

		if(first_name == '')
		{
			$('#fn').show();
			valid = false;
		}
		
		if(middle_name == '')
		{
			$('#mn').show();
			valid = false;
		}
		
		if(last_name == '')
		{
			$('#ln').show();
			valid = false;
		}
		
		if(contact == '')
		{
			$('#cn1').show();
			valid = false;
		}
		
		else if(!contact.match(/^[0-9]{10}/i))
		{
			$('#cn2').show();
			valid = false;
		}
		
		if(email == '')
		{
			$('#e1').show();
			valid = false;
		}
		
		else if (!email.match(/^([a-z0-9._"]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i))
		{
			$('#e2').show();
			valid = false;
		}
		
		if(login == '')
		{
			$('#log').show();
			valid = false;
		}
		
		var validated =  true;
        	
		if(!/\d/.test(pass1))
		{
			validated = false;
		}
		
		if(!/[a-z]/.test(pass1))
		{
         	validated = false;
		}
        
		if(!/[A-Z]/.test(pass1))
		{
            validated = false;
		}
        	
		if(validated == false)
		{
			$('form #p1').show();
		}
		
		if(pass1 != pass2)
		{
			$('form #p2').show();
			valid = false;
		}
		
		if(valid == true && validated == true)
		{
			$('form #response').removeClass().addClass('processing').html('Processing...').fadeIn('fast');
			var formData = $('#myForm').serialize();
			submitForm(formData);
		}
		
		else
		{
			$('form #response').removeClass().addClass('error')
				.html('<strong>Please correct the errors.</strong>').fadeIn('fast');	
			e.preventDefault();
		}
			  
	});
});

function submitForm(formData) {
	
	$.ajax({	
		type: 'POST',
		url: 'Registration.php',		
		data: formData,
		dataType: 'json',
		cache: false,
		timeout: 7000,
		success: function(data) { 			
			
			$('form #response').removeClass().addClass((data.error === true) ? 'error' : 'success')
						.html(data.msg).fadeIn('fast');	
						
			if ($('form #response').hasClass('success')) {
				
				setTimeout("$('form #response').fadeOut('fast')", 5000);
			}
		
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
						
			$('form #response').removeClass().addClass('error')
						.html('<p>There was an<strong> ' + errorThrown +
							  '</strong> error due to a<strong> ' + textStatus +
							  '</strong> condition.</p>').fadeIn('fast');			
		},				
		complete: function(XMLHttpRequest, status) { 			
			
			$('#myForm').reset();
		}
	});	
};