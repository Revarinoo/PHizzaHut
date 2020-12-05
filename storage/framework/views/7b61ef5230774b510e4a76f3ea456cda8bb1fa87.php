<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHizza Hut</title>
    <link rel="icon" href="/storage/images/pizzaLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('css/layout.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">

</head>
<body>

<nav class="navbar navbar-light bg-custom">
    <a class="navbar-brand container" href="<?php echo e(route('pizza.index')); ?>">
            <img src="/storage/images/logo.png" width="110" height="50" alt="" loading="lazy">
    </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item right-position">
                <?php if(isset($user)): ?>
                    <?php if($user == "Guest"): ?>
                    <a href="<?php echo e(route('login')); ?>" class="authColor">Login |</a>
                    <a href="<?php echo e(route('register')); ?>" class="authColor">Register</a>
                    <?php else: ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e($user->username); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    </ul>

                    <?php if($user->role_id == 1): ?>
                        <a href="<?php echo e(route('users.transaction')); ?>" class="authColor">View All User Transaction |</a>
                    <a href="<?php echo e(route('users.index')); ?>" class="authColor">View All User |</a>
                    <?php elseif($user->role_id == 2): ?>
                        <a href="<?php echo e(route('order.history',$user->id)); ?>" class="authColor">View Transaction History |</a>
                    <a href="/carts/<?php echo e($user->id); ?>" class="authColor">View Cart |</a>
                    <?php endif; ?>

                    <?php endif; ?>

                <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="authColor">Login |</a>
                <a href="<?php echo e(route('register')); ?>" class="authColor">Register</a>
                <?php endif; ?>
            </li>
        </ul>


</nav>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>
<?php /**PATH C:\xamppNew\htdocs\PHizzaHut\resources\views/layouts/layout.blade.php ENDPATH**/ ?>