<?php
include_once 'config.php';
if (issert($_GET['delete_id])){
	$sql_query = "DELETE FROM dbgrosir WHERE no"$_GET['
	delete_id'];
	mysql_query($sql_query;
	header("location !$_server"[php_self]");
}
EDIT

<!DOCTYPE html>
<html>
<html>
<title>Halaman Awal Operasi CRUD</TITLE>
<style>
div.container {
	width: 100%;
	border 1px solid gray;
}

header, footer {
	padding: 1cm;
	color: white;
	background-color: brown;
	clear: left;
	text-align: center;
	}
	
nav {
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1cm;
}
nav ul {
	list-style-type: none;
	padding: 0;
}
nav ul a {
	text-decoration: none;
}

artikle{
margin-left: 170px;
berder-left: 1px colid gray;
padding :1px;   
overflow; hidden;
}

</style>
</head>
<body>

<div class-"container">
<header> 
<h1>Operasi CRUD</h1>
</header>

<nav>
	<ul>
	<li><b>MENU</b></li>
	<li><a href ="#">Menu 1</a></li>
	<li><a href ="#">Menu 2</a></li>
	<li><a href ="#">Menu 3</a></li>

	</ul>
</nav>

	</nav>
	<article>
		<table border="1" width="75%" align="center">
			<tr> 
				<th>Tambah Data</th>
			</tr>
			<tr>
				<td>No</td>
				<td>:</td>
				<td><input type="text" name="no" size="70"></input></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="70"></input></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="70"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="70"></input></td>
			</tr>
			<tr>
				<td>Aksi</td>
				<td>:</td>
				<td><input type="text" name="aksi" size="70"></input></td>
			</tr>
			<tr>

				<td colspan="3"><input type="button" value="UPDATE"></input><input type="button" value="BATAL"></input></td>
			</tr>
		</table>
	</article>


<footer>NendiNH 14.111.224</footer>
</div>
</body>
</html>


INDEX

<!DOCTYPE html>
<html>
<html>
<title>Halaman Awal Operasi CRUD</TITLE>
<style>
div.container {
	width: 100%;
	border 1px solid gray;
}

header, footer {
	padding: 1cm;
	color: white;
	background-color: brown;
	clear: left;
	text-align: center;
	}
	
nav {
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1cm;
}
nav ul {
	list-style-type: none;
	padding: 0;
}
nav ul a {
	text-decoration: none;
}

artikle{
margin-left: 170px;
berder-left: 1px colid gray;
padding :1px;   
overflow; hidden;
}

</style>
</head>
<body>

<div class-"container">
<header> 
<h1>Operasi CRUD</h1>
</header>

<nav>
	<ul>
	<li><b>MENU</b></li>
	<li><a href ="#">Menu 1</a></li>
	<li><a href ="#">Menu 2</a></li>
	<li><a href ="#">Menu 3</a></li>

	</ul>
</nav>

	</nav>
	<article>
		<table border="1" width="75%" align="center">
			<td>
				<th><a href="Tambah.php"><button type="submit">+ TAMBAH</button></a></th>
			</td>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Nim</td>
				<td>Alamat</td>
				<td>Aksi</td>
			</tr>
		</table>
	</article>

<footer>NendiNH 14.111.224</footer>
</div>
</body>
</html>



TAMBAH

<!DOCTYPE html>
<html>
<html>
<title>Halaman Awal Operasi CRUD</TITLE>
<style>
div.container {
	width: 100%;
	border 1px solid gray;
}

header, footer {
	padding: 1cm;
	color: white;
	background-color: brown;
	clear: left;
	text-align: center;
	}
	
nav {
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1cm;
}
nav ul {
	list-style-type: none;
	padding: 0;
}
nav ul a {
	text-decoration: none;
}

artikle{
margin-left: 170px;
berder-left: 1px colid gray;
padding :1px;   
overflow; hidden;
}

</style>
</head>
<body>

<div class-"container">
<header> 
<h1>Operasi CRUD</h1>
</header>

<nav>
	<ul>
	<li><b>MENU</b></li>
	<li><a href ="#">Menu 1</a></li>
	<li><a href ="#">Menu 2</a></li>
	<li><a href ="#">Menu 3</a></li>

	</ul>
</nav>

	</nav>
	<article>
		<table border="1" width="75%" align="center">
			<tr>
				<th>Tambah Data</th>
			</tr>
			<tr>
				<td>No</td>
				<td>:</td>
				<td><input type="text" name="no" size="70"></input></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="70"></input></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="70"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="70"></input></td>
			</tr>
			<tr>
				<td>Aksi</td>
				<td>:</td>
				<td><input type="text" name="aksi" size="70"></input></td>
			</tr>
			<tr>

				<td colspan="3"><input type="button" value="SIMPAN"></input><input type="button" value="BATAL"></input><a</td>
			</tr>
		</table>
	
	</article>
<script>
	function edit_id(id){
		(confirm('sure to edit?')){
			window.location.href = 'edit.php?edit_id=' id;
		}
		}
		function delete_id(id){
		(confirm('sure to delete?')){
			window.location.href = 'delete.php?delete_id=' id;
		}
		}
	
	}
<footer>NendiNH 14.111.224</footer>
</div>
</body>
</html>
