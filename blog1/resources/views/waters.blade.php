<!DOCTYPE html>
<html>
<head>
	<title>My Water</title>
</head>
<body>
	<div><h2>Hello Water!!</h2></div>
	<!-- <h3>{{$name}}</h3> -->
	<?php foreach ($name as $value) {
		
		echo "No. = ".$value['id']." name = ".$value['name']." size = ".$value['size']." prize = ".$value['prize'];
		echo nl2br("\n");
	} ?>
	<h4>{{$data}}</h4>
	
</body>
</html>