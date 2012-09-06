<?php
// Make sure SimplePie is included. You may need to change this to match the location of autoloader.php
// For 1.0-1.2:
#require_once('../simplepie.inc');
// For 1.3+:
require_once('php/autoloader.php');
 
// We'll process this feed with all of the default options.
$feed = new SimplePie();
 
// Set which feed to process.
$feed->set_feed_url('http://lncd.blogs.lincoln.ac.uk/');
 
// Run SimplePie.
$feed->init();
 
// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
$feed->handle_content_type();
 
// Let's begin our XHTML webpage code.  The DOCTYPE is supposed to be the very first thing, so we'll keep it on the same line as the closing-PHP tag.
?>

<div class="row">

	<div class="span12">
	 	<ul class="breadcrumb">
	        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
	        <li class="active">Blog</li>
		</ul>
	</div>
	
</div>

<div class="row">

	<div class="span12">
	
		<?php foreach ($feed->get_items() as $item): ?>
		
		<div class="display_box">
			<div>
				<h2><a class="button" href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
				<p><?php echo $item->get_description(); ?></p>
				<p><small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small></p>
				<a class="button" href="<?php echo $item->get_permalink(); ?>">Read the Full Blog Post</a>
				</div>
		</div>
			
		<?php endforeach; ?>
		
	</div>
 
</div>