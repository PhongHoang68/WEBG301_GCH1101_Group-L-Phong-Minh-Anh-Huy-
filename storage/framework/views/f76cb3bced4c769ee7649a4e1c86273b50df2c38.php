
<?php if(\Illuminate\Support\Facades\Session::get('msg') != null): ?>

    <div style="font-size: x-large; text-align: center; margin-top: 2%; color: red; font-weight: bold">
<?php echo e(\Illuminate\Support\Facades\Session::get('msg')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Last-Zoo\resources\views/Zoo/ManualAuth/sessionmessage.blade.php ENDPATH**/ ?>