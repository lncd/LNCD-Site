<div class="row">
	<div class="span12">
	 	<ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
        
        <?php
        if (isset($project_type))
        {
        	if($project_type === 1)
        	{
	        	echo '<li><a href="' . base_url() . 'projects">Projects</a> <span class="divider">/</span></li><li class="active">Past</li>';
	        }
	        else if($project_type === 2)
	        {
		        echo '<li><a href="' . base_url() . 'projects">Projects</a> <span class="divider">/</span></li><li class="active">Case Studies</li>';
		    }
		 }
		 else
		 {
		 	echo '<li class="active">Projects</li>';
		 }
		 ?>
		 
        </ul>
	</div>
	
</div>
	
<div class="row">
	<?php
		$count = 0; 
		foreach($projects as $a_project): 
	?>

		<div class="span6">
			<div class="display_box">
				
				<div class="project_summary">
				
					<h2><a href="<?php echo base_url() . "project/" . $a_project->id;?>"><?php echo $a_project->project_name; ?></a></h2>
					<?php echo markdown($a_project->blurb); ?>
					
				<div class="fade-out"></div>

			</div>
			
			<div>
				<a href="<?php echo base_url() . "project/" . $a_project->id;?>" class="btn btn-small"><i class="icon-chevron-right"></i> Read More</a>
			</div>
			
			</div>
		</div>
		
	<?php if($count % 2 === 1): ?>
	</div>
	<div class="row">
	<?php endif; ?>
	
	<?php $count++; ?>
	<?php endforeach; ?>
	</div>
</div>
