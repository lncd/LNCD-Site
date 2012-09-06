<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>LNCD Dashboard Controller</title>
	<meta name="description" content="Change the LNCD Dashboard">
	<meta name="author" content="Nick Jackson; nijackson@lincoln.ac.uk">
	
	<!-- Do not change anything below this line -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="shortcut icon" href="http://c411047.r47.cf3.rackcdn.com/favicon.ico">
	<link rel="apple-touch-icon" href="http://c411047.r47.cf3.rackcdn.com/icon.png">
	<link rel="stylesheet" href="http://c411047.r47.cf3.rackcdn.com/base.min.css">
	<link rel="stylesheet" href="http://c411047.r47.cf3.rackcdn.com/cwd.min.css" media="(min-width:320px)">
	<!--[if (lt IE 9) & (!IEMobile)]>
	<link rel="stylesheet" href="http://c411047.r47.cf3.rackcdn.com/ie.min.css">
	<![endif]-->
	<script src="http://c411047.r47.cf3.rackcdn.com/modernizr.js"></script>
	
	<style>
	.panel {
		border: 1px solid #999;
		padding: 10px;
		margin: 10px 0;
		background: #FAFAFA;
	}
	</style>
</head>

<body>

	<header id="cwd_header" role="banner">
	
		<section class="cwd_container">
			<hgroup class="grid_row" id="cwd_hgroup">
					<h1 class="column grid_12">
						<a href="#">
							LNCD Dashboard Manager
						</a>
					</h1>
			</hgroup>
		
		</section>
		
	</header>
	
	<section class="cwd_container" id="cwd_content">
	
		<?php
		
		if (isset($_GET['url']) AND isset($_GET['board']))
		{
			require('Pusher.php');

			$pusher = new Pusher('5309ba0fdbb1fb65205e', '379b23369788bbff8bb9', '21587');
			$pusher->trigger($_GET['board'], 'url', $_GET['url']);
		}
		
		$boards = array(
			'BH3104',
		);
		
		$urls = array(
			'Dashboard' => 'https://www.leftronic.com/share/kcmIgo',
			'Nyan Cat' => 'http://nyan.cat',
		);
		
		ksort($urls);
		
		foreach ($boards as $board)
		{
			
			echo '<div class="panel"><h2>Change ' . $board . ' to:</h2><ul>';
				
				
				foreach ($urls as $name => $url)
				{
					echo '<li><a href="?board=' . $board . '&amp;url=' . urlencode($url) . '">' . $name . '</a></li>';
				}
			
			echo '</ul>
			<form method="get">
			<input type="hidden" name="board" value="' . $board . '">
			<input type="text" name="url" placeholder="http://example.com">
			</form></div>';
			
		}
			
		?>
		
		
		<div class="panel">
		
			<h2>Pict-O-Matic</h2>
				
			<form method="get">
			<input type="text" name="pictomatic" placeholder="http://example.com/image.png">
			</form>
		
		</div>
		
		<div class="panel">
		
			<h2>Panic Level</h2>
			
			<p><a href="?panic=0"><img src="img/green.png"></a> <a href="?panic=1"><img src="img/amber.png"></a> <a href="?panic=2"><img src="img/red.png"></a></p>
				
			<?php
			
			if (isset($_GET['pictomatic']))
			{
				require("leftronic.php");
				$leftronic = new Leftronic('H60OPzUu4rkA4hvUV57GP9FxlDM4TFCF');
				$leftronic->pushImg('pictomatic', $_GET['pictomatic']);
			}
			
			if (isset($_GET['panic']))
			{
				require("leftronic.php");
				$leftronic = new Leftronic('H60OPzUu4rkA4hvUV57GP9FxlDM4TFCF');
				$leftronic->pushNumber('panic', (int) $_GET['panic']);
			}
			
		?>
		
		</div>
	
	</section>

	<footer class="cwd_container" id="cwd_footer" role="contentinfo">		
		<section class="grid_row">
			<div class="column grid_12">
				<div class="column grid_8 first">
					&copy; University of Lincoln
				</div>
				<div class="column grid_2">
					<a href="http://support.lincoln.ac.uk" target="_blank">ICT Support Desk</a>
					<a href="http://lincoln.ac.uk/home/legal/index.htm" target="_blank">Policy statements</a>
				</div>
				<div class="column grid_2 last">
					<a href="http://gateway.lincoln.ac.uk" target="_blank">Gateway</a>
					<a href="http://lincoln.ac.uk" target="_blank">www.lincoln.ac.uk</a>
				</div>
			</div>
		</section>
	</footer>

	<!-- Do not remove these two javascript files -->
	<script src="http://c411047.r47.cf3.rackcdn.com/jquery.js" type="text/javascript"></script>
	<script src="http://c411047.r47.cf3.rackcdn.com/cwd.min.js" type="text/javascript"></script>

</body>
</html>