/* By Abhishek Biswal */
$(document).ready(function(){

	$("form#check-result").submit(function(e){
		e.preventDefault();
		$("#result").html("<h3>Loading...</h3>");
		var name = $("input[name=name]").val();
		var resData = "name="+name;
		$.ajax({
			url:"ajax/check10.php",
			type:"get",
			cache:false,
			data: resData,
			success: function(recd){
				$("#result").html(recd);
			}
		})
	})

}); //ready