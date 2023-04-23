

<?php $__env->startSection('main'); ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Sorry, This function is in the process of being updated, please come back later!</h1>
            <p class="lead">Thanks you so much!</p>
            <img src="/image/camon.png" alt="Thanksyou">
            <a href="<?php echo e(route('clientView.index')); ?>" >
                <button style="background-color: yellow; float: right; margin-top: 2%">
                    Back to Home
                </button>
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('masters.clientMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Last-Zoo\resources\views/Zoo/ClientView/model.blade.php ENDPATH**/ ?>