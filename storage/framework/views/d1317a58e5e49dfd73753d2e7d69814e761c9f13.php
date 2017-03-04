<?php $__env->startSection('content'); ?>
	<article>
		<table border="1" width="75%" align="center">
			<td>
				<th><a href="<?php echo e(URL('tambah')); ?>"><button type="submit">+ TAMBAH</button></a></th>
			</td>
				<th><a href="<?php echo e(URL('edit')); ?>"><button type="submit">+ EDIT</button></a></th>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Nim</td>
				<td>Alamat</td>
				<td>Aksi</td>
			</tr>
		</table>
		<td>
		<td colspan="3" align="right"><a hreff="<?php echo e(URL :: to('/')); ?>"><button type="submit">KEMBALI</button>
		<tr>
	</article>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>