<?php
	require_once('common.php');

	if (isset($_POST['submitBtn'])){
		// Get user input
		$username  = isset($_POST['username']) ? $_POST['username'] : '';
		$password1 = isset($_POST['password1']) ? $_POST['password1'] : '';
		$password2 = isset($_POST['password2']) ? $_POST['password2'] : '';
        
		// Try to register the user
		$error = registerUser($username,$password1,$password2);
	}	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>WordPress &rsaquo; Login</title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><link rel="stylesheet" href="http://localhost/wordpress/wp-admin/wp-admin.css" type="text/css" /><script type="text/javascript">function focusit() {document.getElementById('log').focus();}window.onload = focusit;</script><style type="text/css">#log, #pwd, #submit {font-size: 1.7em;}</style></head><body><div id="login"><h1><a href="index.php">WordPress</a></h1>
<?php if ((!isset($_POST['submitBtn'])) || ($error != '')) {?>            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="registerform"><p><label>Username:<br /><input type="text"  name="username" size="20" tabindex="1" /></label></p><p><label>Password:<br /> <input name="password1" type="password" size="20" tabindex="2" /></label></p><p><label>Password:<br /> <input name="password2" type="password" size="20" tabindex="2" /></label></p><p class="submit"><input type="submit" type="submit" name="submitBtn"value="Login &raquo;" tabindex="3" /><?php 
}   
    if (isset($_POST['submitBtn'])){

?>
</p></form><ul><li><a href="register.php">Register</a></li></ul>

<?php
	if ($error == '') {
		echo " User: $username was registered successfully!<br/><br/>";
		echo " User: $username por favor <button class='w3-button w3-padding-large' title='Notifications'><i class='fa fa-bell'></i><span class='w3-badge w3-right w3-small w3-green'>admin</span></button> perfil!<br/><br/>";
		echo " User: $username <button class='w3-button w3-padding-large' title='Notifications'><i class='fa fa-bell'></i><span class='w3-badge w3-right w3-small w3-green'>admin</span></button> muro  !<br/><br/>";
		echo ' <a href="login.php">You can login here</a>';
		
	}
	else echo $error;

?>

<?php            
    }
?></div></body></html>
