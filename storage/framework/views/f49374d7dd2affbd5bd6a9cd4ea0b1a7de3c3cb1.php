<?php $__env->startSection('title'); ?>
    Sona | Rooms
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    Website for reservation hotel rooms - Information about rooms and managing rooms
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    admin panel, rooms
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-body">
                        <div class="container mt-3">
                            <div class="row d-flex justify-content-center align-content-between col-lg-12">
                                <div class="col-lg-7 offset-lg-1">
                                    <form action="<?php echo e(route('rooms-manage.store')); ?>" method="POST" class="contact-form" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row d-flex justify-content-center align-content-between">
                                            <div class="col-sm-10   mb-3 d-flex justify-content-center">
                                                <h2 class="mb-0">INSERT ROOM</h2>
                                            </div>
                                            <div class="col-sm-12 d-flex">
                                                <div class="col-sm-6 mt-3">
                                                    <p class="text-black font-weight-bold">ROOM NAME</p>
                                                    <input type="text" class="form-control adminForm" name="name" id="tbFirstNameUpdate">
                                                </div>
                                                <div class="col-sm-6 mt-3">
                                                    <p class="text-black font-weight-bold">SIZE OF ROOM</p>
                                                    <input type="number" min="10" max="100" class="form-control adminForm" name="size"  id="tbUpdateCapacity">
                                                </div>
                                            </div>
                                            <div class="form-group purple-border col-sm-11 mt-2">
                                                <p class="text-black font-weight-bold">DESCRIPTION</p>
                                                <textarea class="form-control adminForm" name="description"  id="taDescriptionUpdate"></textarea>
                                            </div>
                                            <div class="col-sm-12 d-flex">
                                                <div class="form-group col-sm-6 mb-2 mt-2">
                                                    <p class="text-black font-weight-bold">PRICE</p>
                                                    <select class="form-control adminFormWhite" id="ddlRolesUserUpdate" name="price">
                                                        <option value="0" selected disabled>Choose price:</option>
                                                        <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($p->id); ?>"><?php echo e($p->price); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-6 mb-2 mt-2">
                                                    <p class="text-black font-weight-bold">TYPES</p>
                                                    <select class="form-control adminFormWhite" id="ddlRolesUserUpdate" name="type">
                                                        <option value="0" selected disabled>Choose type:</option>
                                                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($t->id); ?>"><?php echo e($t->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>


                                            </div>

                                            <div class="col-sm-12 d-flex mb-3">
                                                <div class="col-sm-6 mt-3">
                                                    <p class="text-black font-weight-bold">QUANTITY ROOMS</p>
                                                    <input type="number" min="0" max="10" class="form-control adminForm" name="quantity"  id="quantity">
                                                </div>
                                                <div class="col-sm-6 mt-3">
                                                    <p class="text-black font-weight-bold">IMAGE</p>
                                                    <input type="file"  class="form-control adminForm" name="image"  id="image">

                                                </div>

                                            </div>
                                            <div class="col-sm-12 d-flex flex-column jusitfy-content-center align-items-center">
                                                <p class="text-black font-weight-bold">SERVICES</p> <br>
                                                <div class="form-check ml-5">
                                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <input type="checkbox" class="form-check-input" id="service<?php echo e($s->id); ?>" name="service[]" value="<?php echo e($s->id); ?>">
                                                        <label class="form-check-label" for="service<?php echo e($s->id); ?>"><?php echo e($s->name); ?></label> <br>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>

                                            </div>

                                            <div class="col-sm-12 mb-2 mt-4 d-flex justify-content-center">

                                                    <input type="submit" class="btn btn-warning btnSubmitA" name="btnUpdateUser" id="btnUpdateUser" value="INSERT ROOM" />
                                                    <a href="<?php echo e(route('rooms-manage.index')); ?>" class="btn btn-dark ml-2"><i class="fa fa-arrow-left"></i>  Back to list of rooms</a>

                                            </div>
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
                                    <?php if(session()->has('warningInsertRoom')): ?>
                                        <div class="alert alert-warning">
                                            <h3><?php echo e(session('warningInsertRoom')); ?></h3>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(session()->has('errorInsertRoom')): ?>
                                        <div class="alert alert-danger">
                                            <h3><?php echo e(session('errorInsertRoom')); ?></h3>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/admin/pages/rooms/add.blade.php ENDPATH**/ ?>