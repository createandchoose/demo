<?php
	$connect = new mysqli("localhost", "root", "", "copystar");
	$connect->set_charset("utf8");

	if($connect->connect_error)
		die("Ошибка подключения: ". $connect->connect_error);
?>