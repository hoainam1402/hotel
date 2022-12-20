<header class="header-section border fixed-top bg-light navigation">
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tn-left">
                        <li><i class="fa fa-phone"></i> (12) 345 67890</li>
                        <li><i class="fa fa-envelope"></i> info.sona@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tn-right">
                        <div class="top-social">
                            <?php $__currentLoopData = $socialMedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($social->path); ?>"><i class="<?php echo e($social->icon); ?>"></i></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <a href="<?php echo e(route('rooms.index')); ?>" class="bk-btn">Booking Now</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="<?php echo e(route('home')); ?>">
                            <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="nav-menu">
                        <nav class="mainmenu">
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
                                        <div class="float-right ml-4">
                                            <li>
                                                <img width="30" height="30" src="<?php echo e(asset('assets/img/profileUser.png')); ?>" alt="profilePhoto" />
                                            </li>
                                            <li><a class="font-weight-bold text-black" href = "<?php echo e(route("profile")); ?>"> <?php echo e((session()->get("user")->firstname) ." ". session()->get("user")->lastname); ?>  </a></li>
                                        </div>
                                    <?php endif; ?>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/frontend/fixed/header.blade.php ENDPATH**/ ?>