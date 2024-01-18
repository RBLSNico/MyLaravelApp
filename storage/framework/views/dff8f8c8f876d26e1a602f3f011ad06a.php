<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product View</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="bg-gray-600 text-white">
    <?php echo $__env->make('products.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="flex justify-center items-center min-h-screen bg-gray-800">
        <div class="w-full p-8 bg-gray-900 rounded-lg shadow-md">
            <img src="<?php echo e(asset($product->image)); ?>" alt="<?php echo e($product->name); ?>" class="object-cover w-full h-64 mb-4 rounded-md">
            <h1 class="text-4xl font-semibold text-gray-300"><?php echo e($product->name); ?></h1>
            <p class="text-base text-gray-400 mt-2 mb-4"><?php echo e($product->description); ?></p>
            <div class="text-base text-gray-400 mt-2 mb-4 break-words">
                <?php echo nl2br(e($product->f_description)); ?>

            </div>
            
            
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\robles-app\resources\views/products/view.blade.php ENDPATH**/ ?>