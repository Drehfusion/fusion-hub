$(document).ready(function() {
	$('#county').change(function() {
		var countyId=$(this).val();
		$.ajax({
			url:"includes/constituencies.php",
			method:"POST",
			data: {county: countyId},
			dataType:"text",
			success:function(data) {
				$('#const').html(data);
			}
		});			
	}); 
	
	$('#const').change(function() {
		var constId=$(this).val();
		$.ajax({
			url:"includes/wards.php",
			method:"POST",
			data: {const: constId},
			dataType:"text",
			success:function(data) {
				$('#ward').html(data);
			}
		});			
	});
});