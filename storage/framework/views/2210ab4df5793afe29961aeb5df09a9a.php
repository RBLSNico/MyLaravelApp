<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Products</title>
</head>

<body class="bg-gray-600">
    <?php echo $__env->make('products.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div>
        <?php if(session()->has('success')): ?>
            <div>
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
    </div>

    <div class="relative overflow-x-auto m-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Qty
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo e($product->id); ?>

                        </th>
                        <td class="px-6 py-4">
                            <?php echo e($product->name); ?>

                        </td>
                        <td class="px-6 py-4">
                            <?php echo e($product->qty); ?>

                        </td>
                        <td class="px-6 py-4">
                            <?php echo e($product->price); ?>

                        </td>
                        <td class="px-6 py-4">
                            <?php echo e($product->description); ?>

                        </td>
                        <td class="px-6 py-4">
                            <a href="<?php echo e(route('products.edit', ['product' => $product])); ?>">Edit</a>
                        </td>
                        <td class="px-6 py-4">
                            <form method="post" action="<?php echo e(route('products.delete', ['product' => $product])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
        </table>
    </div>
    
    



</body>

</html>
<?php /**PATH C:\xampp\htdocs\robles-app\resources\views/products/index.blade.php ENDPATH**/ ?>