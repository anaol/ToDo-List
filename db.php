<?php 

$db = new Mysqli;

$db->connect('localhost','root','','Todo');

if(!$db){

	echo "success";
}



 ?>