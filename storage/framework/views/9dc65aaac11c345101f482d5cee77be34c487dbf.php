

<?php $__env->startSection('main'); ?>
    <div class="container">
        <h1 class="display-4 edit-col-ad" style="color: rebeccapurple; text-align: center; margin-top: 10%">Categories Details</h1>
        <?php echo $__env->make('Zoo.ClientView.categoryDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.clientMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Last-Zoo\resources\views/Zoo/ClientView/showcategorydetail.blade.php ENDPATH**/ ?>