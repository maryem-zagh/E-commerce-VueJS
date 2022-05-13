<?php

namespace App\Exports;

use App\Models\CategoryProduct;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CategoryProductExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return CategoryProduct::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.category-product.columns.category_id'),
            trans('admin.category-product.columns.product_id'),
        ];
    }

    /**
     * @param CategoryProduct $categoryProduct
     * @return array
     *
     */
    public function map($categoryProduct): array
    {
        return [
            $categoryProduct->category_id,
            $categoryProduct->product_id,
        ];
    }
}
