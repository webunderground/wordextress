<?php
	require_once('common.php');
	checkUser();
	
	 require_once('general.php');
    require_once('db/db_connection.php');
	
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0052)http://localhost/wordpress/wp-admin/link-manager.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>blog personal › Manage Links — WordPress</title>
<link rel="stylesheet" href="./Links _files/wp-admin.css" type="text/css">


</head>
<body>

<div id="wphead">
<h1>blog personal <span>(<a href="index.php">View site »</a>
	<?php echo $_SESSION['userName']; ?>
         <hr>
	 </span></h1>


</div>

<ul id="adminmenu">

	<li><a href="Administrar.php">Admin</a></li>
	<li><a href="Post.php">Write</a></li>
	<li><a href="admin.php">Manage Entrys</a></li>
	<li><a href="Links.php" class="current">Links</a></li>
	
	<li><a href="profile.php">Users</a></li>
	<li><a href="Options.php">Options</a></li>	<li class="last"><a href="logout.php" title="Log out of this account">Logout (Administrator)</a></li>
</ul>

<ul id="adminmenu2">

	<li><a href="Links.php" class="current">Manage Links</a></li>
	<li><a href="addlink.php">Add Link</a></li>
	
</ul>


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




<table width="100%" cellpadding="3" cellspacing="3"> 
	<tbody><tr>
	<th scope="col">title</th>
	<th scope="col">description</th>
	
	<th scope="col">category</th>
	<th scope="col">edit</th>
	<th scope="col"></th>
	<th scope="col"></th>

	</tr>
 <tr class="alternate">
              
	<?php
	include("function.php");
?>
<?php 
	$sql = "SELECT * FROM links";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
<tr>
		<td class="alternate"><?php echo $row->email;?></td>
		<td class="alternate"><?php echo $row->text;?></td>
		<td class="alternate"><?php echo $row->location;?></td>
		<td class="alternate">
<a class="btn btn-primary" href="linksedit.php?id=<?php echo $row->id; ?>">
edit</a>
        </td>
		
	</tr>
	<?php } ?>
</table>

			


	</tr></tbody></table>

</div>

<div class="wrap">
  <table width="100%" cellpadding="3" cellspacing="3">
    <tbody><tr><th colspan="4">Manage Multiple Links:</th></tr>
    <tr><td colspan="4">Use the checkboxes on the right to select multiple links and choose an action below:</td></tr>
    <tr>
        <td>
          Assign ownership to:          <select name="newowner" size="1">
            <option value="1">admin</option>
          </select>
        <input name="assign" type="submit" id="assign" value="Go">
        </td>
        <td>
          <input name="visibility" type="submit" id="visibility" value="Toggle Visibility">
        </td>
        <td>
          Move to category:
<select name="category" size="1">
	<option value="1">1: Blogroll</option>

</select>
 <input name="move" type="submit" id="move" value="Go">
        </td>
        <td align="right">
          <a href="http://localhost/wordpress/wp-admin/link-manager.php#" onclick="checkAll(document.getElementById(&#39;links&#39;)); return false; ">Toggle Checkboxes</a>
        </td>
    </tr>
</tbody></table>

</div>
</form>




<div id="footer"><p><a href="http://wordpress.org/"><img src="./Links _files/wp-small.png" alt="WordPress"></a><br>
1.5.1.2 <br> 
<a href="http://codex.wordpress.org/">Documentation</a> — <a href="http://wordpress.org/support/">Support Forums</a> <br>
0.13 seconds</p>

</div>


	<p id="firefoxlink" style="text-align: center;"><a href="http://spreadfirefox.com/community/?q=affiliates&amp;id=2490&amp;t=1" title="WordPress recommends the open-source Firefox browser"><img src="./Links _files/get-firefox.png" alt="Get Firefox"></a></p>
	

</body></html>