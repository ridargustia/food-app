<?php

namespace App\Transformers;

use App\roster;
use League\Fractal\TransformerAbstract;
use App\Transformers\ProductTransformer;

class RosterTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];
    
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'products'
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(roster $roster)
    {
        return [
            'id' => $roster->id,
            'user_id' => $roster->user_id,
            'title' => $roster->title,
            'registered' => $roster->created_at->diffForHumans()
        ];
    }

    public function includeProducts(roster $roster)
    {
        $products = $roster->products()->latestFirst()->get();

        return $this->collection($products, new ProductTransformer);
    }
}
