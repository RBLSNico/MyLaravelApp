<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Products</title>

</head>

<body class="bg-gray-600 text-white font-sans">

    @include('products.navbar')

    <div class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($products as $product)
            <div class="flex flex-col overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="object-cover h-48">
                <div class="p-4 bg-gray-800">
                    <h5 class="text-lg font-semibold text-white">{{ $product->name }}</h5>
                    <p class="mt-2 text-gray-400">{{ $product->description }}</p>
                </div>
                {{-- <div class="flex justify-between items-center p-4 bg-gray-700">
                    <p class="text-lg text-indigo-400 font-semibold">Php {{ $product->price }}</p>
                    <p class="text-sm text-green-400">Items left: {{ $product->qty }}</p>
                </div> --}}
                <div class="p-4 pt-0 bg-gray-800">
                    <a href="{{ route('products.view', ['product' => $product]) }}"
                        class="text-white-500 hover:underline items-center px-3 py-2 text-sm font-medium text-center bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read More</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="max-w-md mx-auto my-4">
        @if (session()->has('success'))
            <div class="bg-green-500 p-4 text-white rounded-md">
                {{ session('success') }}
            </div>
        @endif
    </div>

</body>

</html>
