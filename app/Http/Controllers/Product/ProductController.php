<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\ProductCreateRequest;
use App\Http\Requests\Products\ProductUpdateRequest;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $response["products"] = Product::all();
        return view('Products.all.index')->with($response);
    }

    public function create(){
        return view('Products.Create.index');
    }

    public function store(ProductCreateRequest $request){

        product::create($request->all());
        return redirect()->route('products.index')->with('alert-success', 'Product created successfully');


    }

    public function show($id){

           if($response["product"] = Product::find($id)){
            return view('Products.show.index')->with($response);
           }
           return redirect()->route('products.index')->with('alert-danger', 'Product not found');
    }

    public function edit($id){
       if($response["product"] = Product::find($id)){
        return view('Products.edit.index')->with($response);
       }
       return redirect()->route('products.index')->with('alert-danger', 'Product not found');

    }

    public function update(ProductUpdateRequest $request, $id){

       if($product = Product::find($id)){
        $product->update($request->all());
        return redirect()->route('products.index')->with('alert-success', 'Product updated successfully');
       }
       return redirect()->route('products.index')->with('alert-danger', 'Product not found');
    }


    public function destroy($id){

        if($product = Product::find($id)){
            $product->delete();
            return redirect()->route('products.index')->with('alert-success', 'Product deleted successfully');
        }
        return redirect()->route('products.index')->with('alert-danger', 'Product not found');
    }
}
