<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="bg-gray-600">
    <?php echo $__env->make('products.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="flex items-center justify-center h-screen">
        <div
            class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <form method="post" action="<?php echo e(route('products.store')); ?>" class="max-w-sm mx-auto"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('post'); ?>
                <?php if($errors->any()): ?>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
                <div class="mb-5">
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="name" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="your product here" required>
                </div>
                <div class="mb-5">
                    <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Qty</label>
                    <input type="text" id="qty" name="qty"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>
                <div class="mb-5">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Price</label>
                    <input type="text" id="price" name="price"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>
                <div class="mb-5">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Description</label>
                    <input type="text" id="description" name="description"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>
                <div class="mb-5">
                    <label for="f_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Article</label>
                    <textarea id="f_description" name="f_description"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-32 resize-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required></textarea>
                </div>
                <div class="mb-5">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Image</label>
                    <input type="file" id="image" name="image"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                    a New Product</button>
                <a href="<?php echo e(route('products.index')); ?>"
                    class="m-2 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">BACK</a>
            </form>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\robles-app\resources\views/products/create.blade.php ENDPATH**/ ?>