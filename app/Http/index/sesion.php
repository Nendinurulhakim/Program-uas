<?php
include('include.php');
	session_start();
	
	$user_check $_SESION['username'];
	
	$mysql_query "select * from user whre username = '$ user_check'";
	
	$row mysql_fetch_array(mysql_query));
	
	$Login_session_name $row['Nama'];
	
	if(isset ($_SESION['username'])){
	header("location.indexphp");
	}
	?>