<?php $__env->startSection('content'); ?>
<form method = "post">
<table width="60% " align="center">

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
				<td><input type="text "name=username"
			size="80"></td>
					</tr>
					<tr>
					<td colspan="3" align="center"><a href="<?php echo e(URL('halamanawal')); ?>"><button type="button">login</button></a><input type="button" value="Batal"></input></td>
					</tr>
</table>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>