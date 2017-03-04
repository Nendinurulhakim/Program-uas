@extends('templates.index')
@section('content')
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
	<form  action="{{route('mahasiswa.update', $mahasiswa->id)}}" method="post">
    <input name="_method" type="hidden" value="PATCH">
					{{csrf_field()}}
		<table border="1" width="70%" align="center">
			<tr> 
				<th>Tambah Data</th>
			</tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="Nama" class="form-control" placeholder="Nama" value="{{$mahasiswa->Nama}}" size="70"></input></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="Nim"class="form-control" placeholder="Nim" value="{{$mahasiswa->Nim}}" size="70"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="Alamat" class="form-control" placeholder="Alamat" value="{{$mahasiswa->Alamat}}" size="70"></input></td>
			</tr>
			<tr>

				<td colspan="3"><input type="submit" value="UPDATE"></input><a href="{{URL('halamanawal')}}"><input type="button" value="BATAL"></input></a></td>
			</tr>
		</table>
		</form>
	</article>
@stop









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