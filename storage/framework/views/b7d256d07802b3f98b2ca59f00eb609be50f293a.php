<?php $__env->startSection('title'); ?>
    Rooms
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    Search for your favourite rooms and rmake reservation by viewing the details of room. But first you will need to login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    search, filter by type, rooms, types, seervices
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section odvoji">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="./home.html">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container-fluid d-flex justify-content-between flex-wrap-reverse">
            <div class="row col-lg-9 col-md-12 col-sm-12" id="rooms">



            </div>


            <div class="row col-lg-3 col-md-12 col-sm-12 d-flex flex-column  text-center mb-5">
                <h3>FIND YOUR SPECIAL ROOM BY SORT AND FILTER IT</h3> <br>
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Search room">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" disabled>
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <select id="sort" class="form-control">
                            <option value="0" selected disabled>Sort by:</option>
                            <option value="Name ASC">Name ASC</option>
                            <option value="Name DESC">Name DESC</option>
                            <option value="Price ASC">Price ASC</option>
                            <option value="Price DESC">Price DESC</option>
                        </select>
                    </div>
                    <br>
                    <h4>Services:</h4>
                    <div class="form-check">
                        <label class="form-check-label">
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="checkbox" name="services[]" class="form-check-input services" id="<?php echo e($service->id); ?>" value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?> <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </label>
                    </div>
                    <br><br>
                    <h4>Types of room:</h4>
                    <div class="form-check">
                        <label class="form-check-label">
                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="checkbox" class="form-check-input types" name="types[]" id="<?php echo e($type->id); ?>" value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?>  <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </label>
                    </div>
                    <br>
                    
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input freeRooms" data-free="tru" name="freeRooms" id="freeRooms"> SHOW AVAILABLE ROOMS <br>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script src="<?php echo e(asset('assets/js/myScripts/rooms.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/frontend/pages/rooms/index.blade.php ENDPATH**/ ?>