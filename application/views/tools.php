<div class="row">

	<div class="span12">
	  	<ul class="breadcrumb">
	        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
	        <li class="active">Tools</li>
		</ul>
	</div>

</div>

<div class="row">

	<div class="span12">
	
		<div class="display_box">
	
			<div class="page-header">
				<h1>Tools</h1>
			</div>
			
			<p>LNCD use a variety of tools to help them produce better solutions. Here are some of our favourites.</p>
			
			<ul class="nav nav-stacked nav-pills">
			
			<?php foreach($tools->result() as $tool): ?>
				
				<li><a href="<?php echo $tool->url; ?>"><i class="icon-external-link"></i> <?php echo $tool->name; ?></a></li>
				
			<?php endforeach; ?>
			
			</ul>
			
		</div>	
	</div>
</div>