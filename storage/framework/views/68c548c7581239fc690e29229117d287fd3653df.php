<?php $__env->startSection('title'); ?>
    Sona | Prices
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    Website for reservation hotel rooms - Information about prices
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    admin panel, prices
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h5 class="card-category">Total Shipments</h5>
                                <h2 class="card-title">Prices Management</h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group btn-group-toggle float-right">
                                    <a href="#price" id="btnShowFormAddPrice" class="btn btn-sm btn-primary btn-simple active">ADD NEW PRICE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive menu_table" id="roomPriceTable">
                            
                            <table class="table tablesorter">
                                <thead class=" text-primary">
                                <tr>
                                    <th class="text-center">
                                        #ID
                                    </th>
                                    <th class="text-center">
                                        VALUE OF PRICE
                                    </th>
                                    <th class="text-center">
                                        EDIT
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo e($p->id); ?>

                                        </td>
                                        <td class="text-center">
                                            <?php echo e($p->price); ?>

                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo e(route('prices.edit', $p->id )); ?>" class="btnEditRoomService" data-id="<?php echo e($p->id); ?>">
                                                <i class="fas fa-edit adminIcons"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <?php echo e($prices->links()); ?>


                        </div>
                        <?php if(session()->has('successUpdatePrice')): ?>
                            <div class="alert alert-success">
                                <h3><?php echo e(session('successUpdatePrice')); ?></h3>
                            </div>
                        <?php endif; ?>
                        <div class="col-lg-12 d-flex justify-content-between">
                            <?php echo $__env->make('admin.pages.prices.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('adminScripts'); ?>
    <script src="<?php echo e(asset('assets/js/myScripts/adminScripts/admin_prices.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/admin/pages/prices/index.blade.php ENDPATH**/ ?>