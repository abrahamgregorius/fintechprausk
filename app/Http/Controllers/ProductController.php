<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('shop.products', compact('products'));
    }

    public function create() {
        $categories = Category::get();
        return view('shop.create', compact('categories'));
    }

    public function store(Request $request) {
        Product::create($request->all());
        return redirect('/products');
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = Category::get();
        return view('shop.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id) {
        Product::find($id)->update($request->all());
        return redirect('/products');
    }


    public function destroy($id) {
        $product = Product::find($id);

        if(!$product) {
            return redirect()->back();
        }
        $product->delete();
        return redirect()->back();
    }
}
