<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('login/verifylogin'); ?>

<label for="username">Username</label>
<input type="input" name="username" /><br />

<label for="password">Password</label>
<input type="password" name="password" /><br />


<input type="submit" name="submit" value="Login" />

</form>