$(document).ready(function(){
	$('#form_btn').click(function(){
		$('#msg_m').fadeOut();
		var name = $('#name').val();
		var email = $('#email').val();
		var subject = $('#subject').val();
		var message = $('#message').val();
		if(name.length==0 || email.length==0 || subject.length==0 || message.length==0){
			$('#msg_m').text("Empty Fields!!");
			$('#msg_m').fadeIn();
			$('#msg_m').attr("color","red");
			return;
		}
		$('#msg_m').fadeOut();
		$('#form_btn').attr("disabled","true");
		$('#form_btn').text("SENDING MESSAGE...");

		$.ajax({
			url:"https://formspree.io/danish.nayeem.99@gmail.com",
			method:"POST",
			date:{name:name,email:email,subject:subject,message:message},
			dataType:"json",
		}).done(function(){
			$('#form_btn').css("display","none");
			$('#msg_m').text("Message has Been Sent...");
			$('#msg_m').css("display","");
			$('#msg_m').attr("color","green");
		}).error(function(){
			$('#form_btn').fadeOut();
			$('#msg_m').text("Error: Try Again Later..");
			$('#msg_m').fadeIn();
			$('#msg_m').attr("color","red");
		});
	});
});
