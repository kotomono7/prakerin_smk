<?php
	include ("../config/config.php");
		
	$username=$_POST['username'];
	$password=$_POST['password'];
	$table=$_POST['akses'];
	$username=mysql_real_escape_string($username);
	$password=mysql_real_escape_string($password);
	
	$sql=mysql_query("select * from $table where username='$username' and password='$password'");
	$data=mysql_fetch_array($sql);
	$oke=mysql_num_rows($sql);
	
		if ($oke==1) {
			session_start();
			$_SESSION['user']=$username;
			$_SESSION['pass']=$password;
			
			$_SESSION['table']=$table;
			$_SESSION['level']=$data['level'];
			$_SESSION['login']=1;
			
			$level=$_SESSION['level'];
			if ($level=='superuser' || $level=='admin') {
				header("location:../index.php?page=dashboard");
			} else {
				header("location:../index.php");
			}
		} else {
			header("location:../index.php?page=login&notif=error01");
		}
?>