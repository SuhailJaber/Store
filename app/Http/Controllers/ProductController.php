<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function index()
    {

        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->quntity = $request->quntity;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->description = $request->description;

        $product->save();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        $category_name = Category::find($product->category_id);
        return view('admin.products.edit', compact('product', 'categories', 'category_name'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->quntity = $request->quntity;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->description = $request->description;

        $product->save();
        return  redirect('products');
    }

    public function destroy($id)
    {

        Product::find($id)->delete();
        return  redirect()->back();
    }
}
