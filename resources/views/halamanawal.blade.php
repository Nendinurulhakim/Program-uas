@extends('templates.index')
@section('content')
	<article>
			<form method ="post">
		<table border="1" width="70%" align="center">
			<tr>
				<nav>
	<ul>
	<li><b>MENU</b></li>
	<li><a href ='#'>Menu 1</a></li>
	<li><a href ='#'>Menu 2</a></li>
	<li><a href ='#'>Menu 3</a></li>

	</u70
	</nav>

	<article>
			
	
				<td align="center">Nim</td>
				<td align="center">Nama</td>
				<td align="center">Alamat</td>
				<td align="center">Opsi</td>
			</tr>
			@foreach ($mahasiswa as $mhs ) 	
		<tr>
				<td align=center> {{ $mhs -> Nim}}</td>
				<td align=center> {{ $mhs -> Nama}}</td>
				<td align=center> {{ $mhs -> Alamat}}</td>
				<td><form method="POST"  action="{{ route('mahasiswa.destroy', $mhs->id) }}" >
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{route('mahasiswa.edit', $mhs->id)}}" class="btn btn-primary"><input type="button" value="Edit"> </a>
		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
		                        </form></td>
        </tr>
        @endforeach
		
		
		
		
		<td>
		<td colspan="3" align = "center"><a href="{{URL('tambah')}}"><button type="button">Tambah</button></a> <colspan="3" align="right"><a href="{{URL :: to('/')}}"><button type="button">LOGOUT</button>
		<tr>
		</table>
	</article>
@stop 