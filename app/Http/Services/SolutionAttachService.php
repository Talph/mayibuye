<?php

namespace App\Http\Services;

use Illuminate\Database\Eloquent\Model;

class SolutionAttachService
{
    public function attachSolution(Model $model, array $solutions): bool
    {
        foreach ($solutions as $solution)
        {
            $model->relatedSolutions()->attach($solution);
        }
        return true;
    }
}