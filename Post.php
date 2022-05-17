<?php
	require_once('common.php');
	checkUser();
?>
<?php
    require_once('general.php');
    require_once('db/db_connection.php');
    
    if (isset($_POST['submitBtn'])) {
         $name     = (isset($_POST['name'])) ? htmlentities($_POST['name']) : '' ;
         $comment  = (isset($_POST['comment'])) ? htmlentities($_POST['comment']) : '' ;
         $location = (isset($_POST['location'])) ? htmlentities($_POST['location']) : '' ;
         $website  = (isset($_POST['website'])) ? htmlentities(str_replace('http://','',$_POST['website'])) : '' ;
         $title    = (isset($_POST['title'])) ? htmlentities($_POST['title']) : '' ;
         date_default_timezone_set('America/Bogota');
    //preguntamos la zona horaria
    $zonahoraria = date_default_timezone_get();
    setlocale(LC_ALL,"es_ES");
    
		 $actDate  = date("Y-m-d H:i:s");
         
         //Minimum name and comment length.
         if ((strlen($name) > 2) && (strlen($comment) > 5)){
             $sql = "INSERT INTO entradas (name,text,insertdate,location,web,title) VALUES (";
             $sql .= "'".$name."','".$comment."','".$actDate."','".$location."','".$website."','".$title."')";
             $MyDb->f_ExecuteSql($sql);
         }
         
         header("Location: Post.php");
    }
    else {

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://localhost/wordpress/wp-admin/post.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>blog personal › Create New Post — WordPress</title>
<link rel="stylesheet" href="./Post_files/wp-admin.css" type="text/css">



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
			<div class="wrap">
			
			</div>
			
<div class="wrap">
<h2>Write Post</h2>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="gbook" id="gbook">
         
<input type="hidden" name="name" value="<?php echo $_SESSION['userName']; ?>">


<div id="poststuff">
    <fieldset id="titlediv">
      <legend><a href="" title="Help on titles">Title</a></legend> 
	  <div><input type="text" name="title" size="30" tabindex="1" value="" id="title"></div>
    </fieldset>

    <fieldset id="categorydiv">
      <legend><a href="" title="Help on categories">Categories</a></legend> 
	  <div><label for="category-1" class="selectit"><select name="location"><?php listLocations(); ?></select></label>

<span class="cat-nest">
</span>
</div>
    </fieldset>

<br>
<fieldset id="postdiv">
    <legend><a href="" title="Help with post field">Post</a></legend>
<div><textarea rows="9" cols="40" name="comment" tabindex="4" id="content"></textarea></div>
</fieldset>



<p><label for="trackback"> <a href="http://wordpress.org/docs/reference/post/#trackback" title="Help on trackbacks"><strong>TrackBack</strong> a <abbr title="Universal Resource Identifier">URI</abbr></a>:</label> (Separate multiple <abbr title="Universal Resource Identifier">URI</abbr>s with spaces.)<br>	<input type="text" name="website" style="width: 360px" id="trackback" tabindex="7"></p>

<p class="submit"><input type="submit" name="submitBtn" tabindex="9" value="Save"> 
 </p>


</div>
</form>

<?php } ?> 
</div>
<div class="wrap">
<h3>WordPress bookmarklet</h3>
<p>You can drag the following link to your links bar or add it to your bookmarks and when you "Press it" it will open up a popup window with information and a link to the site you’re currently browsing so you can make a quick post about it. Try it out:</p><p>

<a href="javascript:if(navigator.userAgent.indexOf(&#39;Safari&#39;) &gt;= 0){Q=getSelection();}else{Q=document.selection?document.selection.createRange().text:document.getSelection();}void(window.open(&#39;http://localhost/wordpress/wp-admin/bookmarklet.php?text=&#39;+encodeURIComponent(Q)+&#39;&amp;popupurl=&#39;+encodeURIComponent(location.href)+&#39;&amp;popuptitle=&#39;+encodeURIComponent(document.title),&#39;WordPress bookmarklet&#39;,&#39;scrollbars=yes,width=600,height=460,left=100,top=150,status=yes&#39;));">Press It - blog personal</a> 
</p>
</div>

<div id="footer"><p><a href="http://wordpress.org/"><img src="./Post_files/wp-small.png" alt="WordPress"></a><br>
1.5.1.2 <br> 
<a href="http://codex.wordpress.org/">Documentation</a> — <a href="http://wordpress.org/support/">Support Forums</a> <br>
0.09 seconds</p>

</div>


	<p id="firefoxlink" style="text-align: center;"><a href="http://spreadfirefox.com/community/?q=affiliates&amp;id=2490&amp;t=1" title="WordPress recommends the open-source Firefox browser"><img src="./Post_files/get-firefox.png" alt="Get Firefox"></a></p>
	

</body></html>