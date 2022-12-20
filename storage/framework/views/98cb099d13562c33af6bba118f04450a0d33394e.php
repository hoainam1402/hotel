<!DOCTYPE html>
<html lang="en">

    <?php echo $__env->make('frontend.fixed.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

     <!-- Page Preloder -->
     <?php echo $__env->make('frontend.fixed.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


      <!-- Offcanvas Menu Section Begin -->
      <?php echo $__env->make('frontend.fixed.offcanvas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Offcanvas Menu Section End -->


    <!-- Header Section Begin -->
      <?php echo $__env->make('frontend.fixed.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Header End -->



    <!--Content -->
    <?php echo $__env->yieldContent('content'); ?>

   <!-- Footer Section Begin -->
  <?php echo $__env->make('frontend.fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- Footer Section End -->

   <!-- Search model Begin -->
   <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

  <!-- Js Plugins -->
  <?php echo $__env->make('frontend.fixed.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('javascript'); ?>
</body>
</html>
<?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/layouts/template.blade.php ENDPATH**/ ?>