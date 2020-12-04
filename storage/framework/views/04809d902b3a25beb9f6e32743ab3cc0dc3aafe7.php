

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/detail.css')); ?>">
    <div class="container">
        <div class="card mb-3 custom-card-detail">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?php echo e(url('storage/images/'.$pizzas->image)); ?>" class="card-img img-detail" alt="Pizza Image">
                </div>
                <div class="col-md-8">
                    <div class="card-body pizza-detail">
                        <h5 class="card-title custom-name"><?php echo e($pizzas->name); ?></h5>
                        <p class="card-text"><?php echo e($pizzas->description); ?></p>
                        <p class="card-text">Rp <?php echo e($pizzas->price); ?></p>
                        <form action="<?php echo e(route('pizza.destroy',$pizzas->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger">Delete Pizza</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Web Programming\Projek\PHizzaHut\resources\views/pizza/delete.blade.php ENDPATH**/ ?>