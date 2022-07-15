<?php

namespace App\Http\Services;

use App\Models\Project;

class ProjectService
{
public function storeProject(Project $project, mixed $request){
    return $project->updateOrCreate([
        'project_name' => $request->get('project_name'),
        'project_number' => $request->get('project_name'),
        'project_desc' => $request->get('project_desc'),
        'client_id' => $request->get('client_id'),
        'project_value' => $request->get('project_value'),
        'start_date' => $request->get('start_date'),
        'end_date' => $request->get('end_date'),
        'project_status' => $request->get('project_status'),
        'meta_desc' => $request->get('meta_desc'),
        'is_published' => $request->get('is_published') == 1,
        'posted_at' => $request->get('posted_at') ?? now()->toDateTimeString(),
        'user_id' => auth()->user()->id,
    ]);
}
}