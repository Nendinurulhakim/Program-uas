<!DOCTYPE html>
<html>
<head> <title>Latihan Blade Tamplates</title>
</head>

<link = rel="stylesheet" href="css/styles.css" type="text/css">

<body>
<?php echo $__env->make('templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
<html>