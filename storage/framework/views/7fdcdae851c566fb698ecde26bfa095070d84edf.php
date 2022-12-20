<div class="container mt-3 col-lg-6">
    <div class="row d-flex justify-content-center align-content-between">
        <div id="price">
            <form action="#" method="POST" class="contact-form add-price">
                <div class="row d-flex justify-content-center align-content-between" >
                    <div class="col-sm-10   mb-3 d-flex justify-content-center">
                        <h2 class="mb-0">ADD VALUE OF PRICE</h2>
                    </div>
                    <div class="col-sm-8">
                        <p class="text-black font-weight-bold">Value of price</p>
                        <input type="number" min="0"  class="form-control adminForm" name="tbPriceAdd" data-field="price" id="tbPriceAdd">
                        <p class="text-danger msgErrorPrice"></p>
                    </div>
                    <div class="col-sm-8 mb-2 mt-2 d-flex justify-content-center">
                        <input type="submit" class="btn btn-info" name="btnAddPriceValue" id="btnAddPriceValue" value="Insert price value" />
                    </div>
                </div>
            </form>
            <div class="container mt-3">
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
</div>
<?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/admin/pages/prices/add.blade.php ENDPATH**/ ?>