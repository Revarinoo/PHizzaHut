<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">
    <div class="container">
        <div class="card custom-card">
            <div class="card-header bg-header">
                Register
            </div>
            <div class="card-body">

                <form method="POST" action="<?php echo e(route('pizza.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Username')); ?></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>
                        <div class="col-md-6">
                            <input type="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>
                        <div class="col-md-6">
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>
                        <div class="col-md-6">
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Phone Number')); ?></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gender')); ?></label>
                        <div class="col-md-6 custom-radio">
                            <input type="radio" name="gender" id="male" value="male">
                            <label for="male">Male </label>
                            <input type="radio" name="gender" id="female" value="female">
                            <label for="female">Female </label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Register')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppNew\htdocs\PHizzaHut\resources\views/register.blade.php ENDPATH**/ ?>