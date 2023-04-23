<?php if(\Illuminate\Support\Facades\Session::get('msg') != null): ?>
    
    <div style="font-size: x-large;">
        <?php echo e(\Illuminate\Support\Facades\Session::get('msg')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Last-Zoo\resources\views/Zoo/CustomerView/sessionmessage.blade.php ENDPATH**/ ?>