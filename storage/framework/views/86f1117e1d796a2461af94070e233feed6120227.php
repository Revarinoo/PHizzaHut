<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/index.pizza.css')); ?>">
    <div class="container">
        <div class="title">
            <h1 class="text-dark mt-3">Our Delicious Pizza!</h1>
            <hr class="my-4">
            <h3 class="ml-5 mb-3 text-black-50">Order it Now!</h3>
        </div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('modify', App\Pizza::class)): ?>
                    <button class="btn btn-dark ml-5" type="submit" onclick="location.href='<?php echo e(route('pizza.create')); ?>'">Add Pizza</button>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('modify', App\Pizza::class)): ?>
                <form method="get">
                    <div class="input-group mb-3">
                        <h5 class="text-dark ml-5 mt-1">Search Pizza: </h5>
                        <input type="text" class="form-control ml-2" style="border-radius: 0.3rem" placeholder="Pizza's Name" name="pizzaname" aria-label="Pizza's Name" aria-describedby="basic-addon2">

                    </div>
                </form>
                <?php endif; ?>

        <div class="row justify-content-center">
            <?php if($pizzas->count() ==0): ?>
                <h5>Pizza Not Found</h5>
            <?php endif; ?>

            <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="card d-inline-block ml-2 mt-2 mb-3 mr-2 custom-pizza" >
                <form action="<?php echo e(route('pizza.show',$pizza->id)); ?>" method="POST">
                    <a href="<?php echo e(route('pizza.show',$pizza->id)); ?>">
                        <div class="imgwrap">
                            <img class="card-img-top" src="<?php echo e(url('storage/images/'.$pizza->image)); ?>" style="height: 300px; width: 318px;" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold"><?php echo e($pizza->name); ?></h5>
                            <h5 class="card-title text-center">Rp<?php echo e($pizza->price); ?></h5>
                            <div class="text-center">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('modify',App\Pizza::class)): ?>
                                    <a href="<?php echo e(route('pizza.edit',$pizza->id)); ?>" class="btn btn-primary">Update</a>
                                    <a href="<?php echo e(route('pizza.delete',$pizza->id)); ?>" class="btn btn-danger">Delete</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </form>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="row mt-3 mb-3 justify-content-center">
            <?php echo e($pizzas->links()); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppNew\htdocs\PHizzaHut\resources\views/pizza/index.blade.php ENDPATH**/ ?>