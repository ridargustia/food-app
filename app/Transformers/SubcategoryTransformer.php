<?php

namespace App\Transformers;

use App\subCategory;
use League\Fractal\TransformerAbstract;


class SubcategoryTransformer extends TransformerAbstract
{
    public function transform(subCategory $subCategory)
    {
        return [
            'id' => $subCategory->id,
            'category_id' => $subCategory->category_id,
            'name' => $subCategory->name,
            'image' => $subCategory->image,
            'registered' => $subCategory->created_at->diffForHumans(),
        ];
    }
}