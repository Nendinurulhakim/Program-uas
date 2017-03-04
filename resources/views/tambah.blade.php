@extends('templates.index')
@section('content')
</nav>

	</nav>
	<article>
		<form  action="{{url('add_items/action')}}" method="post" enctype="multipart/form-data"  >
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<table border="1" width="40%" align="center">
			<tr>
				<th>Tambah</th>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="Nama" size="70"></input></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="Nim" size="70"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="Alamat" size="70"></input></td>
			</tr>
			<tr>

				<td colspan="3"><input type="submit" value="SIMPAN"></input><a href="{{URL('halamanawal')}}"><input type="button" value="BATAL"></input></a></td>
			</tr>
		</table>
		</form>
	</article>s
@stop
