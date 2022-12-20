
<!--region TEMPLATES CORE JS FILES AND PLUGINS-->
<script src="<?php echo e(asset('assets/js/core/jquery.min.js')); ?>"></script>
  <!--   Core JS Files   -->
  <script src="<?php echo e(asset('assets/js/core/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/core/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')); ?>"></script>
  <!-- Chart JS -->
  <script src="<?php echo e(asset('assets/js/plugins/chartjs.min.js')); ?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo e(asset('assets/js/plugins/bootstrap-notify.js')); ?>"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo e(asset('assets/js/black-dashboard.min.js?v=1.0.0')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
  <!--endregion-->

  <!--region MY SCRIPTS-->
  <script>
      const token = $('meta[name="csrf-token"]').attr('content');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': token
          }
      });
  </script>
  <script type="text/javascript">
      const baseUrlAdmin = "<?php echo e(url('/admin')); ?>";
      const publicFolder = "<?php echo e(asset('/')); ?>";
  </script>
  <!--endregion-->


<!--region UNNECESSARY SCRIPTS-->
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->

  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  


















<!--endregion-->
<?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/admin/fixed/scripts.blade.php ENDPATH**/ ?>