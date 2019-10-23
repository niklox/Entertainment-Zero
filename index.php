<!DOCTYPE html>
<html>
<head>
<title>301 Site permanently moved</title>
<style>
.field{width:100%;margin:auto;text-align:center}
</style>

</head>
<body>
<?php

//header("HTTP/1.1 301 Moved Permanently");
//header("Location: https://trmos.se".$_SERVER["REQUEST_URI"]);
//die();

//print 'https://'. $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"].'<br/>';

print '<div class="field">Termos has moved permanently. You will find this resource at:<br/><h3><a href="https://trmos.se'. $_SERVER["REQUEST_URI"].'">https://trmos.se'. $_SERVER["REQUEST_URI"].'</a></h3></div>';

?>

<!--
<script type="text/javascript" src="instafeed.min.js"></script>
				<script type="text/javascript">
    			var feed = new Instafeed({
    			get: 'user',
    			template: '<a href="{{link}}"><img src="{{image}}"/></a>',
    			sortBy: 'most-recent',
    			limit: 15,
    			
    			//userId: 1550154136, // entzero	
    			//accessToken:'1550154136.433f235.ffa4c74d284b48a0a35c59bee326cc86'
    			
    			//userId: 3982883952, //nitileaks
    			//clientID:'d54779a902274d6fb788107c678fc1de',
    			//accessToken:'3982883952.d54779a.08385b8d3f81452f86a242fb78c04492' 
    			
    			//userId: 1429961765, // worldschildrensprize
    			//accessToken:'1429961765.75a3cb1.1326f60f623e47d98f18022b75d36e36'
    			
    			userId: 1303305789, // katelieri
    			accessToken:'1303305789.f7e4156.08e10c3f73814486a95a18fc375df58c'
    			
    			
    			
    			
    			
    			
    			
    			
    			});
    			feed.run();
				</script>
				
<div id="instafeed"></div>

-->
</body>
</html>
