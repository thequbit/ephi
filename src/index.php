<html>
<head>

	<title>My Code Space - Powered by ephi</title>

	<link href="css/main.css" rel="stylesheet" type="text/css">
	
</head>
<body onload="javascript:initPage()">

	<div id="sitetop" class="sitetop">

		<div id="topwrapper" class="topwrapper">
		
			<div id="loginboxwrapper" class="loginboxwrapper">
			
				<div id="fbloginbox">
				
						<a href="https://www.facebook.com/dialog/oauth?client_id=<?=FACEBOOK_APP_ID?>&redirect_uri=<?=urlencode('http://mycodespace.com/fb_oauth_return.php')?>&scope=offline_access,user_checkins,friends_checkins">
							<img source="media/fblogin.png">
						</a>
				
				</div>
			
			</div>
		
		</div>
		
	</div>
</body>

</html>