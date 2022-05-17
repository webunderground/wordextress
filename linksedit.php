<?php
	require_once('common.php');
	checkUser();
	    require_once('glinks.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://localhost/wordpress/wp-admin/edit.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>blog personal › Posts — WordPress</title>
<link rel="stylesheet" href="./edit_files/wp-admin.css" type="text/css">



</head>
<body>

<div id="wphead">
<h1>blog personal <span>(<a href="http://localhost/wordextress/">View site »</a>)</span></h1>
	<?php echo $_SESSION['userName']; ?>
         <hr>

</div>

<ul id="adminmenu">
<li><a href="admin.php">admin</a></li>
	<li><a href="Post.php">Write</a></li>
	<li><a href="admin.php" class="current">Manage</a></li>
	<li><a href="Links.php">Links</a></li>
	<li><a href="profile.php">Users</a></li>
	<li><a href="Options.php">Options</a></li>	<li class="last"><a href="logout.php" title="Log out of this account">Logout (Administrator)</a></li>
</ul>

	</ul>

<ul id="adminmenu2">

	</ul>
 
<div class="wrap">
   </p> 


</div>

<div class="wrap">
<h2>
editar entradas</h2>




<br style="clear:both;">


<table width="100%" cellpadding="3" cellspacing="3"> 
	<tbody><tr>

	

	</tr>
 
	<tr class="alternate">
<?php 
include("function.php");
$id = $_GET['id'];
select_id('links','id',$id);
?>
<form action="" method="post">
<p>title<input name="email" type="text" size="42" value="<?php echo $row->email;?>"/>
<p>links	<input type="text" rows="100" style="width: 99%;" value="<?php echo $row->web;?>" name="web"></p>
<p>category <select name="location"><?php listLocations(); ?></select>
<p>description<textarea type="text" rows="10" id="textarea2" style="width: 99%;"  value="<?php echo $row->text;?>" name="text"><?php echo $row->text;?></textarea></p>


	
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$field = array("web"=>$_POST['web'], "location"=>$_POST['location'],"email"=>$_POST['email'],"text"=>$_POST['text']);
		$tbl = "links";
		edit($tbl,$field,'id',$id);
		header("location:Links.php");
	}
?>
      </a></td>
				</tr> 
 
</tbody></table> 

<div class="navigation">
<div class="alignleft"></div>
<div class="alignright"></div>
</div>

 


</li> 
<!-- /comment --> 
 

<li>
  
  Administrator 
  (
  <a href="mailto:faviangaro@yahoo.com">faviangaro@yahoo.com</a> 
  /
  <a href="http://localhost/wordextress/" rel="external"></a> 
  )</strong> 
 

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