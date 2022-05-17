<?php
	require_once('common.php');
	checkUser();
	 require_once('general.php');
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://localhost/wordpress/wp-admin/edit.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>blog personal › Posts — WordPress</title>
<link rel="stylesheet" href="./edit_files/wp-admin.css" type="text/css">



</head>
<body>

<div id="wphead">
<h1>blog personal <span>(<a href="index.php">View site »</a>)<?php echo $_SESSION['userName']; ?></span></h1>
</div>

<ul id="adminmenu">

	<li><a href="Administrar.php">admin</a></li>
	<li><a href="Post.php">Write</a></li>
	<li><a href="admin.php" class="current">Manage Entry</a></li>
	<li><a href="Links.php">Links</a></li>
	<li><a href="profile.php">Users</a></li>
	<li><a href="Options.php">Options</a></li>	<li class="last"><a href="logout.php" title="Log out of this account">Logout (Administrator)</a></li>
</ul>

<ul id="adminmenu2">

</ul>
 
<div class="wrap">
  

	</p> 


</div>

<div class="wrap">
<h2>Posts</h2>



<br style="clear:both;">




<div class="navigation">
<div class="alignleft"></div>
<div class="alignright"></div>
</div>

 
<h3></h3> 
<ol id="comments"> 
 
  <p>

<br style="clear:both;">



 <table border="0" width="100%">
	<tr>
		<th width="15%">title</th>
		<th width="30%">text</th>
		<th width="12%">category</th>
		<th width="12%">edit</th>
		
	</tr>
	<?php
	include("function.php");
?>
<?php 
     $user=$_SESSION['userName']; 
	$sql = "SELECT * FROM entradas WHERE `name` = '$user' AND `location` NOT REGEXP 'options' ORDER BY insertdate DESC";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
<tr>
		<td class="alternate"><?php echo $row->title;?></td>
		
		<td class="alternate"><?php echo $row->text;?></td>
		<td class="alternate"><?php echo $row->location;?></td>
		<td class="alternate">
<a class="btn btn-primary" href="edit.php?id=<?php echo $row->id; ?>">
edit</a>
        </td>
		
	</tr>
	<?php } ?>
</table>


<!-- /comment --> 
 

<li>
  <strong> 
  Administrator 
  (
  <a href="mailto:faviangaro@yahoo.com">faviangaro@yahoo.com</a> 
  
  	<p></p>
 

</li> 
<!-- /comment --> 
</ol> 
</div> 

<div id="footer"><p><a href="http://wordpress.org/"><img src="./edit_files/wp-small.png" alt="WordPress"></a><br>
1.5.1.2 <br> 
<a href="http://codex.wordpress.org/">Documentation</a> — <a href="http://wordpress.org/support/">Support Forums</a> <br>
0.10 seconds</p>

</div>


	<p id="firefoxlink" style="text-align: center;"><a href="http://spreadfirefox.com/community/?q=affiliates&amp;id=2490&amp;t=1" title="WordPress recommends the open-source Firefox browser"><img src="./edit_files/get-firefox.png" alt="Get Firefox"></a></p>
	

 
</body></html>