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
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h2 class="card-title">Room Management</h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">

                                </div>
                                <a href="<?php echo e(route('rooms-manage.create')); ?>" class="btn btn-sm btn-primary btn-simple ">ADD NEW ROOM</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if(session()->has('successInsertRoom')): ?>
                            <div class="alert alert-success">
                                <h3><?php echo e(session('successInsertRoom')); ?></h3>
                            </div>
                        <?php endif; ?>
                            <?php if(session()->has('successUpdateRoom')): ?>
                                <div class="alert alert-success">
                                    <h3><?php echo e(session('successUpdateRoom')); ?></h3>
                                </div>
                            <?php endif; ?>
                            <?php if(session()->has('errorDeleteRoom')): ?>
                                <div class="alert alert-info">
                                    <h3><?php echo e(session('errorDeleteRoom')); ?></h3>
                                </div>
                            <?php endif; ?>
                            <?php if(session()->has('warningDeleteRoom')): ?>
                                <div class="alert alert-warning">
                                    <h3><?php echo e(session('warningDeleteRoom')); ?></h3>
                                </div>
                            <?php endif; ?>
                            <?php if(session()->has('successDeleteRoom')): ?>
                                <div class="alert alert-success">
                                    <h3><?php echo e(session('successDeleteRoom')); ?></h3>
                                </div>
                            <?php endif; ?>
                        <div class="table-responsive menu_table" id="roomTable">
                            
                            <table class="table tablesorter">
                                <thead class=" text-primary">
                                <tr>
                                    <th class="text-center">
                                        #ID
                                    </th>
                                    <th class="text-center">
                                        COVER
                                    </th>
                                    <th class="text-center">
                                        NAME OF ROOM
                                    </th>
                                    <th class="text-center">
                                        TYPE
                                    </th>
                                    <th class="text-center">
                                        PRICE/NIGHT
                                    </th>
                                    <th class="text-center">
                                        NO.REVIEWS
                                    </th>
                                    <th class="text-center">
                                       RATING
                                    </th>
                                    <th class="text-center">
                                        AVAILABLE
                                    </th>
                                    <th class="text-center">
                                        ACTIONS
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php

                                        $total = 0;
                                    foreach ($r->ratingRooms  as $rate){
                                        $total += $rate->value;

                                    }
                                     $avgRate = 0;
                                    if(count($r->ratingRooms)){
                                        $avgRate =  $total/count($r->ratingRooms);
                                    }

                                    ?>

                                    <tr>
                                        <td class="text-center">
                                            <?php echo e($r->id); ?>

                                        </td>
                                        <td class="text-center">
                                            <img width="120" height="120" src="<?php echo e(asset('/storage/assets/img/room/'.$r->image->path)); ?>" alt="<?php echo e($r->name); ?>" />
                                        </td>
                                        <td class="text-center">
                                            <?php echo e($r->roomName); ?>

                                        </td>
                                        <td class="text-center">
                                            <?php echo e($r->typeName); ?> room
                                        </td>
                                        <td class="text-center">
                                            <?php echo e($r->price); ?>

                                        </td>
                                        <td class="text-center">
                                            <i class="far fa-comments"></i> <?php echo e(count($r->reviews)); ?>

                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-star"></i> <?php echo e(round($avgRate)); ?>

                                        </td>
                                        <td class="text-center">
                                            <?php echo e($r->availabilityType->quantity); ?>

                                        </td>

                                        <td class="text-center">
                                            <a href="<?php echo e(route('rooms-manage.edit', $r->id )); ?>" class="btnEditUser" data-id="<?php echo e($r->id); ?>">
                                                <i class="fas fa-edit adminIcons"></i>
                                            </a>
                                            <a href="<?php echo e(route('rooms-manage.show', $r->id )); ?>" class="btnViewUser" data-id="<?php echo e($r->id); ?>"> <i class="fas fa-info-circle adminIcons"></i> </a>
                                            <form method="POST" action="<?php echo e(route('rooms-manage.destroy', $r->id )); ?>">
                                                <?php echo method_field("DELETE"); ?>
                                                <?php echo csrf_field(); ?>
                                                <button class="btn"><i class="fas fa-trash-alt adminIcons"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <?php echo e($rooms->links()); ?>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/admin/pages/rooms/index.blade.php ENDPATH**/ ?>