<?php
	require_once('common.php');
	checkUser();
?>

<?php
    require_once('general.php');
    require_once('db/db_connection.php');
    $user=$_SESSION['userName'];       
    $sql = "SELECT * FROM entradas WHERE `name` = '$user' AND `location` NOT REGEXP 'options' ORDER BY insertdate DESC";
    $result = $MyDb->f_ExecuteSql($sql);
    $recordcount = $MyDb->f_GetSelectedRows();
    $user=$_SESSION['userName'];	
    $title = "SELECT *  FROM `settings` WHERE `name` = '$user' AND `location` = 'options'";
    $resultitle = $MyDb->f_ExecuteSql($title);
    $recordcount = $MyDb->f_GetSelectedRows(); 
    
	$blogs = "SELECT * FROM `links` WHERE `location`='blogs' ";
    $resultblogs = $MyDb->f_ExecuteSql($blogs);
    $recordcount = $MyDb->f_GetSelectedRows();
    
	$page = "SELECT * FROM `links` WHERE `location`='page' ";
    $resultpage = $MyDb->f_ExecuteSql($page);
    $recordcount = $MyDb->f_GetSelectedRows();
    
	
	
	$search = "SELECT * FROM `links` WHERE `location`='search' ";
    $resultsearch = $MyDb->f_ExecuteSql($search);
    $recordcount = $MyDb->f_GetSelectedRows();
    
    $site = "SELECT * FROM `links` WHERE `location`='site' ";
    $resultsite = $MyDb->f_ExecuteSql($site);
    $recordcount = $MyDb->f_GetSelectedRows();
    
	$social = "SELECT * FROM `links` WHERE `location`='social' ";
    $resultsocial = $MyDb->f_ExecuteSql($social);
    $recordcount = $MyDb->f_GetSelectedRows();
    
	$wiki = "SELECT * FROM `links` WHERE `location`='wiki' ";
    $resultwiki = $MyDb->f_ExecuteSql($wiki);
    $recordcount = $MyDb->f_GetSelectedRows();
	$blogs = "SELECT * FROM `links` WHERE `location`='blogs' ";
    $resultblogs = $MyDb->f_ExecuteSql($blogs);
    $recordcount = $MyDb->f_GetSelectedRows();
    
	$page = "SELECT * FROM `links` WHERE `location`='page' ";
    $resultpage = $MyDb->f_ExecuteSql($page);
    $recordcount = $MyDb->f_GetSelectedRows();
    
	
	
	$search = "SELECT * FROM `links` WHERE `location`='search' ";
    $resultsearch = $MyDb->f_ExecuteSql($search);
    $recordcount = $MyDb->f_GetSelectedRows();
    
    $site = "SELECT * FROM `links` WHERE `location`='site' ";
    $resultsite = $MyDb->f_ExecuteSql($site);
    $recordcount = $MyDb->f_GetSelectedRows();
    
	$social = "SELECT * FROM `links` WHERE `location`='social' ";
    $resultsocial = $MyDb->f_ExecuteSql($social);
    $recordcount = $MyDb->f_GetSelectedRows();
    
	$wiki = "SELECT * FROM `links` WHERE `location`='wiki' ";
    $resultwiki = $MyDb->f_ExecuteSql($wiki);
    $recordcount = $MyDb->f_GetSelectedRows();
    
	
	
   
   $settings = "SELECT * FROM settings";
    $resultsettings = $MyDb->f_ExecuteSql($settings);
    $recordcount = $MyDb->f_GetSelectedRows();
            $user=$_SESSION['userName']; 

      $profile ="SELECT * FROM user entradas WHERE `name` = '$user' AND `location` NOT REGEXP 'options' ORDER BY insertdate DESC";
    $resultprofile = $MyDb->f_ExecuteSql($profile);
    $recordcount = $MyDb->f_GetSelectedRows();


	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>blog personal  </title>

<meta name="generator" content="WordPress 1.5.1.2" /> <!-- leave this for stats -->

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style type="text/css" media="screen">
/*	To accomodate differing install paths of WordPress, images are referred only here,
	and not in the wp-layout.css file. If you prefer to use only CSS for colors and what
	not, then go right ahead and delete the following lines, and the image files. */
		
	body { background: url("http://localhost/wordpress/wp-content/themes/default/images/kubrickbgcolor.jpg"); }	
	#page { background: url("http://localhost/wordpress/wp-content/themes/default/images/kubrickbg.jpg") repeat-y top; border: none; }
	#header { background: url("http://localhost/wordpress/wp-content/themes/default/images/kubrickheader.jpg") no-repeat bottom center; }
	#footer { background: url("http://localhost/wordpress/wp-content/themes/default/images/kubrickfooter.jpg") no-repeat bottom; border: none;}

/*	Because the template is slightly different, size-wise, with images, this needs to be set here
	If you don't want to use the template's images, you can also delete the following two lines. */
		
	#header 	{ margin: 0 !important; margin: 0 0 0 1px; padding: 1px; height: 198px; width: 758px; }
	#headerimg 	{ margin: 7px 9px 0; height: 192px; width: 740px; } 

/* 	To ease the insertion of a personal header image, I have done it in such a way,
	that you simply drop in an image called 'personalheader.jpg' into your /images/
	directory. Dimensions should be at least 760px x 200px. Anything above that will
	get cropped off of the image. */
	/*
	#headerimg { background: url('http://localhost/wordpress/wp-content/themes/default/images/personalheader.jpg') no-repeat top;}
	*/
