<?php

require_once("config.php");

$con=new mysqli(host,name,pass,db);

if (!$con) {
	# code...
echo "fail to connect";

}


?>