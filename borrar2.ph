<HTML>
<HEAD>
<TITLE>Borrar2.php</TITLE>
</HEAD>
<BODY>
<?php
//Conexion con la base
mysql_connect("localhost","root","osperto28");

//selecci�n de la base de datos con la que vamos a trabajar 
mysql_select_db("wordextress");

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Delete From entradas Where id='{$_POST["id"]}'";
mysql_query($sSQL);
?>

<h1><div align="center">Registro Borrado</div></h1>
<div align="center"><a href="admin.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>