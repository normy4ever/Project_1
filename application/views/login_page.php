<div id="login_window">    
    
<?php echo form_open('login'); ?>
	<?php echo form_fieldset('Login Form');?>
	
		<div class="textfield">
			<?=form_label('username', 'user_name')?>
			<?=form_error('user_name')?>
			<?=form_input('user_name', set_value('user_name'))?>
		</div>
		
		<div class="textfield">
			<?=form_label('password', 'user_pass')?>
			<?=form_error('user_pass')?>
			<?=form_password('user_pass')?>
		</div>
		
		<div class="buttons">
			<?=form_submit('login', 'Login')?>
		</div>
		
	<?=form_fieldset_close()?>
<?=form_close();?>

<!-------------------------------------   Add user   -------------------------------------->

<?=form_open('login/create_account')?>
	<?=form_fieldset('Creare cont')?>
	
		<div class="textfield">
			<?=form_label('username', 'user_name')?>
			<?=form_error('user_name')?>
			<?=form_input('user_name', set_value('user_name'))?>
		</div>
		
		<div class="textfield">
			<?=form_label('password', 'user_pass')?>
			<?=form_error('user_pass')?>
			<?=form_password('user_pass')?>
		</div>
		
		<div class="buttons">
			<?=form_submit('create', 'Create')?>
		</div>
		
	<?=form_fieldset_close()?>
<?=form_close();?>
       
</div>
