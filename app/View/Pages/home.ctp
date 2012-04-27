<div class="row-fluid">
	<div class="hero-unit">
		<div class="row-fluid">
			<div class="span8">
				<h2>jQueryFileUpload for CakePHP 2.1.x</h2>	
				<hr>
				<?php echo $this->Html->link('Upload files', 
					'/uploads',
					array(
						'escape' => false,
						'class' => 'btn btn-primary'
					)
				) ?>

				<?php echo $this->Html->link('Register new user', 
					'/users/register',
					array(
						'escape' => false,
						'class' => 'btn btn-success'
					)
				) ?>				
			</div>
			<div class="span4">
				<h2>Login</h2>
				<hr>
				<?php echo $this->element('form_login') ?>
			</div>		

		</div>

		
		
	</div>
</div>