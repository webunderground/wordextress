<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
<?php
	include("function.php");
?>
</head>

<body>
<div class="main-wrapper">
<h1>barrar entradas</h1>
<br><br>
<?php 
	$sql ="DELETE FROM `entradas` WHERE `entradas`"
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->title;?></td>
		<td><?php echo $row->autor;?></td>
		<td>
<a class="btn btn-primary" href="delete.php?id=<?php echo $row->id; ?>">
<i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
        </td>
	</tr>
	<?php } ?>
</div>
</body>
</html>