<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="konten-1">
        <h1>Assignment II Web Programing LA01</h1>
        <h3>by Leonardo Caprio</h3>
    </div>
    <div class="konten">
        <div>
            <img src=<?php echo e($picture); ?> alt="" width="200">
        </div>
        <div>
            <h4>Name: <?php echo e($name); ?></h4>
            <h4>NIM: <?php echo e($nim); ?></h4>
            <h4>Class: <?php echo e($class); ?></h4>
            <h4>Email: <?php echo e($email); ?></h4>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BINUS\Web Prog Lec Semester 5\Pertemuan 5\2440015322_Assignment II Web Programming\2440015322_Leonardo Caprio\resources\views/home.blade.php ENDPATH**/ ?>