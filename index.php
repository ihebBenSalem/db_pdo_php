<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">

<?php
require_once("connect.php");

$req=$con->query(" select * from test");

while ($data=$req->fetch_array(MYSQLI_ASSOC)) {
	# code...
	$t1=$data["id"] ;
	$t2=$data["a"] ;
	$t3=$data["b"] ;


}





?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<table class="table table-hover ">
	<thead>
		<tr>
			<th>id</th>
			<th>a</th>
			<th>b</th>
		</tr>
	</thead>
	<tbody>
		<tr class="success">
			<td><?php echo $t1;  ?></td>
			<td><?php echo $t2;  ?></td>
			<td><?php echo $t3;  ?></td>
		</tr>
	</tbody>
</table>



</body>
</html>