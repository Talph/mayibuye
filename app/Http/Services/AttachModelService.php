<?php

namespace App\Http\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class AttachModelService
{
    /**
     * @param Model $model
     * @param mixed $attachments
     * @param string $attachmentType
     * @return bool
     */
    public function attachModel(Model $model, mixed $attachments, string $attachmentType): bool
    {
        if(!$attachments){

        return true;
        }
        switch ($attachmentType) {
            case 'categories' :
                $model->relatedCategories()->detach($model->id);
                Arr::map($attachments, function ($category) use ($model) {
                    $model->relatedCategories()->sync($category);
                });
                break;
            case 'industries' :

                Arr::map($attachments, function ($industry) use ($model) {
                    $model->relatedIndustries()->sync($industry);
                });
                break;
            case 'solutions' :
                $model->relatedSolutions()->detach($model->id);
                Arr::map($attachments, function ($solution) use ($model) {
                        $model->relatedSolutions()->sync($solution);
                });
                break;
        }

        return true;
    }
}