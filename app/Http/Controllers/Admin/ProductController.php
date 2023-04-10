<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.copyindex', compact('categories', 'brands'));
    }

    public function store(ProductRequest $request)
    {
        // try {
            // $validator = Validator::make($request->all(), [
            //     'name' => 'required',
            //     'price' => 'required|numeric',
            //     'description' => 'required',
            // ]);
           
            // $validateData = $request->validate();
            //  dd($request->all());
            // $category = Category::findOrFail($request->id);
            // dd($category->all());
            $validateData = $request->validate();
            $category = Category::findOrFail($validateData['category_id']);
            dd($category->all());
            $product = $category->products()->create([
                        'category_id' => $request['category_id'],
                        'name' => $request['name'],
                        'slug' => Str::slug($request['slug']),
                        'brand' => $request['brand'],
                        'small_description' => $request['small_description'],
                        'original_price' => $request['original_price'],
                        'selling_price' => $request['selling_price'],
                        'quantity' => $request['quantity'],
                        'treending' => $request->treending == true ? '1' : '0',
                        'status' => $request->status == true ? '1' : '0',
                        'meta_title' => $request['meta_title'],
                        'meta_keyword' => $request['meta_keyword'],
                        'meta_description' => $request['meta_description'],
            ]);
            // $product->productImages()create([
            //     'product_id' = $product->id;
            // ]);
            return $product->id;

            
        // } catch (\Throwable $th) {
        //     dd($th->getMessage());
        // }
        
        // try {
        //     //code...
            
        // $validateData = $request->validate();
        // $category = Category::findOrFail($validateData['category_id']);
        // $product = $category->products()->create
        // ([
        //     'category_id' => $validateData['category_id'],
        //     'name' => $validateData['name'],
        //     'slug' => Str::slug($validateData['slug']),
        //     'brand' => $validateData['brand'],
        //     'small_description' => $validateData['small_description'],
        //     'original_price' => $validateData['original_price'],
        //     'selling_price' => $validateData['selling_price'],
        //     'quantity' => $validateData['quantity'],
        //     'treending' => $request->treending == true ? '1' : '0',
        //     'status' => $request->status == true ? '1' : '0',
        //     'meta_title' => $validateData['meta_title'],
        //     'meta_keyword' => $validateData['meta_keyword'],
        //     'meta_description' => $validateData['meta_description'],
        
        // ]);
        // return $product->id;
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     dd($th->getMessage());
        // }
       
    }
}
