<?php $__env->startSection('title'); ?>
    Sona | Menus
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    Website for reservation hotel rooms - Information about navigation menu links
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    admin panel, navigation manu links
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h2 class="card-title font-weight-bold text-uppercase ">Menu Links</h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                    <a href="#navlink" id="btnShowFormAddNavlink" class="btn btn-sm btn-primary btn-simple active">ADD MENU LINK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive menu_table" id="menuTable">
                            
                            <table class="table tablesorter">
                                <thead class=" text-primary">
                                <tr>
                                    <th class="text-center">
                                        #ID
                                    </th>
                                    <th class="text-center">
                                        NAME
                                    </th>
                                    <th class="text-center">
                                        PATH
                                    </th>
                                    <th class="text-center">
                                        ORDER OF LINK
                                    </th>
                                    <th class="text-center">
                                        EDIT
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo e($m->id); ?>

                                        </td>
                                        <td class="text-center">
                                            <?php echo e(strtoupper($m->name)); ?>

                                        </td>
                                        <td class="text-center">
                                            <?php echo e($m->url); ?>

                                        </td >
                                        <td class="text-center">
                                            <?php echo e($m->order); ?>

                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo e(route('menus.edit', $m->id )); ?>" class="btnEditMenuLink" data-id="<?php echo e($m->id); ?>"> <i class="fas fa-edit adminIcons"></i> </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <?php echo e($menus->links()); ?>

                        </div>
                        <div class="container mt-3">
                            <?php if(session()->has('successUpdateMenu')): ?>
                                <div class="alert alert-success">
                                    <h3><?php echo e(session('successUpdateMenu')); ?></h3>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between">
                            <?php echo $__env->make('admin.pages.menu.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('adminScripts'); ?>
    <script src="<?php echo e(asset('assets/js/myScripts/adminScripts/admin_menu.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/admin/pages/menu/index.blade.php ENDPATH**/ ?>