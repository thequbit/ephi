<?php

	/*

	// start our session so we have access to our $_SESSION variables
	session_start();
	
	// check to see if we need to login first
	if( isset($_SESSION['username']) == false )
	{
		header("Location: login.php?redirecturl=" . urlencode("ephi.php"));
	}
	
	*/
	
?>

<html>
<head>
	<title>Easy Personal Hosting Interface</title>
	
	<link href="css/main.css" rel="stylesheet" type="text/css">
	
	<script src="js/jquery.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	
		// entry point for the page
		function initPage()
		{
		
			// hide all of the sub mains
			hideAllSubMain();
		
			// show our index div by default
			$('#mainhome').show("slow");
			
		}
	
		function hideAllSubMain()
		{
			// hide out upload, php, and mysql divs
			$('#mainhome').hide();
			$('#mainuploadfiles').hide();
			$('#mainconfigphp').hide();
			$('#mainconfigmysql').hide();
			$('#mainlogout').hide();
		}
	
		function show(id)
		{
		
			// hide all of the submains
			hideAllSubMain();
		
			// display the correct div based on input id
			switch(id)
			{
				case "home":
					$('#mainhome').show("slow");
					break;
				case "uploadfiles":
					$('#mainuploadfiles').show("slow");
					break;
				case "configPHP":
					$('#mainconfigphp').show("slow");
					break;
				case "configMySQL":
					$('#mainconfigmysql').show("slow");
					break;
				case "logout":
					$('#mainlogout').show("slow");
					break;
				default:
					break;
			}
		}
	
	</script>
	
</head>
<body onload="javascript:initPage()">

	<div id="sitetop" class="sitetop">

		<div id="topwrapper" class="topwrapper">
		
			<div id="toplinks" class="toplinks">
			
				<!--
				<div class="info">
					Welcome to ephi.  Pick one:
				</div>
				-->
			
				<div id="home" class="toplink">
					<a id="homelink" class="link" onclick="show('home');">Home</a>
				</div>
			
				<div class="toplink">|</div>
			
				<div id="fileupload" class="toplink">
					<a id="uploadlink" class="link" onclick="show('uploadfiles');">Upload Files</a>
				</div>
			
				<div class="toplink">|</div>
			
				<div id="phpconfig" class="toplink">
					<a id="uploadlink" class="link" onclick="show('configPHP');">Config PHP</a>
				</div>
				
				<div class="toplink">|</div>
				
				<div id="mysqlconfig" class="toplink">
					<a id="uploadlink" class="link" onclick="show('configMySQL');">Config MySQL</a>
				</div>
				
				<div class="toplink">|</div>
				
				<div id="logout" class="toplink">
					<a id="uploadlink" class="link" onclick="show('logout');">Logout</a>
				</div>
			
			</div>
		
			<div id="mainarea" class="mainarea">
			
				<div id="mainhome" class="submainarea">
				
					<div class="maininfo">
						<div id="maininfowrapper">
							Hello.<br><br>
						</div>
						
						If you look at the top of the screen you will see a few links that will allow you to do a few different things.  You can:<br><br>
						<a id="uploadlink" class="link" onclick="show('home');">Home</a> - Get back to this screen<br>
						<a id="uploadlink" class="link" onclick="show('uploadfiles');">Upload Files</a> - Add files to your website<br>
						<a id="uploadlink" class="link" onclick="show('configPHP');">Config PHP</a> - Configure PHP for your website<br>
						<a id="uploadlink" class="link" onclick="show('configMySQL');">Config MySQL</a> - Configure your SQL database for your website<br>
					</div>
				
				</div>
			
				<div id="mainuploadfiles" class="submainarea">
					
					<div id="droparea" class="droparea">Drop Files</div>
					
					<div class="uploadinfo">
						<div>Files left: <span id="count">0</span></div>
						<div>Destination url: <input id="url" value="upload.php"/></div>
						<h2>Result:</h2>
						<div id="result"></div>
						<canvas width="500" height="20"></canvas>
					</div>
					
				</div>
				
				<div id="mainconfigphp" class="submainarea">
					some php configuration anyone?
				</div>
				
				<div id="mainconfigmysql" class="submainarea">
					dat query ...
				</div>
				
				<div id="mainlogout" class="submainarea">
				
					<div id="logoutconfirm" class="maininfo">
				
						Are you sure you want to logout?  If so, click
						<a href="logout.php">here</a>
				
					</div>
				
				</div>
			
			</div>
		
		</div>
		
	</div>

	<script src="js/uploadscript.js" type="text/javascript"></script>

</body>
</html>