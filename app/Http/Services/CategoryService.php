<?php

namespace App\Http\Services;

use App\Models\ProjectCategory;

class CategoryService
{
    public function storeProject(mixed $request){
        return ProjectCategory::updateOrCreate(
            [
                'id' => $request->id,
            ],[
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'created_by' => auth()->user()->id,
        ]);
    }
}