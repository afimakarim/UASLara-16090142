<?php /* C:\xampp\htdocs\laravel\private\resources\views/pages/karyawan.blade.php */ ?>
<!-- 
<div id='karyawan'>
    <h1> Passing Data Controller<h1>
    <p> Passing Data Controller ke View Laravel</p>
</div> 
-->

<p> Nama : <?php echo e($nama); ?> </p>

<p> Mengampu Mata Kuliah </p>
<ul>
    <?php $__currentLoopData = $matkul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <li>  <?php echo e($m); ?> </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>