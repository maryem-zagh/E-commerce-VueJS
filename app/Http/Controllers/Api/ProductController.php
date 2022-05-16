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
            ->get(['id', 'name', 'slug']);
        foreach ($categories as  $category) {
            $subcategories = Category::where('parent_id', $category->id)
                ->orderby('name', 'asc')
                ->get(['id', 'name', 'slug', 'parent_id']);
            $category->setAttribute('subcategories', $subcategories);
        }
        return response()->json(['categories' => $categories, 'products' => Product::with('categories:id,name')->get()]);
        // return Product::with('categories:id,name')->get();
    }
    public function getCategories()
    {
        $categories = Category::where('parent_id', null)
            ->orderby('name', 'asc')
            ->get(['id', 'name', 'slug']);
        return response()->json($categories);
    }

    public function filterProductsBycategory(String $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->products;
        $subcategories = $category->subcategory;
        $category->setAttribute('subcategories', $subcategories);
        return response()->json(['products' => $products, 'subCategories' => $subcategories]);
    }
    public function relatedProducts($id)
    {
        $product = Product::find($id);
        $products = Product::limit(2)->get();
        if ($product->categories) {
            $categories = $product->categories;

            $products = $categories[0]->products->take(3);
            // dd($products);
        }
        return response()->json($products);
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
    public function show($slug)
    {
        $product = null;
        try {
            $product = Product::where('slug', $slug)->with('categories:id,name,slug')->firstOrFail();
        } catch (\Throwable $th) {
            return $th;
        }

        return response()->json($product);
    }
}
