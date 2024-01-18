<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $imagePath = $request->file('image')->store('storage', 'public');
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
            'f_description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data['image'] = $imagePath;
        $newProduct = Product::create($data);
        return redirect(route('products.index'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
            'f_description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('storage', 'public');
            $data['image'] = $imagePath;
        }

        $product->update($data);
        return redirect(route('products.index'))->with('success', 'Product Updated Successfully');
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('success', 'Product Deleted Successfully');
    }
    public function productsmain()
    {
        $products = Product::all();
        return view('products.products-main', ['products' => $products]);

    }

    public function view(Product $product)
    {
        return view('products.view', ['product' => $product]);
    }
}
