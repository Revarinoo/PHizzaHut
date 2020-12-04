
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/index.pizza.css')); ?>">
    <div class="container">
        <div class="title">
            <h1 class="text-dark mt-3">Our Delicious Pizza!</h1>
        </div>
            <?php if($user!= "Guest" && $user->role_id == 1): ?>
                <button class="btn btn-primary ml-3 mr-5" type="submit" onclick="location.href='<?php echo e(route('pizza.create')); ?>'">Add Pizza</button>

            <?php else: ?>
                <form method="get">
                    <h4 class="text-dark ml-5">Search Pizza: </h4>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control ml-5" placeholder="Pizza's Name" name="pizzaname" aria-label="Pizza's Name" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                        <button class="btn btn-primary ml-3 mr-5" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            <?php endif; ?>

        <div class="row justify-content-center">
            <?php if($pizzas->count() ==0): ?>
                <h5>Pizza Not Found</h5>
            <?php endif; ?>

            <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <form action="<?php echo e(route('pizza.show',$pizza->id)); ?>" method="POST">
            <a class="card d-inline-block ml-2 mt-2 mb-3 mr-2 custom-pizza" href="<?php echo e(route('pizza.show',$pizza->id)); ?>">
                <div class="imgwrap">    
                    <img class="card-img-top" src="<?php echo e(url('storage/images/'.$pizza->image)); ?>" alt="Card image cap">
                </div>
                <div class="card-body">
                <h5 class="card-title text-center font-weight-bold"><?php echo e($pizza->name); ?></h5>
                <h5 class="card-title text-center font-weight-bold"><?php echo e($pizza->price); ?></h5>
                <a href="<?php echo e(route('pizza.delete',$pizza->id)); ?>" class="btn btn-danger">Delete</a>
                <a href="<?php echo e(route('pizza.edit',$pizza->id)); ?>" class="btn btn-primary">Update</a>
                </div>
                
               
            </a>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </form>
        </div>

        <?php echo e($pizzas->links()); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppNew\htdocs\PHizzaHut\resources\views/pizza/index.blade.php ENDPATH**/ ?>