<?php require_once '../model1.php'; ?>
 
<?php $post = getPostById($_GET['id']); ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>mi blog  &raquo; Blog Archive   &raquo; proposito</title>

<meta name="generator" content="WordPress 1.5.1.2" /> <!-- leave this for stats -->

<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/default/style.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://localhost/wordpress/?feed=rss2" />
<link rel="alternate" type="text/xml" title="RSS .92" href="http://localhost/wordpress/?feed=rss" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="http://localhost/wordpress/?feed=atom" />
<link rel="pingback" href="http://localhost/wordpress/xmlrpc.php" />

<style type="text/css" media="screen">
/*	To accomodate differing install paths of WordPress, images are referred only here,
	and not in the wp-layout.css file. If you prefer to use only CSS for colors and what
	not, then go right ahead and delete the following lines, and the image files. */
		
	body { background: url("http://localhost/wordpress/wp-content/themes/default/images/kubrickbgcolor.jpg"); }	
	#page { background: url("http://localhost/wordpress/wp-content/themes/default/images/kubrickbgwide.jpg") repeat-y top; border: none; } 
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

	<link rel='archives' title='July 2020' href='http://localhost/wordpress/?m=202007' />

</head>
<body>

<div id="page">


<div id="header">
	<div id="headerimg">
		<h1><a href="http://localhost/wordpress">mi blog</a></h1>
		<div class="description">el blog de la intranet</div>
	</div>
</div>
<hr />

	<div id="content" class="widecolumn">
				
  	
		<div class="navigation">
			<div class="alignleft"></div>
			<div class="alignright"></div>
		</div>
	
		<div class="post" id="post-1">
			<h2><a href="http://localhost/wordpress/?p=1" rel="bookmark" title="Permanent Link: proposito"></a></h2>
	
</p>
	
					
				
		</div>
		
	
<!-- You can start editing here. -->

	<p id="comments"><?php echo $post['title'] ?></p> 

	<ol class="commentlist">

	
		<li class="alt" id="comment-1">
			   
			   <small class="commentmetadata"><a href="#comment-1" title=""><?php echo $post['insertdate'] ?></a>  <a href='http://localhost/wordpress/wp-admin/post.php?action=editcomment&amp;comment=1'>e</a> </small>

			
   
   <p><?php echo $post['text'] ?></p>

	<br />
	   <p><?php echo $post['name'] ?></p><br><br>

<h1></h1>
   <br>
   <div>
   </div>
   <div>
   <br>
    <a href="show.php?id=<?php echo $_GET['id'] ?>"></a>
   <br>
   <br>
    <a href="../">Return to main page</a>
   </div>
  
				

		</li>

	
	
	</ol>


 <body>
  </body>
</html>