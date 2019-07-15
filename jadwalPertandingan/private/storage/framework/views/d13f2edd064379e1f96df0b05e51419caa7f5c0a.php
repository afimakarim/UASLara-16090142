<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pagesUser/home.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<div id="home">
<div id="wrapper">
        <div class="row justify-content-md-center">
            <div class="col col-sm-12 color-primary kotak" >
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 img-carousel" src="<?php echo e(asset   ('public/img/futsal.jpg')); ?>" style="height:500px; width:auto;"alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-carousel" src="<?php echo e(asset   ('public/img/futsal2.jpg')); ?>" style="height:500px; width:auto;"alt="First slide"alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-carousel" src="<?php echo e(asset   ('public/img/futsal3.jpg')); ?>" style="height:500px; width:auto;"alt="First slide"alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
            <h1 class="text-center">Dopins Cup</h2>
            <br >
            <br >
            <h3 class="text-center">
            Ajang Tornament Dalam Rangka Memperingati Ulang Tahun  Kota Tegal Ke-439<br>
            Bermain Sportif dan Tunjukan Kekompakkan dan Skillmu di Sini<br>
                </h3>
        </div>

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('footer'); ?>
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templateuser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>