<?php

namespace App\Http\Services;

use App\Models\Project;

class ProjectService
{
public function storeProject(mixed $request){
    return Project::updateOrCreate(
        [
            'id' => $request->id,
        ],[
        'project_name' => $request->project_name,
        'project_number' => $request->project_name,
        'project_desc' => $request->project_desc,
        'client_id' => $request->client_id,
        'project_value' => $request->project_value,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'project_status' => $request->project_status,
        'meta_desc' => $request->meta_desc,
        'is_published' => $request->is_published,
        'posted_at' => $request->posted_at ?? now()->toDateTimeString(),
        'user_id' => auth()->user()->id,
    ]);
}
}