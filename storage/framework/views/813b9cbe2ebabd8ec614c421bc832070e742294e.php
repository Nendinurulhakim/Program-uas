<?php $__env->startSection('content'); ?>
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
			<?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 	
		<tr>
				<td align=center> <?php echo e($mhs -> Nim); ?></td>
				<td align=center> <?php echo e($mhs -> Nama); ?></td>
				<td align=center> <?php echo e($mhs -> Alamat); ?></td>
				<td><form method="POST"  action="<?php echo e(route('mahasiswa.destroy', $mhs->id)); ?>" >
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
		                            <a href="<?php echo e(route('mahasiswa.edit', $mhs->id)); ?>" class="btn btn-primary"><input type="button" value="Edit"> </a>
		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
		                        </form></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
		
		
		
		<td>
		<td colspan="3" align = "center"><a href="<?php echo e(URL('tambah')); ?>"><button type="button">Tambah</button></a> <colspan="3" align="right"><a href="<?php echo e(URL :: to('/')); ?>"><button type="button">LOGOUT</button>
		<tr>
		</table>
	</article>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>