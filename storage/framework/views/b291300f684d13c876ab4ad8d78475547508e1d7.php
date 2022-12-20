<?php $__env->startSection('token'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>

<form action="#" class="fn-form">
    <?php echo csrf_field(); ?>
    <input type="email" placeholder="Email" id="emailNews" />
    <p class="text-danger msgError"></p>
    <button type="submit" id="btnSendNews"><i class="fa fa-send"></i></button>
</form>


<?php if(session()->has('successSendNews')): ?>
    <div class="alert alert-success">
        <h3><?php echo e(session('successSendNews')); ?></h3>
    </div>
<?php endif; ?>
<?php if(session()->has('warningSendNews')): ?>
    <div class="alert alert-warning">
        <h3><?php echo e(session('warningSendNews')); ?></h3>
    </div>
<?php endif; ?>
<?php if(session()->has('errorSendNews')): ?>
    <div class="alert alert-danger">
        <h3><?php echo e(session('errorSendNews')); ?></h3>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/frontend/partials/newsletter-form.blade.php ENDPATH**/ ?>