<?php $__env->startSection('title'); ?>
    Sona | Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    Website for reservation hotel rooms.
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    admin panel, dashboard
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-chart">
        <div class="card-header ">
          <div class="row">
              <div class="col-sm-6 text-left">
                  <h2 class="card-title font-weight-bold text-uppercase ">DASHBOARD - ACTIVITIES</h2>
              </div>

          </div>
        </div>
        <div class="card-body">
            <div class="table-responsive menu_table" id="menuTable">
                <table class="table tablesorter " id="dash_table">
                    <thead class="text-primary">
                    <tr>
                        <th class="text-center">
                            FROM (IP ADDRESS)
                        </th>
                        <th class="text-center">
                            EMAIL
                        </th>
                        <th class="text-center">
                            ROLE
                        </th>
                        <th class="text-center">
                            ACTIVITY
                        </th>
                        <th class="text-center">
                            DATE
                        </th>
                    </tr>
                    </thead>
                    <tbody id="activities">

                    <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td class="text-center">
                                <?php echo e($a->ip_address); ?>

                            </td>
                            <td class="text-center">
                                <?php echo e($a->user->email); ?>

                            </td>
                            <?php if($a->user->role_id == 2): ?>
                            <td class="text-center">
                               user
                            </td>
                            <?php else: ?>
                                <td class="text-center">
                                    admin
                                </td>
                            <?php endif; ?>
                            <td class="text-center">
                                <?php echo e($a->activity); ?>

                            </td>
                            <td class="text-center">
                                <?php echo e($a->date); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end mt-4" id="paging">
                <?php echo e($activities->links()); ?>


            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-chart">
        <div class="card-header d-flex justify-content-between">
          <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> Latest Registred Users</h3>
            <a href="<?php echo e(route('users.index')); ?>" class="btn">View all</a>
        </div>
        <div class="card-body">
          <div class="card">
              <div class="table-responsive menu_table" id="menuTable">
                  <table class="table tablesorter ">
                      <thead class="text-primary">
                      <tr>
                          <th class="text-center">
                              FULLNAME
                          </th>
                          <th class="text-center">
                              EMAIL
                          </th>
                          <th class="text-center">
                              DATE OF REGISTERED
                          </th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td class="text-center">
                              <?php echo e($user->firstname ." ".$user->lastname); ?>

                          </td>
                          <td class="text-center">
                              <?php echo e($user->email); ?>

                          </td>
                          <td class="text-center">
                              <?php echo e($user->created_at); ?>

                          </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                  </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HS\Desktop\sona-hotel-reservation-system\resources\views/admin/pages/dashboard.blade.php ENDPATH**/ ?>