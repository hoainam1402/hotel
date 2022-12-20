<div class="container mt-0 col-lg-6">
    <div class="row d-flex justify-content-center align-content-between">
        <div  id="navlink">
            <form action="#" method="POST" class="contact-form add-navlink">
                <?php echo csrf_field(); ?>
                <div class="row d-flex justify-content-center align-content-between">
                    <div class="col-sm-10   mb-3 d-flex justify-content-center">
                        <h2 class="mb-0">ADD NAVLINK</h2>
                    </div>
                    <div class="col-sm-8 mt-3">
                        <p class="text-black font-weight-bold">Name of navlink</p>
                        <input type="text" class="form-control adminFormWhite" name="tbName" id="tbName" data-field="name">
                        <p class="text-danger msgErrorNameLink"></p>
                    </div>
                    <div class="col-sm-8">
                        <p class="text-black font-weight-bold">Url of navlink</p>
                        <input type="text" class="form-control adminFormWhite" name="tbUrl"  id="tbUrl"  data-field="url">
                        <p class="text-danger msgErrorUrlLink"></p>
                    </div>
                    <div class="col-sm-8">
                        <p class="text-black font-weight-bold">Order of navlink</p>
                        <input type="number" min="0" max="50" class="form-control adminFormWhite" name="tbOrder"  id="tbOrder"  data-field="order">
                        <p class="text-danger msgErrorOrderLink"></p>
                    </div>
                    <div class="col-sm-8 mb-2 mt-2 d-flex justify-content-center">
                        <input type="submit" class="btn btn-info" name="btnAddNavlink" id="btnAddNavlink" value="Insert navlink" />
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
            <?php if(session()->has('warning')): ?>
                <div class="alert alert-warning">
                    <h3><?php echo e(session('warning')); ?></h3>
                </div>
            <?php endif; ?>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success">
                    <h3><?php echo e(session('success')); ?></h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/admin/pages/menu/add.blade.php ENDPATH**/ ?>