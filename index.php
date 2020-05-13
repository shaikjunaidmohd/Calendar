<!Doctype html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<p align="center" id="time"></p>
	</div>
	<script>
	$(document).ready(function(){
		var show_time='time';
		show_t(show_time);
		setInterval(function(){show_t(show_time); },1000);
	});
	function show_t(show_time){
		$.ajax({
			url:"time.php",
			method:"post",
			data:{show_time:show_time},
			success:function(data){
				$('#time').html(data);
			}
		})
	}
	</script>
</body>
</html>