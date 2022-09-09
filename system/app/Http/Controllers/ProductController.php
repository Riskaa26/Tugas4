<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller {
    function index(){
        $data['list_Product'] = Product::all();
        return view('product.index', $data);
    }
    function create(){
        return view('product.create');
    }
    function store(){
        $Product = new Product;
        $Product->name = request('name');
        $Product->prices = request('prices');
        $Product->weight = request('weight');
        $Product->stock = request('stock');
        $Product->description = request('description');
        $Product->save();

       return redirect('Product')->with('success', 'data added successfully');

    }
    function show(Product $Product){
        $data['Product'] = $Product;
        return view('product.show', $data);
    }
    function edit(Product $Product) {
        $data['Product'] = $Product;
        return redirect('Product')->with('success', 'data edited successfully');
    }

    function update(Product $Product){
        $Product->name = request('name');
        $Product->prices = request('prices');
        $Product->weight = request('weight');
        $Product->stock = request('stock');
        $Product->description = request('description');
        $Product->save();

        return redirect('Product');
    }
    function destroy(Product $Product){
        $Product->delete();

        return redirect('Product')->with('success', 'data deleted successfully');

    }



}
