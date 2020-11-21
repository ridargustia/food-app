<?php

namespace App\Transformers;

use App\article;
use League\Fractal\TransformerAbstract;


class ArticleTransformer extends TransformerAbstract
{
    public function transform(article $article)
    {
        return [
            'id' => $article->id,
            'title' => $article->title,
            'content' => $article->content,
            'category' => $article->category,
            'image' => $article->image,
            'registered' => $article->created_at->diffForHumans(),
        ];
    }
}