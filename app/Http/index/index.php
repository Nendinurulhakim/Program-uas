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
		
		<td>
				<th><a href="Tambah.php"><button type="submit">TAMBAH</button></a></th>
			</td>
			<td>
				<th><a href="edit.php"><button type="submit">EDIT</button></a></th>
			</td>
			<tr>
				<td align=center>Kode barang</td>
				<td align=center>Nama Barang</td>
				<td align=center>Stok</td>
				<td align=center>Harga</td>
				<td align=center>Edit</td>
				<td align=center>Hapus</td>
			</tr>
			
			<?php
  $$ql_query = "SELECT FROM dbgrosir";
  $result_set = "mysql_query($sql_query)";
  if (mysql_num_rows($result_set)>0);{
  while ($row = mysql_fletch_row($result_set)){
  ?>
  <tr>
     <td><?php echo $row[1];?></td>
	 <td><?php echo $row[2];?></td>
	 <td><?php echo $row[3];?></td>
	 <td><a href = "javascript : edit_id('<?php  echo $row[0]; ?>')
	 ">EDIT</a></td>
	  <td><a href = "javascript : edit_id('<?php  echo $row[0]; ?>')
	 ">DELETE</a></td>
     </tr>
     <?php  
		}
	 }
	 else {
	 ?>
	 <tr> 
	 <td colspan = "5")data tidak ditemukan.<td>
	 </tr>
	<?php }
	?>
		</table>
	</article>
	

	
<footer>NendiNH 14.111.224</footer>
</div>
</body>
</html>
	