

<?php $__env->startSection('content'); ?>

<div class="container">
    <?php $__currentLoopData = $listusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-3 custom-card-detail">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="card-body pizza-detail">
                    <p class="card-text">User ID: <?php echo e($listuser->id); ?></p>
                    <p class="card-text">Username: <?php echo e($listuser->username); ?></p>
                    <p class="card-text">Email: <?php echo e($listuser->email_address); ?></p>
                    <p class="card-text">Address: <?php echo e($listuser->address); ?></p>
                    <p class="card-text">Phone Number: <?php echo e($listuser->phone_number); ?></p>
                    <p class="card-text">Gender: <?php echo e($listuser->gender); ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Web Programming\Projek\PHizzaHut\resources\views/user/user.blade.php ENDPATH**/ ?>