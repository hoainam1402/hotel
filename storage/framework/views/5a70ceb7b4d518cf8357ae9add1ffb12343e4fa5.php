<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->

    <div class="sidebar-wrapper">








      <ul class="nav">
            <?php $__currentLoopData = $adminMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="
                   <?php if(request()-> routeIs($link->url)): ?>
                        active
                    <?php endif; ?> ">
                    <?php if(session()->has("user")): ?>
                        <a href="<?php echo e(route($link->url)); ?>">
                            <i class="tim-icons <?php echo e($link->icon); ?>"></i>
                            <p><?php echo e($link->name); ?></p>
                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  </div>

<?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/admin/fixed/nav.blade.php ENDPATH**/ ?>