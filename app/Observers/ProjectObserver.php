<?php

namespace App\Observers;

use App\Models\Project;

class ProjectObserver
{
    /**
     * Handle the Project "creating" event.
     *
     * @param Project $project
     * @return void
     */
    public function creating(Project $project): void
    {
            $slug = \Str::slug($project->project_name);
            $count = Project::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->withTrashed()->count();
            if($project->id != $count->id){
                $project->slug = $count ? "{$slug}-{$count}" : $slug;
            }

    }

    /**
     * Handle the Project "updating" event.
     *
     * @param Project $project
     * @return void
     */
    public function updating(Project $project): void
    {
                $slug = \Str::slug($project->slug);
                $count = Project::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->withTrashed()->count();
                if($project->id != $count->id){
                    $project->slug = $count ? "{$slug}-{$count}" : $slug;
                }

    }
    /**
     * Handle the Project "created" event.
     *
     * @param Project $project
     * @return void
     */
    public function created(Project $project): void
    {

    }

    /**
     * Handle the Project "updated" event.
     *
     * @param Project $project
     * @return void
     */
    public function updated(Project $project): void
    {
        //
    }

    /**
     * Handle the Project "deleted" event.
     *
     * @param Project $project
     * @return void
     */
    public function deleted(Project $project): void
    {
        //
    }

    /**
     * Handle the Project "restored" event.
     *
     * @param Project $project
     * @return void
     */
    public function restored(Project $project): void
    {
        //
    }

    /**
     * Handle the Project "force deleted" event.
     *
     * @param Project $project
     * @return void
     */
    public function forceDeleted(Project $project): void
    {
        //
    }
}
