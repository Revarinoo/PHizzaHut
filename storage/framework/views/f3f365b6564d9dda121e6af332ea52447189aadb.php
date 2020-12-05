

<?php $__env->startSection('content'); ?>

<div class="container">
    <h2 class="text-center mt-4 mb-4">Transaction Details</h2>
    <?php $__currentLoopData = $orderdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-3 mt-3">
        <div class="row no-gutters">
            <div class="col-md-3">
            <img src="<?php echo e(url('storage/images/'.$details->pizza->image)); ?>" class="card-img img-detail" alt="Pizza Image" style="width:15rem; height:15rem;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($details->pizza->name); ?></h5>
                    <p class="card-text">Rp <?php echo e($details->pizza->price); ?></p>
                    <p class="card-text">Quantity: <?php echo e($details->quantity); ?></p>
                    <p class="card-text">Total Price: Rp<?php echo e($details->pizza->price * $details->quantity); ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppNew\htdocs\PHizzaHut\resources\views/transaction/detail.blade.php ENDPATH**/ ?>