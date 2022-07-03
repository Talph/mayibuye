<?php

namespace App\Http\Services;

use Illuminate\Database\Eloquent\Model;

class IndustryAttachService
{
    public function attachCategory(Model $model, array $industries): bool
    {
            foreach ($industries as $industry)
            {
                $model->relatedIndustries()->attach($industry);
            }

        return true;
    }
}