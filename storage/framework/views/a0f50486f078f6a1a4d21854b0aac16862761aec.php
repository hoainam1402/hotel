<?php $__env->startSection('title'); ?>
    Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    Login in Sona hotel in order to make reservation for your favourite room
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    sona, login, hotel, services, room
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <!-- Login Section Begin -->
    <section class="contact-section spad odvoji_login">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-content-between col-lg-12">
                <div class="col-lg-7 offset-lg-1">

                    <form action="<?php echo e(route('login.store')); ?>" method="POST" class="contact-form">
                        <?php echo csrf_field(); ?>
                        <div class="row d-flex justify-content-center align-content-between">
                            <div class="col-sm-10   mb-3 d-flex justify-content-center">
                                <h2>Login</h2>
                            </div>
                            <div class=" col-sm-10 mt-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                            </div>
                            <div class="col-sm-10 ">
                                <input type="password" class="form-control" name="password"  id="password" placeholder="Your Password">
                            </div>
                            <div class="col-sm-10 mb-2 d-flex justify-content-center">
                                <button type="submit" name="btnLogin" id="btnLogin">Login</button>
                            </div>
                            <p class="mt-3"> If you don't have account please <a href="<?php echo e(route("register.store")); ?>">Register</a> first </p>
                        </div>
                    </form>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if(session()->has('warning')): ?>
                        <div class="alert alert-warning">
                            <h3><?php echo e(session('warning')); ?></h3>
                        </div>
                    <?php endif; ?>
                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success">
                            <h3><?php echo e(session('success')); ?></h3>
                        </div>
                    <?php endif; ?>
                    <?php if(session()->has('error')): ?>
                        <div class="alert alert-success">
                            <h3><?php echo e(session('error')); ?></h3>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/frontend/pages/main/login.blade.php ENDPATH**/ ?>