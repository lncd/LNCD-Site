<div class="grid_12 column">

 	<ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
        <li><a href="<?php echo base_url(); ?>projects">Projects</a> <span class="divider">/</span></li>
        <?php if(isset($project) AND count($project) > 0) { ?>
        <li class="active"><?php echo $project[0]->project_name;?></li>
        <?php } ?>
	</ul>

 	<div class="grid_12">
        <?php if(count($project) > 0) { ?>
	 	<div class="display_box">
	 		<div class="page-header">
		 		<h1><?php echo $project[0]->project_name;?></h1>
		 	</div>
		 	<?php echo markdown($project[0]->blurb);?>
		</div>
        <?php } ?>
	</div>
	
</div>