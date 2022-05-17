<?php
	require_once('common.php');
	checkUser();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://localhost/wordpress/wp-admin/profile.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>blog personal › Profile — WordPress</title>
<link rel="stylesheet" href="./Profile _files/wp-admin.css" type="text/css">



</head>
<body>

<div id="wphead">
<h1>blog personal <span>(<a href="http://localhost/wordpress/">View site »</a>)</span></h1>
</div>

<ul id="adminmenu">

	<li><a href="http://localhost/wordpress/wp-admin/index.php">Dashboard</a></li>
	<li><a href="http://localhost/wordpress/wp-admin/post.php">Write</a></li>
	<li><a href="http://localhost/wordpress/wp-admin/edit.php">Manage</a></li>
	<li><a href="http://localhost/wordpress/wp-admin/link-manager.php">Links</a></li>
	<li><a href="http://localhost/wordpress/wp-admin/themes.php">Presentation</a></li>
	<li><a href="http://localhost/wordpress/wp-admin/plugins.php">Plugins</a></li>
	<li><a href="http://localhost/wordpress/wp-admin/profile.php" class="current">Users</a></li>
	<li><a href="http://localhost/wordpress/wp-admin/options-general.php">Options</a></li>	<li class="last"><a href="http://localhost/wordpress/wp-login.php?action=logout" title="Log out of this account">Logout (Administrator)</a></li>
</ul>

<ul id="adminmenu2">

	<li><a href="http://localhost/wordpress/wp-admin/profile.php" class="current">Your Profile</a></li>
	<li><a href="http://localhost/wordpress/wp-admin/users.php">Authors &amp; Users</a></li>
</ul>
<div class="wrap">
<h2>Profile</h2>
<form name="profile" id="profile" action="http://localhost/wordpress/wp-admin/profile.php" method="post">
	<p>
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="checkuser_id" value="1">
  </p>

  <table width="99%" border="0" cellspacing="2" cellpadding="3" class="editform">
    <tbody><tr>
      <th width="33%" scope="row">Username:</th>
      <td width="67%">admin</td>
    </tr>
    <tr>
      <th scope="row">Level:</th>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">Posts:</th>
      <td>    1</td>
    </tr>
    <tr>
      <th scope="row">First name:</th>
      <td><input type="text" name="newuser_firstname" id="newuser_firstname" value=""></td>
    </tr>
    <tr>
      <th scope="row">Last name:</th>
      <td><input type="text" name="newuser_lastname" id="newuser_lastname2" value=""></td>
    </tr>
    <tr>
      <th scope="row">Nickname:</th>
      <td><input type="text" name="newuser_nickname" id="newuser_nickname2" value="Administrator"></td>
    </tr>
    <tr>
      <th scope="row">How to display name: </th>
      <td><select name="newuser_idmode">
        <option value="nickname" selected="selected">Administrator</option>
        <option value="login">admin</option>
				      </select>        </td>
    </tr>
    <tr>
      <th scope="row">E-mail:</th>
      <td><input type="text" name="newuser_email" id="newuser_email2" value="faviangaro@yahoo.com"></td>
    </tr>
    <tr>
      <th scope="row">Website:</th>
      <td><input type="text" name="newuser_url" id="newuser_url2" value=""></td>
    </tr>
    <tr>
      <th scope="row">ICQ:</th>
      <td><input type="text" name="newuser_icq" id="newuser_icq2" value=""></td>
    </tr>
    <tr>
      <th scope="row">AIM:</th>
      <td><input type="text" name="newuser_aim" id="newuser_aim2" value=""></td>
    </tr>
    <tr>
      <th scope="row">MSN IM: </th>
      <td><input type="text" name="newuser_msn" id="newuser_msn2" value=""></td>
    </tr>
    <tr>
      <th scope="row">Yahoo IM: </th>
      <td>        <input type="text" name="newuser_yim" id="newuser_yim2" value="">      </td>
    </tr>
    <tr>
      <th scope="row">Profile:</th>
      <td><textarea name="user_description" rows="5" id="textarea2" style="width: 99%; "></textarea></td>
    </tr>
    <tr>
      <th scope="row">New <strong>Password</strong> (Leave blank to stay the same.)</th>
      <td><input type="password" name="pass1" size="16" value="">
      	<br>
        <input type="password" name="pass2" size="16" value=""></td>
    </tr>
  </tbody></table>
  <p class="submit">
    <input type="submit" value="Update Profile »" name="submit">
  </p>
</form>
</div>


<div class="wrap">
    <script type="text/javascript">
//<![CDATA[
function addPanel()
        {
          if ((typeof window.sidebar == "object") && (typeof window.sidebar.addPanel == "function"))
            window.sidebar.addPanel("WordPress Post: blog personal","http://localhost/wordpress/wp-admin/sidebar.php","");
          else
            alert();
        }
//]]>
</script>
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