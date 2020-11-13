<?php

namespace App\Transformers;

use App\category;
use League\Fractal\TransformerAbstract;


class CategoryTransformer extends TransformerAbstract
{
    public function transform(category $category)
    {
        return [
            'id' => $category->id,
            'name' => $category->name,
            'registered' => $category->created_at->diffForHumans(),
        ];
    }
}