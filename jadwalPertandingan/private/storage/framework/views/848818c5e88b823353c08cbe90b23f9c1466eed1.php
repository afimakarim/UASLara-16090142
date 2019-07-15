<?php /* C:\xampp\htdocs\laravel\private\resources\views/template.blade.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Framework Programming</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/bootstrap_4_3_1/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/style.css')); ?>">
    <script type="text/javascript" src="<?php echo e(asset('public/js/html5shiv.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/respond.min.js')); ?>"></script>
</head>
<body>
    <div class="container">
        
        <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->yieldContent('main'); ?>
        
        </div>
        
        <?php echo $__env->yieldContent('footer'); ?>

<script type="text/javascript" src="<?php echo e(asset('public/js/jquery_4_3_1/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/js/jquery_3_3_1.min.js')); ?>"></script>
</body>
</html>