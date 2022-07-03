<?php

namespace App\Http\Services;

use Illuminate\Database\Eloquent\Model;

class CategoryAttachService
{
    public function attachCategory(Model $model, mixed $categories): bool
    {
        if($categories)
        {
            Arr::map($$categories, function($category) use ($model){
                $model->categories()->attach($category);
            });
        }
        return true;
    }
}