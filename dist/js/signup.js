$(document).ready(function() {
	$("#signup").click(function() {
		var professor_id = $("#professor_id").val();
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var password = $("#password2").val();
		var cpassword = $("#cpassword").val();
		if (professor_id == '' || password == '' || cpassword == ''
			|| first_name == '' || last_name == '') {
			alert("Please fill all fields...!!!!!!");
		} 
		else if ((password.length) < 8) {
			alert("Password should atleast 8 character in length...!!!!!!");
		} 
		else if (!(password).match(cpassword)) {
			alert("Your passwords don't match. Try again?");
		} 
		else {
			$.post("signup.php", {
				professor_id: professor_id,
				first_name: first_name,
				last_name: last_name,
				password: password
			}, function(data) {
				if (data == 'You have Successfully Signed Up.') {
					$("form")[0].reset();
				}
				alert(data);
			});
		} // Sa else
	}); // Sa may signup na function
}); // Sa may document na function