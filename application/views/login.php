<div class="container ">
<br>
	<div class="row">
	<div class="col m4 s12 offset-m4 indigo lighten-5">
	<div class="row" style=" padding-top: 60px; padding-bottom: 20px; padding-left: 2%; padding-right: 2%;">
		<div class="col m12 s12 ">
		<?php $attributes = array("name" => "loginform");
			echo form_open("login/index", $attributes);?>
			<legend>Login</legend>
			<div class="input-field">
				<input class="validate" name="email"  type="text" value="<?php echo set_value('email'); ?>" />
				<label for="name">Email-ID</label>
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>
			<div class="input-field">
				<input class="validate" name="password"  type="password" value="<?php echo set_value('password'); ?>" />
				<label for="name">Password</label>
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>
			<div class="input-field">
				<button name="submit" type="submit" class="btn btn-info">Login</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>
		<?php echo form_close(); ?>
		<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col m12 s12  center">	
		New User? <a href="<?php echo base_url(); ?>index.php/signup">Sign Up Here</a>
		</div>
	</div>

	<a href="<?php echo base_url(); ?>index.php/user_authentication"><img src="<?php echo base_url('media/img/login/flogin.png'); ?>" alt=""/></a>
	</div>
	</div>
</div>

