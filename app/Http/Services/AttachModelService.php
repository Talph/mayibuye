<?php

namespace App\Http\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class AttachModelService
{
    public function attachModel(Model $model, mixed $attachments, string $attachmentType): bool
    {
        if(!$attachments){
            return true;
        }

        switch ($attachmentType) {
            case 'categories' :
                Arr::map($attachments, function ($category) use ($model) {
                    $model->relatedCategories()->attach($category);
                });
                break;
            case 'industries' :
                Arr::map($attachments, function ($industry) use ($model) {
                    $model->relatedIndustries()->attach($industry);
                });
                break;
            case 'solutions' :
                Arr::map($attachments, function ($solution) use ($model) {
                        $model->relatedSolutions()->attach($solution);
                });
                break;
        }

        return true;
    }
}