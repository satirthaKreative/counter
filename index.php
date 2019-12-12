<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>counter</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
	<span id="countdown">01:30:10</span>
</body>
<script>
	(function(){
	  $(document).ready(function() {
	  	var time = "01:30:10",
	      parts = time.split(':'),
	      hours = +parts[0],
	      minutes = +parts[1],
	      seconds = +parts[2],
	      span = $('#countdown');
	    
	    function correctNum(num) {
	      return (num<10)? ("0"+num):num;
	    }
	  
	    var timer = setInterval(function(){
	    	seconds--;
	      	if(seconds == -1) {
	        	seconds = 59;
	          	minutes--;
	          
	          	if(minutes == -1) {
	            	minutes = 59;
	              	hours--;
	              
	              	if(hours==-1) {
	                  alert("timer finished");
	                  clearInterval(timer);
	                  return;
	                }
	            }
	        }
	      	span.text(correctNum(hours) + ":" + correctNum(minutes) + ":" + correctNum(seconds));
	    }, 1000);
	  }); 
	})()
</script>
</html>