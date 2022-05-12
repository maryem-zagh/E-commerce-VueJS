<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\BulkDestroyProduct;
use App\Http\Requests\Admin\Product\DestroyProduct;
use App\Http\Requests\Admin\Product\IndexProduct;
use App\Http\Requests\Admin\Product\StoreProduct;
use App\Http\Requests\Admin\Product\UpdateProduct;
use App\Models\Category;
use App\Models\Product;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexProduct $request
     * @return array|Factory|View
     */
    public function index(IndexProduct $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Product::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'description', 'prix', 'perex', 'category_id', 'published_at', 'enabled'],

            // set columns to searchIn
            ['id', 'title', 'description', 'slug'],

        function ($query) use ($request) {
            $query->with(['category']);
            if($request->has('categories')){
                $query->whereIn('category_id', $request->get('categories'));
            }
        }
    );

    if ($request->ajax()) {
        return ['data' => $data];
    }

    return view('admin.articles-with-relationship.index', [
        'data' => $data,
        'authors' => Category::all()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.product.create');

        return view('admin.product.create' , [
            'authors' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProduct $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreProduct $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Product
        $product = Product::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/products'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @throws AuthorizationException
     * @return void
     */
    public function show(Product $product)
    {
        $this->authorize('admin.product.show', $product);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Product $product)
    {
        $this->authorize('admin.product.edit', $product);


        return view('admin.product.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProduct $request
     * @param Product $product
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateProduct $request, Product $product)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Product
        $product->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/products'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
                'object' => $product
            ];
        }

        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyProduct $request
     * @param Product $product
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyProduct $request, Product $product)
    {
        $product->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyProduct $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyProduct $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Product::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
