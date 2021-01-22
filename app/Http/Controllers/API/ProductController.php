<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit  = $request->input('limit', 6);
        $uuid  = $request->input('limit', 6);
        $name = $request->input('name');
        $slug = $request->input('slug');
        $category = $request->input('category');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        

        if($id)
        {           
            

            $product = Product::with('category')->find($id);

            if($product) 
                return ResponseFormatter::success($product, 'Data produk berhasil diambil');
            else 
                return ResponseFormatter::error(null, 'Data produk gagal diambil', 404);

        }

        if($slug) 
        {
            

            $product = Product::with('category')->where('slug', $slug);

            if($product) 
                return ResponseFormatter::success($product, 'Data produk berhasil diambil');
            else 
                return ResponseFormatter::error(null, 'Data produk gagal diambil', 404);

        }

                
        
        $product = Product::with('category');

        if($name)             
            $product->where('name', 'like', '%' . $name . '%');
        if($category) 
            
            $product->where('category', 'like', '%' . $category . '%');
        if($price_from)
            
            $product->where('price', '>=', $price_form);
        if($price_to)
            
            $product->where('price', '<=', $price_to);

        return ResponseFormatter::success(
        $product->paginate($limit),
        'Data list produk berhasil diambil'

        );

    }

    public function added(Request $request) 
    {
        $product = new Product;        
        $product->uuid = 'TRX' . mt_rand(10000,99999) . mt_rand(100,999);
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;

        $product->save();
        
        return ResponseFormatter::success($product);

    }

    function put($id, Request $request)
    {
        $product = Product::where('id', $id)->first();
        if($product){        
            $product->uuid = $request->uuid ? $request->uuid : $product->uuid;
            $product->name = $request->name ? $request->name : $product->name;
            $product->slug = Str::slug($request->name);
            $product->description = $request->description ? $request->description : $product->description;
            $product->price = $request->price ? $request->price : $product->price;
            $product->quantity = $request->quantity ? $request->quantity : $product->quantity;
            $product->category_id = $request->category_id ? $request->category_id : $product->category_id;

            $product->save();

            return ResponseFormatter::success('Data Success Updated',$product);

        }

        return ResponseFormatter::error('Data id not found', $product);
    }

    public function delete($id)
    {
        $product = Product::where('id', $id);
        if($product) {
            $product->delete();

            return ResponseFormatter::success('Data Succeded Deleted',$id);
        }else {
            return ResponseFormatter::error(null, 'Data Failed Delete/Not Found', 400);
        }

    }

}
