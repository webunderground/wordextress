<?php
	require_once('common.php');
	checkUser();
?>
<?php
    require_once('guser.php');
    require_once('db/db_connection.php');
    
    if (isset($_POST['submitBtn'])) {
         $name     = (isset($_POST['name'])) ? htmlentities($_POST['name']) : '' ;
         $comment  = (isset($_POST['comment'])) ? htmlentities($_POST['comment']) : '' ;
         $location = (isset($_POST['location'])) ? htmlentities($_POST['location']) : '' ;
         $website  = (isset($_POST['website'])) ? htmlentities(str_replace('http://','',$_POST['website'])) : '' ;
         $email    = (isset($_POST['email'])) ? htmlentities($_POST['email']) : '' ;
         $actDate  = date("Y-m-d H:i:s");
         
         //Minimum name and comment length.
         if ((strlen($name) > 2) && (strlen($comment) > 5)){
             $sql = "INSERT INTO user (name,text,insertdate,location,web,email) VALUES (";
             $sql .= "'".$name."','".$comment."','".$actDate."','".$location."','".$website."','".$email."')";
             $MyDb->f_ExecuteSql($sql);
         }
         
         header("Location: profile.php");
    }
    else {

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://localhost/wordpress/wp-admin/profile.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>blog personal </title>
<link rel="stylesheet" href="./Profile _files/wp-admin.css" type="text/css">



</head>
<body>

<div id="wphead">
<h1>blog personal <span>(<a href="index.php">View site »</a>
<?php echo $_SESSION['userName']; ?><br>
</span></h1>
</div>

<ul id="adminmenu">

		<li><a href="index.php">Dashboard</a></li>
	<li><a href="Post.php">Write</a></li>
	<li><a href="admin.php">Manage</a></li>
	<li><a href="Links.php" class="current">Links</a></li>
	
	<li><a href="profile.php">Users</a></li>
	<li><a href="Options.php">Options</a></li>	<li class="last"><a href="logout.php" title="Log out of this account">Logout (Administrator)</a></li>
</ul>

<ul id="adminmenu2">

	<li><a href="profile.php" class="current">Your Profile</a></li>
</ul>
<div class="wrap">
<h2>Profile</h2>
	<p>
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="checkuser_id" value="1">
  </p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="gbook" id="gbook">
            <table align="center">
              <tr><th></th><td><input name="name" type="hidden" size="42" maxlength="15" value="<?php echo $_SESSION['userName']; ?>" /></td></tr>
              <tr><th>Email:</th><td><input name="email" type="text" size="42" class="w3-input w3-border w3-round" /></td></tr>
			  <tr><th>Comment:</th><td><textarea name="comment" cols=32 rows=6 class="w3-input w3-border w3-round"></textarea></td></tr>
              <tr><th>Location:</th><td><select name="location" class="w3-input w3-border w3-round" ><?php listLocations(); ?></select></tr>
              <tr><th>Website:</th><td><input name="website" type="text" size="42" class="w3-input w3-border w3-round" /></td></tr>
              
              
              <tr><td colspan="2" align="center"><br/><input  type="submit" name="submitBtn" value="Send" class="w3-button w3-green" /></td></tr>
            </table>  
          </form>
</div>
	    </div>
          </div>
        </div>
        
        	
      
</body>     
<?php } ?>   


 
</div>


<div class="wrap">
       <strong>SideBar</strong><br>
    Add the <a href="http://localhost/wordpress/wp-admin/profile.php#" onclick="addPanel()">WordPress Sidebar</a>! 
    </div>
	
<div id="footer"><p><a href="http://wordpress.org/"><img src="./Profile _files/wp-small.png" alt="WordPress"></a><br>
1.5.1.2 <br> 
<a href="http://codex.wordpress.org/">Documentation</a> — <a href="http://wordpress.org/support/">Support Forums</a> <br>
0.08 seconds</p>

</div>


	<p id="firefoxlink" style="text-align: center;"><a href="http://spreadfirefox.com/community/?q=affiliates&amp;id=2490&amp;t=1" title="WordPress recommends the open-source Firefox browser"><img src="./Profile _files/get-firefox.png" alt="Get Firefox"></a></p>
	

</body></html>