<div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php $__currentLoopData = json_decode($products); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo e($product->image); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($product->name); ?></h5>
                        <p class="card-text"><?php echo e($product->description); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\Crystal Gaile Guanio\OneDrive\Desktop\PRACTICE EXAM\laravel_e_commerce\resources\views/shared/product-cards.blade.php ENDPATH**/ ?>