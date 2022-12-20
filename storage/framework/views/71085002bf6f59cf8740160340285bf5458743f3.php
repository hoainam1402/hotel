<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('admin.fixed.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="">

    <div class="wrapper">

        <?php echo $__env->make('admin.fixed.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="main-panel">

            <!-- header part -->
                <?php echo $__env->make('admin.fixed.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--// header part -->


        <?php echo $__env->yieldContent('content'); ?>

       <!-- footer part -->
       <?php echo $__env->make('admin.fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <!--// footer part -->
        </div>

    </div>

    <?php echo $__env->make('admin.fixed.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('adminScripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/layouts/admin.blade.php ENDPATH**/ ?>