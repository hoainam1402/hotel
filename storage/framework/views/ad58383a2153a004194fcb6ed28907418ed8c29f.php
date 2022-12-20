<?php $__env->startSection('title'); ?> Sona | Home <?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?> Hotel Sona, the most luxuriest hotel in the world@endsection

<?php $__env->startSection('keywords'); ?> hotel, services, luxury@endsection


<?php $__env->startSection('content'); ?>

    <!-- Hero Section Begin -->
    <section class="hero-section odvoji">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>SonaHotel A Luxury Hotel</h1>
                        <p>Here are the best hotel booking sites, including recommendations for international
                            travel and for finding low-priced hotel rooms.</p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="<?php echo e(asset('assets/img/hero/hero-1.jpg')); ?>"></div>
            <div class="hs-item set-bg" data-setbg="<?php echo e(asset('assets/img/hero/hero-2.jpg')); ?>"></div>
            <div class="hs-item set-bg" data-setbg="<?php echo e(asset('assets/img/hero/hero-3.jpg')); ?>"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Intercontinental LA <br />Westlake Hotel</h2>
                        </div>
                        <p class="f-para">Sona.com is a leading online accommodation site. We’re passionate about travel. Every day, we inspire and reach millions of travelers across 90 local websites in 41
                            languages.</p>
                        <p class="s-para">So when it comes to booking the perfect hotel, vacation rental, resort, apartment, guest house, or tree house, we’ve got you covered.</p>
                        <a href="<?php echo e(route('about')); ?>" class="primary-btn about-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <img src="<?php echo e(asset('assets/img/about/about_1.jpg')); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $hotelServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item rounded">
                            <img width="150" height="100" src="<?php echo e(asset('/storage/assets/img/hotel-services/'.$hs->img)); ?>" alt="<?php echo e($hs->title); ?>"/>
                            <h4><?php echo e($hs->title); ?></h4>
                            <p><?php echo e($hs->description); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">

                        <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="ts-item">
                                <p><?php echo e($t->description); ?></p>
                                <div class="ti-author">
                                    <h5> - <?php echo e($t->user->firstname); ?> <?php echo e($t->user->lastname); ?> - </h5>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/frontend/pages/main/home.blade.php ENDPATH**/ ?>