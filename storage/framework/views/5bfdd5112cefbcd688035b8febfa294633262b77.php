

<?php $__env->startSection('main'); ?>
    <div class="container">
        <div style="color: red; text-align: center; padding-top: 7%">
            <?php echo $__env->make('Zoo.CustomerView.sessionmessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="<?php echo e(route('clientView.storeC')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('Zoo.ClientView.customerFields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.clientMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Last-Zoo\resources\views/Zoo/ClientView/newC.blade.php ENDPATH**/ ?>