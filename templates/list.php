<html>
    <body>
  <h3>List of Posts</h3>
  <ul>
   <?php foreach ($posts as $post): ?>
   <li>
    <h2>
     <a href="templates/show.php?id=<?php echo $post['id'] ?>">
      <?php echo $post['title'] ?>
     </a>
    <h2>
  
   </li>
   <?php endforeach; ?>
  </ul>
    </body>
</html>