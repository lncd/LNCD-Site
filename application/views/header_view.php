<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>LNCD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo $_SERVER['CWD_BASE_URI']; ?>favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo $_SERVER['CWD_BASE_URI']; ?>icon.png">

	<link rel="stylesheet" href="<?php echo $_SERVER['CWD_BASE_URI']; ?>cwd.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

	<!--[if (lt IE 9) & (!IEMobile)]>
		<link rel="stylesheet" href="/ie.min.css">
		<script src="/html5shiv.min.js"></script>
	<![endif]-->
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-27617986-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
 
</head>

<body>

	<div id="cwd-wrap">

		<div id="cwd-main">

			<header id="cwd-header">

				<div class="container">

					<hgroup id="cwd-hgroup">

						<h1><img src="<?php echo base_url(); ?>assets/white.png"></h1>

					</hgroup>

					<div class="navbar">
						<div class="navbar-inner">

							<a class="btn btn-mini btn-navbar" id="cwd-menu-collapse" data-toggle="collapse" data-target=".nav-collapse">
								Menu
							</a>

							<div class="nav-collapse">

								<ul class="nav">
									<li><a href="<?php echo base_url(); ?>">Home</a></li>
									<li><a href="<?php echo site_url('projects'); ?>">Current Projects</a></li>
									<li><a href="<?php echo site_url('projects/past'); ?>">Past Projects</a></li>
									<li><a href="<?php echo site_url('projects/case_studies'); ?>">Case Studies</a></li>
									<li><a href="<?php echo site_url('contributors'); ?>">Contributors</a></li>
									<li><a href="http://blog.lncd.org">LNCD Blog</a></li>
								</ul>

							</div>
						</div>
					</div>

				</div>

			</header>

			<div class="container">
			<!-- BEGIN CONTENT -->