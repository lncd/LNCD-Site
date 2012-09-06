<div class="grid_12 column">

 	<ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url(); ?>projects">Projects</a> <span class="divider">/</span></li>
        <li class="active"><?php echo $project[0]->project_name;?></li>
	</ul>

 	<div class="grid_12">
	 	<div class="display_box">
	 		<div class="page-header">
		 		<h1><?php echo $project[0]->project_name;?></h1>
		 	</div>
		 	<?php echo markdown($project[0]->blurb);?>
		</div>
	</div>
	
</div>