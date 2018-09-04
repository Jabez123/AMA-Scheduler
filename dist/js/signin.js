$(document).ready(function() {
	$("#signin").click(function() {
		var professor_id = $("#professor_id1").val();
		var password = $("#password").val();
		if (professor_id == '' || password == '') {
			alert("Please fill all fields...!!!!!!");
		} 
		else {
			$.post("signin.php", {
				professor_id: professor_id,
				password1: password
			}, function(data) {
				if (data == 'Welcome!') {
					$("form")[0].reset();
					location = "user/index.php";
				}
				alert(data);
			});
		} // Sa else
	}); // Sa may signup na function
}); // Sa may document na function