

<?php $__env->startSection('content'); ?>

<div class="container">
    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-3 mt-3 custom-card-detail">
        <div class="row no-gutters">
            <div class="col-md-3">
            <img src="<?php echo e(url('storage/images/'.$cart->pizza->image)); ?>" class="card-img img-detail" alt="Pizza Image" style="width:15rem; height:15rem;">
            </div>
            <div class="col-md-">
                <div class="card-body pizza-detail">
                    <h5 class="card-title custom-name"><?php echo e($cart->pizza->name); ?></h5>
                    <p class="card-text">Rp<?php echo e($cart->pizza->price); ?></p>

                <form action="<?php echo e(route('carts.update',$cart->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <p class="card-text">Quantity: 
                            <input type="number" min="1" name="quantity" class="qty-form" value="<?php echo e($cart->quantity); ?>">
                        <button type="submit" class="btn btn-primary ml-2">Update Quantity</button> 
                        </p>
                        
                </form>
                <form action="<?php echo e(route('carts.destroy',$cart->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-danger mt-3">Delete From Cart</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if($carts->count() != 0): ?>
        <div class="text-center mb-5 mt-5">
            <form action="/carts/<?php echo e($user->id); ?>/checkout" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-dark">Checkout</button>
            </form>
        </div>
        
    <?php else: ?>
        <h2 class="text-center mt-4 mb-4">Cart Empty</h2>
    <?php endif; ?>
    
</div
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Web Programming\Projek\Ori\PHizzaHut\resources\views/cart/cart.blade.php ENDPATH**/ ?>