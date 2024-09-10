<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard"><?php echo e(config('app.name')); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('create_product')); ?>">Create Product</a>
                    
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Crystal Gaile Guanio\OneDrive\Desktop\PRACTICE EXAM\laravel_e_commerce\resources\views/shared/nav.blade.php ENDPATH**/ ?>