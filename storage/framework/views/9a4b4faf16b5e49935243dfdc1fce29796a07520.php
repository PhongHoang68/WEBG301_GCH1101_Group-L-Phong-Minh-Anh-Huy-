

<?php $__env->startSection('main'); ?>

    <div class="container thumbs">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" style="margin-top: 50%">
                    <a class="home-product-item" href="<?php echo e(route('clientView.showcategorydetail', ['id' => $c->id])); ?>">
                        <img src="<?php echo e(asset('image/'. $c->image)); ?>" alt="" class="img-circle">
                        <div class="caption">
                            <h3 class="text-center"><?php echo e($c->name); ?></h3>

                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!-- End Thumbnails -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.clientMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Last-Zoo\resources\views/Zoo/ClientView/viewCategory.blade.php ENDPATH**/ ?>