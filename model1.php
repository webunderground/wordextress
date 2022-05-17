<?php
// model.php
  
 require_once 'config.php'; 
 
  
function openConex(){
 $conex=new mysqli(DBHOST, DBUSER, DBPWD, DBNAME); 
  
    return $conex;
}    
  
function getPosts(){ 
 $mysqli = openConex();
  
 $result = $mysqli->query('SELECT id, title FROM entradas ORDER BY id desc'); 
 
 return $result; 
}
 
function getPostById($id)
{
 $mysqli = openConex();
  
 $result = $mysqli->query('SELECT insertdate, title, text, name FROM entradas WHERE id ='.$id);
 $row = mysqli_fetch_assoc($result);
  
    return $row;
}
 
?>