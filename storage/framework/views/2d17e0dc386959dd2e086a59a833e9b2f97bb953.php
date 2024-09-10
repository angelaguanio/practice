

<?php $__env->startSection('content'); ?>
    <h1>Profile</h1>
    <div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                value="<?php echo e($email); ?>" readonly>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="test" class="form-control" id="floatingPassword" placeholder="Name" value="<?php echo e($name); ?>"
                readonly>
            <label for="floatingPassword">Name</label>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Crystal Gaile Guanio\OneDrive\Desktop\PRACTICE EXAM\laravel_e_commerce\resources\views/user/profile.blade.php ENDPATH**/ ?>