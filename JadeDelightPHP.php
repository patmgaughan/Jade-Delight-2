<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Jade Delight</title>

<style>

	body {
		background-color: #3a7354;
		color: #345d98;
	}

	h1 {
		text-align: center;
		font-size: 350%;
		color: #b0dabe;
		text-shadow: 3px 3px #345d98;
	}

	form {
		background-color: #99b1c9;
		margin: 5%;
		padding: 15px;
		box-shadow: -8px 8px #345d98;
	}

	table {
		background-color: #b0dabe;
	}

	th {
		color: #fff;
		background-color: #3a7354;
		font-weight: normal;

	}

	input {
		display: inline;
	}


	input[type=text] {
 		border: 1px solid #345d98;
	}

	input[type=text]:focus {
 		background-color: #eee; 
 		border: 1px solid #3a7354;
	}

	table input[type=text]:focus {
 		background-color: #eee; 
	}

	input[type=submit] {
 		background-color: #345d98;
  		border: none;
  		color: #fff;
 		padding: 15px 30px;
  		text-decoration: none;
  		margin: 4px 2px;
  		cursor: pointer;
	}

	input[type=button] {
 		background-color: #345d98;
  		border: none;
  		color: #fff;
 		padding: 15px 30px;
  		text-decoration: none;
  		margin: 4px 2px;
  		cursor: pointer;
	}


	/*
	jade: #3a7354
	mint: #b0dabe
	yellow: #eed147
	dark blue: #345d98
	power blue: #99b1c9
	red: #d0302b
	*/

</style>


</head>

<body>

<h1>Jade Delight</h1>
<form>
	<?php
	$population = array ("MA"=>2000, "CT"=>3000);
	echo $population["CT"] ."<br>";
	foreach ($population as $k=>$v)
	{
		echo "$k: ". $population[$k]. "<br>";
		
	}
	?>
	
<!-- 	<?php
	extract($_REQUEST);
	echo "Street is $street";
	
	?> -->
</form>

</body>
</html>
