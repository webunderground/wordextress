<?php
require_once('common.php');

$error = '0';

if (isset($_POST['submitBtn'])){
	// Get user input
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
        
	// Try to login the user
	$error = loginUser($username,$password);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>WordPress &rsaquo; Login</title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><link rel="stylesheet" href="http://localhost/wordpress/wp-admin/wp-admin.css" type="text/css" /><script type="text/javascript">function focusit() {document.getElementById('log').focus();}window.onload = focusit;</script><style type="text/css">#log, #pwd, #submit {font-size: 1.7em;}</style></head><body><div id="login"><h1><a href="http://wordpress.org/">WordPress</a></h1>
<?php if ($error != '') {?>      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform"><p><label>Username:<br /><input type="text"  name="username" size="20" tabindex="1" /></label></p><p><label>Password:<br /> <input type="password" name="password" size="20" tabindex="2" /></label></p><p class="submit"><input type="submit" type="submit" name="submitBtn"value="Login &raquo;" tabindex="3" /><input type="hidden" name="redirect_to" value="wp-admin/" /></p></form><ul><li><a href="register.php">Register</a></li></ul>
<?php 
}   
    if (isset($_POST['submitBtn'])){

?>
      <div class="caption">Login result:</div>
      <div id="icon2">&nbsp;</div>
      <div id="result">
        <table width="100%"><tr><td><br/>
<?php
	if ($error == '') {
		echo "Welcome $username! <br/>You are logged in!<br/><br/>";
		echo '<a href="Administrar.php">Now you can visit the index page!</a>';
	}
	else echo $error;

?>
		<br/><br/><br/></td></tr></table>
	</div>
<?php            
    }
?>
</div></body></html>
