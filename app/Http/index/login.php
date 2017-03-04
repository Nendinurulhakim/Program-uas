<format method = "post">
<table width="60%
align="center">

<tr>
	<th align="center"
	colspan="2">Login<a
	href="daftar.php">-Daftar</a><th>
	</tr>  
	<tr>
	
			<td>username</td>
			<td><input type="text "name=username"
		
			size="80"></td>
					</tr>
					<tr>
					
			<td>password</td>
				<td>input type="text "name=username"
			size="80"></td>
					</tr>
					<tr>
					<td colspan="2"
					align="right"<input
					type="submit"value="Login"
					name="Login"> <input type="submit"value="batal"
					
					
<?php
session_start();
include 'config.php;
	if(inset($_POST['Login']){
		$username = $_POST['username'];
		$password = sha1($_post['password']);
		$sql_query = 'SELECT * from user where username'
		$username and password = $password'";
		
	if(mysql_query($sql_queru)){
		$num_rows = 1){
			$SESSION['']
		}
	}
		
		
	if(mysql_query($sql_query);
	)
