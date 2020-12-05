<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/history.css')); ?>">

    <div class="container mt-5">
        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <a href="<?php echo e(route('order.detail',$transaction->id)); ?>">
                <div class="custom-card card <?php echo e($transaction->id%2 == 0 ? 'bg-light' : 'bg-red'); ?>">
                    <div class="card-body" style="color: <?php echo e($transaction->id%2 == 0 ? '#DF3821' : '#ffffff'); ?> ">
                        Transaction at <?php echo e($transaction->transaction_date); ?>

                    </div>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppNew\htdocs\PHizzaHut\resources\views/transaction/history.blade.php ENDPATH**/ ?>