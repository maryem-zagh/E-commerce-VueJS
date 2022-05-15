<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       $categories = Category::where('parent_id', null)
        ->orderby('name', 'asc')
        ->get(['id','name','slug']);
        foreach ($categories as  $category) {
            $subcategories=Category::where('parent_id',$category->id)
            ->orderby('name', 'asc')
            ->get(['id','name','slug','parent_id']);
            $category->setAttribute('subcategories',$subcategories);
            
        }
        return response()->json(['categories'=>$categories, 'products'=>Product::with('categories:id,name')->get()]);
        // return Product::with('categories:id,name')->get();
    }
    public function store(Request $request)
    {
        // validate request

        $product =  Product::create([
            'title' => $request->title,
            'description' => $request->price,
            'price' => $request->price,
            'slugs' => $request->price,
            'imageSrc' => $request->imageSrc,
            'imageAlt' => $request->imageAlt
        ]);

        return response()->json($product);
    }
    public function show($id)
    {
        $product = Product::find($id);

        return response()->json($product);
    }
}
