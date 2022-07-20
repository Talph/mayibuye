<?php

namespace App\Http\Services;

use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ProjectService
{

    public function storeProject(Project $project, mixed $request): Model|Builder
    {
        return $project::query()->updateOrCreate(
            [
                'id' => $project->id,
            ], [
            'project_name' => $request->get('project_name'),
            'project_number' => $request->get('project_name'),
            'project_desc' => $request->get('project_desc'),
            'client_id' => $request->get('client_id'),
            'project_value' => $request->get('project_value'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
            'project_status' => $request->get('project_status'),
            'meta_desc' => $request->get('meta_desc'),
            'is_published' => $request->get('is_published'),
            'posted_at' => $request->get('posted_at') ?? now()->toDateTimeString() ,
            'user_id' => auth()->id(),
        ]);
    }

}