<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>counter</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="counter.js"></script>
</head>
<body>
	<input type="number" value="" name="time_Counter" id="time_counter_field" />
	<button type="button" id="submit_btn" name="time_counter_btn" onclick="press_btn()">Time Counter</button>
	<span id="countdown">01:30:10</span>
</body>
<script>
	$(function(){ $("span").removeAttr('id','countdown'); });
	function press_btn()
	{
		var val1 = $("#time_counter_field").val();
		$("span").attr('id','countdown');
		var var2 = "<?php echo gmdate('H:i:s',"+val1+"); ?>";
		alert(var2);
	}
</script>
</html>