<?php
	require_once('common.php');
	checkUser();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0055)http://localhost/wordpress/wp-admin/options-general.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>blog personal › General Options — WordPress</title>
<link rel="stylesheet" href="./Options _files/wp-admin.css" type="text/css">
</head>
<body>

<div id="wphead">
<h1>blog personal <span>(<a href="index.php">View site »</a>

	<?php echo $_SESSION['userName']; ?>
         <hr>
	 </span></h1>

</div>

<ul id="adminmenu">

<li><a href="">Dashboard</a></li>
	<li><a href="Post.php">Write</a></li>
	<li><a href="admin.php" class="current">Manage</a></li>
	<li><a href="Links.php">Links</a></li>
	<li><a href="profile.php">Users</a></li>
	<li><a href="Options.php">Options</a></li>	<li class="last"><a href="logout.php" title="Log out of this account">Logout (Administrator)</a></li>
</ul>


<ul id="adminmenu2">

	</ul>

<br clear="all">

 
<div class="wrap"> 
  <h2>General Options</h2> 


    <table width="100%" cellspacing="2" cellpadding="5" class="editform"> 
      <tbody><tr valign="top"> 
        <th width="33%" scope="row">Weblog title:</th> 
		
        <?php
	include("function.php");
?>
<table border="0" width="100%">
	<tr>
		<th width="41%">Title</th>
		<th width="47%">Description</th>
		<th width="12%">Edit</th>
	
<?php 
  $user=$_SESSION['userName']; 
	$sql = "select * from settings";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->title;?></td>
		<td><?php echo $row->description;?></td>
		<td>
<a href="eopt.php?id=<?php echo $row->id; ?>">Edit</a>
        </td>
	</tr>
	<?php } ?>
</table>
</tr>
      <br style="clear:both;">


<table width="100%" cellpadding="3" cellspacing="3"> 
	<tbody><tr>

	

	</tr>
 
	<tr class="alternate">

      </a></td>
				</tr> 
 
</tbody></table> 

    </tbody></table> 
    <fieldset class="options"> 
       		</tr>

</tbody></table>

    </fieldset> 
    <p class="submit">
      <input class="text" type="submit" name="submitBtn" value="Add comment" />
    </p>
  </form> 
</div> 

<div id="footer"><p><a href="http://wordpress.org/"><img src="./Options _files/wp-small.png" alt="WordPress"></a><br>
1.5.1.2 <br> 
<a href="http://codex.wordpress.org/">Documentation</a> — <a href="http://wordpress.org/support/">Support Forums</a> <br>
0.09 seconds</p>

</div>


	<p id="firefoxlink" style="text-align: center;"><a href="http://spreadfirefox.com/community/?q=affiliates&amp;id=2490&amp;t=1" title="WordPress recommends the open-source Firefox browser"><img src="./Options _files/get-firefox.png" alt="Get Firefox"></a></p>
	

</body></html>