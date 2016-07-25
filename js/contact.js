$(document).ready(function(){
	$('#form_btn').click(
		function(){
			$('#msg_m').hide();
			$('#form_btn').attr("disabled","true");
			var name,email,website,message;
			name = check($('#name').val().trim());
			email = check($('#email').val().trim());
			website = check($('#website').val().trim());
			message = check($('#message').val().trim());
			if(name.length == 0 || email.length==0 || website.length==0 || message.length==0){
				form_error("Empty Field!");
				$('#form_btn').removeAttr('disabled');
				return;
			}
			form_error("Sending Message...");
			$.post("php/contact.php",{name:name,email:email,website:website,message:message}).done(
				function(data){
					if(data=="success"){
						$('#form_btn').hide(
							function(){
								form_error("Message Has Been Sent!!");
							}
						);
					}else{
						$('#form_btn').hide(
							function(){
								form_error("Server Error: Try Again Later...");
							}
						);
					}
				}
			);
		}
	);
	function form_error(dt){
		$('#msg_m').text(dt);
		$('#msg_m').fadeIn();
	}
	function check(tx){
		var i,j,k,l;
		for(i=0;i<tx.length;i++){
			if(tx.contains("\"")){
				tx = tx.replace("\"","_");
			}
			if(tx.contains("\\")){
				tx = tx.replace("\\","_");
			}
			if(tx.contains("'")){
				tx = tx.replace("'","_");
			}
		}
		return tx;
	}
});
