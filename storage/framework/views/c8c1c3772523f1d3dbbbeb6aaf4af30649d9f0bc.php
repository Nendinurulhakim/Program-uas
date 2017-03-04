<?php $__env->startSection('content'); ?>
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

				<td colspan="3"><input type="button" value="UPDATE"></input><a href="<?php echo e(URL('halamanawal')); ?>"><input type="button" value="BATAL"></input></a></td>
			</tr>
		</table>
	</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>