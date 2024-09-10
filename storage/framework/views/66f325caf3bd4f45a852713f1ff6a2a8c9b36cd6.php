

<?php $__env->startSection('content'); ?>
    <h1>Create Product</h1>
    <form action="<?php echo e(route('store_product')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="image" id="image" placeholder="image">
                <label for="image">Image</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="description" id="description" placeholder="description">
                <label for="description">Description</label>
            </div>
            <button type="submit" class="btn btn-success">Create Product</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Crystal Gaile Guanio\OneDrive\Desktop\PRACTICE EXAM\laravel_e_commerce\resources\views/products/create.blade.php ENDPATH**/ ?>