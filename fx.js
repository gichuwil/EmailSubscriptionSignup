$(document).ready(function(){
    $('#subscribe').click(function() {
	var email = $('#email').val();
			
	var varData = '&email=' + email;
	console.log(varData);
	
	$('form#frm').delay(200).empty().html('Loading...');
				
	$.ajax({
	    type: "POST",
	    url: 'mail.php',
	    data: varData,
	    datatype: 'text',
	    timeout: 5000,
	    error: function(x, t, m) {
		if(t==="timeout") {
		    $('form#frm').empty().html('Think we took too long to respond. I will check my cables and fix anything damaged. Then you can try again later. My bad.');
		    $('#wrapper').delay(5000).fadeOut(500);
		} else {
		    $('form#frm').empty().html("Ouch! I think we broke the mailman's leg. Let's wait for him to recover and we try again.");
		    $('#wrapper').delay(5000).fadeOut(500);
		}
	    },
	    
	    success: function() {
		$('form#frm').empty();
		$('#feedback').delay(700).append(function(){
                    $(this).html('Thank you for your subscription.');
                });
		$('#wrapper').delay(2000).fadeOut(500);
	    }
			
	});
	
    });
    

})(jquery);