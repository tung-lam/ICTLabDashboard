<h4><?php echo $this->session->flashdata('msg'); ?></h4>


<h4><?php echo $this->session->flashdata('msg'); ?></h4>
<br>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-2">
		<img class="img-responsive" src= "<?php echo $avatar; ?>">
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-6">
		<h4><?php echo 'Full name: ' . $fullname . '<br>'; ?></h4>
		<h4><?php echo 'Title: ' . $title . '<br>'; ?></h4>
		<h4><?php echo 'Position: ' . $position . '<br>'; ?></h4>
		<h4><?php echo 'Affiliation: ' . $affiliation . '<br>'; ?></h4>
		<h4><?php echo 'Email: ' . $email . '<br>'; ?></h4>
		<button class="btn btn-default">
			<?php echo anchor('admin/update_profile', 'Update Profile'); ?>
		</button>
		
		<button class="btn btn-default">
			<?php echo anchor('admin/reset_password', 'Reset password'); ?>
		</button>
	</div>
</div>

<br><br>
<center>
	<button class="btn btn-default">
		<?php echo anchor('admin/manage_staff', 'Manage staffs'); ?>
	</button>

	<button class="btn btn-default">
		<?php echo anchor('admin/manage_news_events', 'Manage news and events'); ?>
	</button>

	<button class="btn btn-default">
		<?php echo anchor('admin/manage_website', 'Manage ICTLab website'); ?>
	</button>

	<button class="btn btn-default">
		<?php echo anchor('admin/manage_calendar', 'Manage calendar'); ?>
	</button>
</center>

<br>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<h3><?php echo anchor('calendar', 'Calendar'); ?></h3>
	</div>
</div>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<h3><?php echo anchor('admin/publication', 'Publications'); ?></h3>
		<?php foreach ($publication as $s): ?>
			<h4><?php echo $s->publication_name;?></h4>
		<?php endforeach; ?>
	</div>
</div>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<h3><?php echo anchor('admin/students', 'Supervised students'); ?></h3>
		<?php foreach ($student as $s): ?>
			<h4><?php echo $s->student;?></h4>
		<?php endforeach; ?>
	</div>
</div>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<h3><?php echo anchor('admin/research', 'Research projects'); ?></h3>
		<?php foreach ($research as $s): ?>
			<h4><?php echo $s->research_project;?></h4>
		<?php endforeach; ?>
	</div>
</div>
<br>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<h3>ICTLab information</h3>
		<h4><?php echo anchor('page/about', 'About ICTLab'); ?></h4>
		<h4><?php echo anchor('page/research_topics', 'Research topics'); ?></h4>
		<h4>
			<?php echo anchor('page/research_projects', 'Research projects'); ?> - 
			<?php echo anchor('page/research_projects/swarms', 'SWARMS'); ?>,
			<?php echo anchor('page/research_projects/archives', 'ARCHIVES'); ?>
		</h4>
		<h4><?php echo anchor('news', 'News and Events'); ?></h4>
		<h4><?php echo anchor('page/members', 'Members'); ?></h4>
		<h4><?php echo anchor('page/contact', 'Contact'); ?></h4>
	</div>
</div>


<div align="center">
	<button class="btn btn-default"><?php echo anchor('logout', 'Log out') ?></button>
</div>