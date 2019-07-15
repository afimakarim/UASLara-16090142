<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/templateUser.blade.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Framework Programming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/bootstrap_4_3_1/css/bootstrap.min.css')); ?>">-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/style.css')); ?>">
    <script type="text/javascript" src="<?php echo e(asset('public/js/html5shiv.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/respond.min.js')); ?>"></script>
</head>
<body style="background-image:url(<?php echo e(asset   ('public/img/wall.jpg')); ?>);">
        
        <?php echo $__env->make('navbarUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->yieldContent('main'); ?>
        
        <?php echo $__env->yieldContent('footer'); ?>
        <footer class="text-center color-primary">
<script>
$(document).ready(function () {
// create a tree
$("#tree-data").jOrgChart({
    chartElement: $("#tree-view"), 
    nodeClicked: nodeClicked
});
// lighting a node in the selection
function nodeClicked(node, type) {
    node = node || $(this);
    $('.jOrgChart .selected').removeClass('selected');
        node.addClass('selected');
    }
});
</script>     
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo e(asset('public/js/jquery_4_3_1/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/js/jquery_3_3_1.min.js')); ?>"></script>
<script src="datepicker/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>
</body>
</html>