<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/history.css')); ?>">

    <div class="container mt-5">
        <?php $count = 1; ?>
        <?php $__currentLoopData = $listorders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listorder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $count+=1; ?>
            <a href="<?php echo e(route('order.detail',$listorder->id)); ?>">
                <div class="custom-card card <?php echo e($count%2 == 1 ? 'bg-light' : 'bg-red'); ?>">
                    <div class="card-body" style="color: <?php echo e($count%2 == 1 ? '#DF3821' : '#ffffff'); ?> ">
                        <ol>
                            <li>Transaction at <?php echo e($listorder->transaction_date); ?></li>
                            <li>User ID : <?php echo e($listorder->user->id); ?></li>
                            <li>Username : <?php echo e($listorder->user->username); ?></li>
                        </ol>
                    </div>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppNew\htdocs\PHizzaHut\resources\views/transaction/allUser.blade.php ENDPATH**/ ?>