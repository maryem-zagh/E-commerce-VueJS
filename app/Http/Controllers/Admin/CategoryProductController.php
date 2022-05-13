<?php

namespace App\Http\Controllers\Admin;

use App\Exports\CategoryProductExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryProduct\BulkDestroyCategoryProduct;
use App\Http\Requests\Admin\CategoryProduct\DestroyCategoryProduct;
use App\Http\Requests\Admin\CategoryProduct\IndexCategoryProduct;
use App\Http\Requests\Admin\CategoryProduct\StoreCategoryProduct;
use App\Http\Requests\Admin\CategoryProduct\UpdateCategoryProduct;
use App\Models\CategoryProduct;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\View\View;

class CategoryProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCategoryProduct $request
     * @return array|Factory|View
     */
    public function index(IndexCategoryProduct $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CategoryProduct::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['category_id', 'product_id'],

            // set columns to searchIn
            ['']
        );

        // if ($request->ajax()) {
        //     if ($request->has('bulk')) {
        //         return [
        //             'bulkItems' => $data->pluck('id')
        //         ];
        //     }
        //     return ['data' => $data];
        // }

        return view('admin.category-product.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.category-product.create');

        return view('admin.category-product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCategoryProduct $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCategoryProduct $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CategoryProduct
        $categoryProduct = CategoryProduct::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/category-products'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/category-products');
    }

    /**
     * Display the specified resource.
     *
     * @param CategoryProduct $categoryProduct
     * @throws AuthorizationException
     * @return void
     */
    public function show(CategoryProduct $categoryProduct)
    {
        $this->authorize('admin.category-product.show', $categoryProduct);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CategoryProduct $categoryProduct
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CategoryProduct $categoryProduct)
    {
        $this->authorize('admin.category-product.edit', $categoryProduct);


        return view('admin.category-product.edit', [
            'categoryProduct' => $categoryProduct,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryProduct $request
     * @param CategoryProduct $categoryProduct
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCategoryProduct $request, CategoryProduct $categoryProduct)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CategoryProduct
        $categoryProduct->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/category-products'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/category-products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCategoryProduct $request
     * @param CategoryProduct $categoryProduct
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCategoryProduct $request, CategoryProduct $categoryProduct)
    {
        $categoryProduct->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCategoryProduct $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCategoryProduct $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CategoryProduct::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }

    /**
     * Export entities
     *
     * @return BinaryFileResponse|null
     */
    public function export(): ?BinaryFileResponse
    {
        return Excel::download(app(CategoryProductExport::class), 'categoryProducts.xlsx');
    }
}
