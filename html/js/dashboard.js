
$(document).ready(function() {
	$("form").submit(function(event) {
		var formData = {
			"regno"            : $("input[name=regno]").val(),
			"acyr"             : $("input[name=acyr]").val(),
		};
		
		$.ajax({
			type        : "POST", 
			url         : "dataController/studentInfo.php", 
			data        : formData, 
			success: function(result){
				$("#stu_info").hide("").html(result).fadeIn("slow");
				} 
			})
		event.preventDefault();
	});
});
