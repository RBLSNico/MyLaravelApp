<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product View</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-600 text-white">
    @include('products.navbar')
    <div class="flex justify-center items-center min-h-screen bg-gray-800">
        <div class="w-full p-8 bg-gray-900 rounded-lg shadow-md">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="object-cover w-full h-64 mb-4 rounded-md">
            <h1 class="text-4xl font-semibold text-gray-300">{{$product->name}}</h1>
            <p class="text-base text-gray-400 mt-2 mb-4">{{$product->description}}</p>
            <div class="text-base text-gray-400 mt-2 mb-4 break-words">
                {!! nl2br(e($product->f_description)) !!}
            </div>
            {{-- <div class="flex justify-between items-center">
                <p class="text-xl text-indigo-400 font-semibold">Price: Php {{$product->price}}</p>
                <p class="text-xl text-green-400 font-semibold">Items left: {{$product->qty}}</p>
            </div> --}}
            {{-- <button class="mt-8 bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:border-indigo-300">
                Add to Cart
            </button> --}}
        </div>
    </div>
</body>

</html>