</style>

	<link rel='archives' title='October 2019' href='http://localhost/wordpress/?m=201910' />

</head>
<body>

<div id="page">


<div id="header">
	<div id="headerimg" class="w3-container w3-red  w3-center">
	
	<?php while ($row = $MyDb->f_GetRecord($resultsettings)) { ?>
		<h1><a href=""><?php echo $row['title']; ?></a></h1>
		<div class="description"><?php echo $row['description']; ?> </div>
<?php } ?>

	
</div>
<hr />
<div id="content" class="narrowcolumn">
<br>
								
			<div class="post" id="post-1">
	
				<div class="entry">
				<?php while ($row = $MyDb->f_GetRecord($result)) { ?>

        
         
         <div id="name"><h3><?php echo $row['title']; ?></h3></div>
           

           <div id="infodate"><?php echo $row['insertdate']; ?></div>
           
         <div id="icon"><?php echo $row['location']; ?></div>
         <div id="text"><?php echo nl2br($row['text']); ?></div>
         <div id="name">Es un articulo de:<?php echo $row['name']; ?>

					 
		 </div>        
          <?php 
                if (strlen($row['web']) > 5) echo '<a href="http://'.$row['web'].'"><img src="style/www.gif" /></a>';
                ?>
           
<?php } ?>

		 

				</div>
	
				</div>
				<div class="entry">
<?php while ($row = $MyDb->f_GetRecord($result)) { ?>

        
         
         <div id="name"><h3><?php echo $row['title']; ?></h3></div>
           

           <div id="infodate"><?php echo $row['insertdate']; ?></div>
           
         <div id="icon"><?php echo $row['location']; ?></div>
         <div id="text"><?php echo nl2br($row['text']); ?></div>
         <div id="name">Es un articulo de:<?php echo $row['name']; ?>

					 
		 </div>        
          <?php 
                if (strlen($row['web']) > 5) echo '<a href="http://'.$row['web'].'"><img src="style/www.gif" /></a>';
                ?>
           
<?php } ?>

		 
		 
		 
		 </div>
		 <p><h2>profile</h2></p>
			<?php while ($row = $MyDb->f_GetRecord($resultprofile)) { ?>

        
         
         <div id="name"><h3><?php echo $row['title']; ?></h3></div>
           

           
         <div id="name"><?php echo $row['name']; ?>  
         <div id="icon"><?php echo $row['location']; ?></div>
		 <div id="name"><?php echo $row['email']; ?></div>
         <div id="text"><?php echo nl2br($row['text']); ?></div>
         

					 
		 </div>        
          <?php 
                if (strlen($row['web']) > 5) echo '<a href="http://'.$row['web'].'"><img src="style/www.gif" /></a>';
                ?>
           
<?php } ?>

			</div>
	
		
		<div class="navigation">
			<div class="alignleft"></div>
			<div class="alignright"></div>
		</div>
		
	
	</div>

	<div class="w3-sidebar w3-bar-block w3-card" style="width:25%;right:0;">
		<ul>
			
			

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

			<li>
						</li>

			
			<li><h2>Archives</h2>
				<ul>
					<li><a href='http://localhost/wordpress/?m=201910' title='October 2019'>October 2019</a></li>
				</ul>
			</li>

			<li><h2>Categories</h2>
			<h3>blogs</h3>
				<?php while ($row = $MyDb->f_GetRecord($resultblogs)) { ?>
              <?php if (strlen($row['web']) > 5) echo'<a href="http://'.$row['web'].'">'.$row['email'].'</a>'; ?></br><?php } ?>
			   			   <h3>Pages</h3>
				<?php while ($row = $MyDb->f_GetRecord($resultpage)) { ?>
              <?php if (strlen($row['web']) > 5) echo'<a href="http://'.$row['web'].'">'.$row['email'].'</a>'; ?></br><?php } ?>
			   <h3>search</h3>
				<?php while ($row = $MyDb->f_GetRecord($resultsearch)) { ?>
                 <?php if (strlen($row['web']) > 5) echo'<a href="http://'.$row['web'].'">'.$row['email'].'</a>'; ?></br><?php } ?>
				<h3>site</h3>
				<?php while ($row = $MyDb->f_GetRecord($resultsite)) { ?>
                 <?php if (strlen($row['web']) > 5) echo'<a href="http://'.$row['web'].'">'.$row['email'].'</a>'; ?></br><?php } ?>
				<h3>social</h3>
				<?php while ($row = $MyDb->f_GetRecord($resultsocial)) { ?>
                 <?php if (strlen($row['web']) > 5) echo'<a href="http://'.$row['web'].'">'.$row['email'].'</a>'; ?></br><?php } ?>
				<h3>wki</h3>
				<?php while ($row = $MyDb->f_GetRecord($resultwiki)) { ?>
                 <?php if (strlen($row['web']) > 5) echo'<a href="http://'.$row['web'].'">'.$row['email'].'</a>'; ?></br><?php } ?>
								

				
				<li><h2>Meta</h2>
				<ul>
										<li><a href="Administrar.php">admin</a></li>
					<li><a href="index.php" title="">extress</a></li>
</ul>
				</li>
						
		</ul>
	</div>



<hr />
<div id="footer">
	<p>
		
	</p>
</div>
</div>

<!-- Gorgeous design by Michael Heilemann - http://binarybonsai.com/kubrick/ -->

		
</body>
</html>