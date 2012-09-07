<div class="row">

	<div class="span12">
	  	<ul class="breadcrumb">
	        <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
	        <li class="active">Contributors</li>
		</ul>
	</div>

</div>

<div class="row">

	<div class="span12">
	
		<div class="display_box">
	
			<div class="page-header">
				<h1>Contributors</h1>
			</div>
			
			<ul class="nav nav-pills">
				<li class="dropdown">
					<a class="dropdown-toggle button"
						data-toggle="dropdown"
						href="#">
						Select Department
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<?php for($i = 0; $i < count($contributors); $i++): ?>
							<?php if($i === 0): ?>
								<li class="active">
							<?php else: ?>
							<li>
							<?php endif;?>
							<a href="#<?php echo str_replace(' ', '-', $contributors[$i]['department']->department_name); ?>" data-toggle="tab"><?php echo $contributors[$i]['department']->department_name; ?></a></li>
						<?php endfor; ?>
					</ul>
				</li>
  			</ul>
			
	
	
			<div class="tab-content">
			
			<?php for($i = 0; $i < count($contributors); $i++): ?>
	
				<?php if($i === 0) : ?>
					<div class="tab-pane active" id="<?php echo str_replace(' ', '-', $contributors[$i]['department']->department_name); ?>">
				<?php else: ?>
					<div class="tab-pane" id="<?php echo str_replace(' ', '-', $contributors[$i]['department']->department_name); ?>">
				<?php endif; ?>
	
				<?php foreach($contributors[$i]['people'] as $person): ?>
					<div class="person">
						<h2><?php echo $person->name; ?></h2>
						<img src="<?php echo $person->image_url; ?>" alt="Image of <?php echo $person->name; ?>">
						
						<p><?php echo $person->blurb; ?></p>
						<ul class="nav nav-pills">
							<?php if($person->staff_page): ?>
							<li><a href="<?php echo $person->staff_page; ?>">Staff Page</a></li>
							<?php endif;?>
							<?php if($person->email): ?>
							<li><a href="mailto:<?php echo $person->email; ?>"><?php echo $person->email; ?></a></li>
							<?php endif;?>
							<?php if($person->tel): ?>
							<li><a href="tel:<?php echo trim(str_replace(' ', '', $person->tel)); ?>"><?php echo $person->tel; ?></a></li>
							<?php endif;?>
							<?php if($person->twitter): ?>
							<li><a href="http://twitter.com/<?php echo $person->twitter; ?>">@<?php echo $person->twitter; ?></a></li>
							<?php endif;?>
							<?php if($person->blog_url): ?>
							<li><a href="<?php echo $person->blog_url; ?>">Blog</a></li>
							<?php endif;?>
						</ul>
					</div>
				<?php endforeach;?>
				
				</div>
				
			<?php endfor; ?>
			
			</div>
			
		</div>	
	</div>
</div>