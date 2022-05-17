<?php
	require_once('common.php');
	checkUser();
?>


<?php
    require_once('glinks.php');
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
             $sql = "INSERT INTO links (name,text,insertdate,location,web,email) VALUES (";
             $sql .= "'".$name."','".$comment."','".$actDate."','".$location."','".$website."','".$email."')";
             $MyDb->f_ExecuteSql($sql);
         }
         
         header("Location: Links.php");
    }
    else {

?>

    

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0048)http://localhost/wordpress/wp-admin/link-add.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>blog personal › Add Link — WordPress</title>
<link rel="stylesheet" href="./Add Link_files/wp-admin.css" type="text/css">



</head>
<body>

<div id="wphead">
<h1>blog personal <span>(<a href="index.php">View site »</a>)</span> <?php echo $_SESSION['userName']; ?><br></h1>
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
	<li><a href="Links.php" class="current">Manage Links</a></li>
	<li><a href="addlink.php">Add Link</a></li>
	
	</ul>

<div class="wrap">
 <div id="main">
        <div id="formheader">Add comment</div>
        <div id="formbody">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="gbook" id="gbook">
            <table align="center">
              <tr><th></th><td><input name="name"  type="hidden" value="<?php echo $_SESSION['userName']; ?>"></td></tr>
               <tr><th>title:</th><td><input name="email" type="text" size="42" /></td></tr>

			  <tr><th>Comment:</th><td><textarea name="comment" cols=32 rows=6></textarea></td></tr>
              <tr><th>Location:</th><td><select name="location"><?php listLocations(); ?></select></tr>
              <tr><th>Website:</th><td><input name="website" type="text" size="42" /></td></tr>
             
              
              <tr><td colspan="2" align="center"><br/><input class="text" type="submit" name="submitBtn" value="Add comment" /></td></tr>
            </table>  
          </form>

        </div>
        <div id="source">Micro Guestbook 1.1</div>	
      </div>
</body>     
<?php } ?>    
</div>


<h2><strong>Add</strong> a link:</h2>	    </div>
          </div>
        </div>
        
        	
      



 
		  </td>
           	</tr>
</tbody></table>
</fieldset>

<fieldset class="options">
	
</div>

<div class="wrap">
<p>You can drag <a href="javascript:void(linkmanpopup=window.open(&#39;http://localhost/wordpress/wp-admin/link-add.php?action=popup&amp;linkurl=&#39;+escape(location.href)+&#39;&amp;name=&#39;+escape(document.title),&#39;LinkManager&#39;,&#39;scrollbars=yes,width=750,height=550,left=15,top=15,status=yes,resizable=yes&#39;));linkmanpopup.focus();window.focus();linkmanpopup.focus();" title="Link add bookmarklet">Link This</a> to your toolbar and when you click it a window will pop up that will allow you to add whatever site you’re on to your links! Right now this only works on Mozilla or Netscape, but we’re working on it.</p></div>


<div id="footer"><p><a href="http://wordpress.org/"><img src="./Add Link_files/wp-small.png" alt="WordPress"></a><br>
1.5.1.2 <br> 
<a href="http://codex.wordpress.org/">Documentation</a> — <a href="http://wordpress.org/support/">Support Forums</a> <br>
0.07 seconds</p>

</div>


	<p id="firefoxlink" style="text-align: center;"><a href="http://spreadfirefox.com/community/?q=affiliates&amp;id=2490&amp;t=1" title="WordPress recommends the open-source Firefox browser"><img src="./Add Link_files/get-firefox.png" alt="Get Firefox"></a></p>
	

</body></html>