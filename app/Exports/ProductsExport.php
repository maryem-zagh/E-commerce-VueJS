<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Product::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.product.columns.id'),
            trans('admin.product.columns.title'),
            trans('admin.product.columns.description'),
            trans('admin.product.columns.price'),
            trans('admin.product.columns.slug'),
            trans('admin.product.columns.perex'),
            trans('admin.product.columns.published_at'),
            trans('admin.product.columns.enabled'),
            trans('admin.product.columns.imageSrc'),
            trans('admin.product.columns.imageAlt'),
        ];
    }

    /**
     * @param Product $product
     * @return array
     *
     */
    public function map($product): array
    {
        return [
            $product->id,
            $product->title,
            $product->description,
            $product->price,
            $product->slug,
            $product->perex,
            $product->published_at,
            $product->enabled,
            $product->imageSrc,
            $product->imageAlt,
        ];
    }
}
