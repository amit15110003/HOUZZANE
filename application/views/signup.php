<div class="container">
	<br>
	<div class="row">
	<div class="col m4 s12 offset-m4 indigo lighten-5">
	<div class="row" style=" padding-top: 30px;  padding-left: 2%; padding-right: 2%;">
		<div class="col m12 s12 ">
			<?php $attributes = array("name" => "signupform");
			echo form_open("signup/index", $attributes);?>
			<h5>Signup</h5>
			
			<div class="input-field">
				<input class="form-control" name="fname"  type="text" value="<?php echo set_value('fname'); ?>" />
				<label for="name">First Name</label>
				<span class="text-danger"><?php echo form_error('fname'); ?></span>
			</div>			
		
			<div class="input-field">
				<input class="form-control" name="lname"  type="text" value="<?php echo set_value('lname'); ?>" />
				<label for="name">Last Name</label>
				<span class="text-danger"><?php echo form_error('lname'); ?></span>
			</div>
		
			<div class="input-field">
				<input class="form-control" name="email"  type="text" value="<?php echo set_value('email'); ?>" />
				<label for="email">Email ID</label>
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>
			<div class="input-field">
				<input class="form-control" name="mob"  type="number" />
				<label for="email">Contact Number</label>
				<span class="text-danger"><?php echo form_error('mob'); ?></span>
			</div>

			<div class="input-field">
				<input class="form-control" name="password"type="password" />
				<label for="subject">Password</label>
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>

			<div class="input-field">
				<button name="submit" type="submit" class="btn btn-info">Signup</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col m12 center">	
		Already Registered? <a href="<?php echo base_url(); ?>index.php/login">Login Here</a>
		</div>
	</div>
</div>

