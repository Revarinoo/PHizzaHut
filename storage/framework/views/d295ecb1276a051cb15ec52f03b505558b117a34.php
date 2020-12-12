

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
    <?php $__currentLoopData = $listusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-3 d-inline-block ml-3 mr-3 mt-5" style="width: 18rem;">
            <div class="card-header text-white" style="background-color: #DF3821">User ID : <?php echo e($listuser->id); ?></div>
                <div class="card-body">
                    <p class="card-text">Username: <?php echo e($listuser->username); ?></p>
                    <p class="card-text">Email: <?php echo e($listuser->email_address); ?></p>
                    <p class="card-text">Address: <?php echo e($listuser->address); ?></p>
                    <p class="card-text">Phone Number: <?php echo e($listuser->phone_number); ?></p>
                    <p class="card-text">Gender: <?php echo e($listuser->gender); ?></p>
                </div>
              </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Web Programming\Projek\Ori\PHizzaHut\resources\views/user/user.blade.php ENDPATH**/ ?>