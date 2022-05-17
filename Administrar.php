<?php
	require_once('common.php');
	checkUser();
	 require_once('general.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0048)http://localhost/wordpress/wp-admin/link-add.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>blog personal ? Add Link ? WordPress</title>
<link rel="stylesheet" href="./Add Link_files/wp-admin.css" type="text/css">



</head>
<body>

<div id="wphead">
<h1>blog personal <span>(<a href="https://online1973.webcindario.com/wordextress/">View site »</a>)>)<?php echo $_SESSION['userName']; ?></</span></h1>
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
<h2><strong>Admistrar tu blogs</strong> :</h2>
     <p>Sistema de administracion de tu sistema
<fieldset class="options">
	<legend>Users</legend>
        <table class="editform" width="100%" cellspacing="2" cellpadding="5">
         <tbody><tr>
           <?php
	include("function.php");
?>
<?php 
     $user=$_SESSION['userName']; 
	$sql = "SELECT * FROM usuario";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
<tr>
		<td class="alternate"><?php echo $row->name;?></td>
		
		<td class="alternate"><?php echo $row->text;?></td>
		<td class="alternate"><?php echo $row->location;?></td>
         </tr>
		 <?php } ?>
         <tr>
          
         </tr>
</tbody></table>
</fieldset>
       
        </tbody></table>
		  </td>
           	</tr>
</tbody></table>
</fieldset>
       <p class="submit">
         <input type="submit" name="submit" value="Add Link »"> 
       </p>
<fieldset class="options">
	
</div>

<div class="wrap">
<p>You can drag <a href="javascript:void(linkmanpopup=window.open(&#39;http://localhost/wordpress/wp-admin/link-add.php?action=popup&amp;linkurl=&#39;+escape(location.href)+&#39;&amp;name=&#39;+escape(document.title),&#39;LinkManager&#39;,&#39;scrollbars=yes,width=750,height=550,left=15,top=15,status=yes,resizable=yes&#39;));linkmanpopup.focus();window.focus();linkmanpopup.focus();" title="Link add bookmarklet">Link This</a> to your toolbar and when you click it a window will pop up that will allow you to add whatever site you?re on to your links! Right now this only works on Mozilla or Netscape, but we?re working on it.</p></div>

<?php 
// index.php 
require_once 'model.php'; 
$posts = getPosts(); 
require 'templates/list.php'; 
?>				

<div id="footer"><p><a href="http://wordpress.org/"><img src="./Add Link_files/wp-small.png" alt="WordPress"></a><br>
1.5.1.2 <br> 
<a href="http://codex.wordpress.org/">Documentation</a> ? <a href="http://wordpress.org/support/">Support Forums</a> <br>
0.07 seconds</p>

</div>


	<p id="firefoxlink" style="text-align: center;"><a href="http://spreadfirefox.com/community/?q=affiliates&amp;id=2490&amp;t=1" title="WordPress recommends the open-source Firefox browser"><img src="./Add Link_files/get-firefox.png" alt="Get Firefox"></a></p>
	

</body></html>