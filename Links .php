<?php
	require_once('common.php');
	checkUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0052)http://localhost/wordpress/wp-admin/link-manager.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>blog personal › Manage Links — WordPress</title>
<link rel="stylesheet" href="./Links _files/wp-admin.css" type="text/css">


</head>
<body>

<div id="wphead">
<h1>blog personal <span>(<a href="index.php">View site »</a>)</span></h1>
</div>

<ul id="adminmenu">

	<li><a href="index.php">Dashboard</a></li>
	<li><a href="Post.php">Write</a></li>
	<li><a href="admin.php">Manage</a></li>
	<li><a href="Links.php" class="current">Links</a></li>
	
	<li><a href="profile.php">Users</a></li>
	<li><a href="options-general.php">Options</a></li>	<li class="last"><a href="http://localhost/wordpress/wp-login.php?action=logout" title="Log out of this account">Logout (Administrator)</a></li>
</ul>

<ul id="adminmenu2">

	<li><a href="http://localhost/wordpress/wp-admin/link-manager.php" class="current">Manage Links</a></li>
	<li><a href="http://localhost/wordpress/wp-admin/link-add.php">Add Link</a></li>
	<li><a href="http://localhost/wordpress/wp-admin/link-categories.php">Link Categories</a></li>
	<li><a href="http://localhost/wordpress/wp-admin/link-import.php">Import Links</a></li>
</ul>
<script type="text/javascript">
<!--
function checkAll(form)
{
	for (i = 0, n = form.elements.length; i < n; i++) {
		if(form.elements[i].type == "checkbox") {
			if(form.elements[i].checked == true)
				form.elements[i].checked = false;
			else
				form.elements[i].checked = true;
		}
	}
}
//-->
</script>

<div class="wrap">
    <form name="cats" method="post" action="http://localhost/wordpress/wp-admin/link-manager.php">
    <table width="75%" cellpadding="3" cellspacing="3">
      <tbody><tr>
        <td>
        <strong>Show</strong> links in category:<br>
        </td>
        <td>
          <strong>Order</strong> by:        </td>
		<td>&nbsp;</td>
      </tr>
      <tr>
        <td>
        <select name="cat_id">
          <option value="All" selected="selected"> All</option>
          <option value="1">1: Blogroll</option>
        </select>
        </td>
        <td>
          <select name="order_by">
            <option value="order_id">Link ID</option>
            <option value="order_name" selected="selected">Name</option>
            <option value="order_url">URI</option>
            <option value="order_desc">Description</option>
            <option value="order_owner">Owner</option>
            <option value="order_rating">Rating</option>
          </select>
        </td>
        <td>
          <input type="submit" name="action" value="Show">
        </td>
      </tr>
    </tbody></table>
    </form>

</div>

<form name="links" id="links" method="post" action="http://localhost/wordpress/wp-admin/link-manager.php">
<div class="wrap">

    <input type="hidden" name="link_id" value="">
    <input type="hidden" name="action" value="">
    <input type="hidden" name="order_by" value="order_name">
    <input type="hidden" name="cat_id" value="0">
  <table width="100%" cellpadding="3" cellspacing="3">
    <tbody><tr>
      <th width="15%">Name</th>
      <th>URI</th>
      <th>Category</th>
      <th>rel</th>
      <th>Image</th>
      <th>Visible</th>
      <th colspan="2">Action</th>
      <th>&nbsp;</th>
  </tr>
    <tr valign="middle">
		<td><strong>cmsimple</strong><br>
Description: cms gestor de contenido</td><td><a href="http://localhost/cmsimple/" title="Visit cmsimple">localhost/cmsimple</a></td>        <td>Blogroll</td>
        <td></td>
        <td align="center">No</td>
        <td align="center">Yes</td><td><a href="http://localhost/wordpress/wp-admin/link-manager.php?link_id=1&amp;action=linkedit" class="edit">Edit</a></td><td><a href="http://localhost/wordpress/wp-admin/link-manager.php?link_id=1&amp;action=Delete" onclick="return confirm(&#39;You are about to delete this link.\n  \&#39;Cancel\&#39; to stop, \&#39;OK\&#39; to delete.&#39;);" class="delete">Delete</a></td><td><input type="checkbox" name="linkcheck[]" value="1"></td>
	</tr>    <tr valign="middle" class="alternate">
		<td><strong>Sphider</strong><br>
Description: buscador de la intranet</td><td><a href="http://localhost/sphider/search.php" title="Visit Sphider">localhost/sphider/search.php</a></td>        <td>Blogroll</td>
        <td></td>
        <td align="center">No</td>
        <td align="center">Yes</td><td><a href="http://localhost/wordpress/wp-admin/link-manager.php?link_id=7&amp;action=linkedit" class="edit">Edit</a></td><td><a href="http://localhost/wordpress/wp-admin/link-manager.php?link_id=7&amp;action=Delete" onclick="return confirm(&#39;You are about to delete this link.\n  \&#39;Cancel\&#39; to stop, \&#39;OK\&#39; to delete.&#39;);" class="delete">Delete</a></td><td><input type="checkbox" name="linkcheck[]" value="7"></td>
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