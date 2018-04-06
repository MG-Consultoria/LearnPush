<?php
	$conectar = mysql_connect("127.0.0.1","root","") or die("Impossível ligar ao servidor");
	$db = mysql_select_db("itv",$conectar) or die("Impossível ligar à base de dados");
?>
<!DOCTYPE html>
<html>
<head>
	<title>YouStream</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	<style type="text/css">
		*{
			margin: 0;
			outline: none;
			transition: all .25s ease-in-out;
			font-family: 'Nunito Sans', sans-serif;
			overflow-x: hidden;
		}
		body{
			background-color: #F9F9F9;
		}
	</style>
</head>
</html>