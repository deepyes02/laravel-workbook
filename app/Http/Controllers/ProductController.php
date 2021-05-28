<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Exception;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        if (count($product) < 1) {
            return ["message" => "No products exist, please add some first"];
        } else return $product;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'slug'  =>  'required',
            'price' =>  'required'
        ]);
        try {
            $product = Product::create($request->all());
            return $product;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Product::find($id)) {
            return Product::find($id);
        } else {
            return [
                "message" => "can't find the product with id {$id}"
            ];
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product !== null){
            $product->update($request->all());
            return $product;
        } else if ($product === null){
            return ["message" => "Sorry product (with id {$id}) doesn't exist"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // protected $successMsg = ["message"];
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product !== null) {
            $product->delete();
            return [
                'message' => "product {$product->id} was destroyed",
            ];
        } else {
            return [
                'message'   => "can not find the product (id = {$id}) and delete it",
            ];
        }
    }
    /**
     * Search for a name
     * 
     * @param str $name
     * @return \Illuminate\Http\Response
     */

    public function search($name){
         return Product::where('name', 'like', "%{$name}%")->get();
     }

}