<?php
	define('db_host','localhost');
	define('db_user','root');
	define('db_pass','');
	define('db_name','prakerin');
	
	$conn=mysql_connect(db_host,db_user,db_pass) or die (mysql_error());	
	if ($conn) {
		mysql_select_db(db_name);
	}
?>