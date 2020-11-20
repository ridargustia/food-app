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
            'id_category' => $subCategory->id_category,
            'name' => $subCategory->name,
            'registered' => $subCategory->created_at->diffForHumans(),
        ];
    }
}