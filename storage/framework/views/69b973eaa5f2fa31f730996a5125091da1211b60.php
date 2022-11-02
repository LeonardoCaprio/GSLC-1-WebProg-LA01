<?php $__env->startSection('title', 'Course'); ?>

<?php $__env->startSection('content'); ?>
<table class="table">
    <thead class="nav-table">
      <tr>
        <th scope="col">Course Code</th>
        <th scope="col">Course Name</th>
        <th scope="col">Class</th>
      </tr>
    </thead>

    <?php $__currentLoopData = $listcourse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody class="bodytable">
        <tr>
          <td><?php echo e($course["Course Code"]); ?></td>
          <td><?php echo e($course["Course"]); ?></td>
          <td><?php echo e($course["Class"]); ?></td>
        </tr>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BINUS\Web Prog Lec Semester 5\Pertemuan 5\2440015322_Assignment II Web Programming\2440015322_Leonardo Caprio\resources\views/course.blade.php ENDPATH**/ ?>