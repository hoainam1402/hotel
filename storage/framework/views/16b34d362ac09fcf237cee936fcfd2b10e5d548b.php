<div class="offcanvas-menu-overlay"></div>

<div class="canvas-open">
    <i class="icon_menu"></i>
</div>

<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="icon_close"></i>
    </div>
         <div class="logo mb-3">
             <a href="<?php echo e(route('home')); ?>">
                 <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="">
             </a>
         </div>

    <nav class="mainmenu mobile-menu">
        <ul>
            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="
                    <?php if(request()-> routeIs($link->url)): ?>
                    active
                    <?php endif; ?> ">
                    <?php if(session()->has("user") && $link->name != 'Login' && $link->name != 'Register'): ?>
                        <a href="<?php echo e(route($link->url)); ?>"><?php echo e($link->name); ?></a>
                    <?php elseif(!session()->has("user")): ?>
                        <a href="<?php echo e(route($link->url)); ?>"><?php echo e($link->name); ?></a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(session()->has("user")): ?>
                <li><a class="text-secondary" href="<?php echo e(route("logoutUser")); ?>" id="logOut">Logout</a></li>
                    <li class="d-flex align-items-center">
                        <img width="28" height="28" src="<?php echo e(asset('assets/img/profileUser.png')); ?>" alt="profilePhoto" class="float-left"/>
                        <a class="font-weight-bold text-black" href = "<?php echo e(route("profile")); ?>"> <?php echo e((session()->get("user")->firstname) ." ". session()->get("user")->lastname); ?>  </a>
                    </li>
            <?php endif; ?>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="top-social">
        <?php $__currentLoopData = $socialMedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($social->path); ?>"><i class="<?php echo e($social->icon); ?>"></i></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    <ul class="top-widget">
        <li><i class="fa fa-phone"></i> (+381) 345 67890</li>
        <li><i class="fa fa-envelope"></i> info.sona@gmail.com</li>
    </ul>
    <div class="header-configure-area mt-2">
        <a href="<?php echo e(route('rooms.index')); ?>" class="bk-btn">Booking Now</a>
    </div>
</div>
<?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/frontend/fixed/offcanvas.blade.php ENDPATH**/ ?>