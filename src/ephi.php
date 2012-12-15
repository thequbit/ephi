<?php

	// start our session so we have access to our $_SESSION variables
	session_start();
	
	// check to see if we need to login first
	if( isset($_SESSION['username']) == false )
	{
		header("Location: login.php?redirecturl=" . urlencode("ephi.php"));
	}

?>

<html>
<head>
	<title>Easy Personal Hosting Interface</title>
	
	<link href="css/main.css" rel="stylesheet" type="text/css">
	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/search.js"></script>
	
	<script type="text/javascript">
	
		// entry point for the page
		function initPage()
		{
			// TODO: stuff
		}
	
	</script>
	
</head>
<body onload="javascript:initPage()">

	<div id="sitetop" class="sitetop">

		<div id="topwrapper" class="topwrapper">
		
			
		
		</div>
		
	</div>

</body>
</html>