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
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('modify', App\Cart::class)): ?>
                        <form action="<?php echo e(route('carts.store')); ?>" style="margin-top: 40px;" method="POST">
                            <?php echo csrf_field(); ?>
                            <label for="quantity">Quantity : </label>
                            <input id="quantity" type="number" min="1" name="quantity" class="qty-form <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="quantity" value="<?php echo e(old('quantity')); ?>" required autocomplete="quantity" autofocus>
                            <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <input type="hidden" name="pizza_id" value="<?php echo e($pizzas->id); ?>">
                            <div class="form-group row mb-0 custom-button-detail">
                                    <button type="submit"class="btn btn-primary">
                                        <?php echo e(__('Add to Cart')); ?>

                                    </button>
                            </div>
                        </form>
                            <?php if(session('msg')): ?>
                                <div class="alert alert-success" role="alert" style="margin: 20px">
                                    <?php echo e(session('msg')); ?>

                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppNew\htdocs\PHizzaHut\resources\views/pizza/detail.blade.php ENDPATH**/ ?>