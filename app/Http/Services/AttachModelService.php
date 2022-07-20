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
                $model->relatedCategories()->detach($model->id);
                Arr::map($attachments, function ($category) use ($model) {
                    $model->relatedCategories()->attach($category);
                });
                break;
            case 'industries' :
                $detach = $model->relatedIndustries()->detach($model->id);
                if($detach){
                    Arr::map($attachments, function ($industry) use ($model) {
                        $model->relatedIndustries()->attach($industry);
                    });
                }
                break;
            case 'solutions' :
                $model->relatedSolutions()->detach($model->id);
                Arr::map($attachments, function ($solution) use ($model) {
                        $model->relatedSolutions()->attach($solution);
                });
                break;
        }

        return true;
    }
}