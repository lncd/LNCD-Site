<!DOCTYPE html>
<html lang="en">

	<head>
		<title>LNCD Dashboard</title>
		
		<script src="http://js.pusher.com/1.11/pusher.min.js" type="text/javascript"></script>
		
		<?php
		
		if (isset($_GET['board']))
		{
			$board = urldecode($_GET['board']);
		}
		else
		{
			$board = 'default';
		}
	
		?>
		
		<script type="text/javascript">
			// Enable pusher logging - don't include this in production
			Pusher.log = function(message) {
				if (window.console && window.console.log) window.console.log(message);
			};
			
			// Flash fallback logging - don't include this in production
			WEB_SOCKET_DEBUG = true;
			
			var pusher = new Pusher('5309ba0fdbb1fb65205e');
			var channel = pusher.subscribe('<?php echo $board; ?>');
			channel.bind('url', function(data) {
				window.location = '?board=<?php echo $board; ?>&url=' + data;
			});
		</script>
		
		<style type="text/css">
			body {
				margin: 0;
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
				overflow: hidden;
			}
			
			iframe {
				margin: 0;
				padding: 0;
				border: none;
				width: 100%;
				height: 100%;
				overflow: hidden;
			}
			
		</style>
		
	</head>
	
	<body>
	
		<?php
		
		if (isset($_GET['url']))
		{
			$uri = urldecode($_GET['url']);
		}
		else
		{
			$uri = 'https://www.leftronic.com/share/kcmIgo';
		}
	
		?>
		
		<iframe src="<?php echo $uri; ?>"></iframe>
	
	</body>
	
</html>