<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Products</title>

</head>

<body class="bg-gray-600 text-white font-sans">

    <?php echo $__env->make('products.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex flex-col overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                <img src="<?php echo e(asset($product->image)); ?>" alt="<?php echo e($product->name); ?>" class="object-cover h-48">
                <div class="p-4 bg-gray-800">
                    <h5 class="text-lg font-semibold text-white"><?php echo e($product->name); ?></h5>
                    <p class="mt-2 text-gray-400"><?php echo e($product->description); ?></p>
                </div>
                
                <div class="p-4 pt-0 bg-gray-800">
                    <a href="<?php echo e(route('products.view', ['product' => $product])); ?>"
                        class="text-white-500 hover:underline items-center px-3 py-2 text-sm font-medium text-center bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read More</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="max-w-md mx-auto my-4">
        <?php if(session()->has('success')): ?>
            <div class="bg-green-500 p-4 text-white rounded-md">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\robles-app\resources\views/products/products-main.blade.php ENDPATH**/ ?>