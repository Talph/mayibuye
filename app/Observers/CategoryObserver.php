<?php

namespace App\Observers;

use App\Models\ProjectCategory;

class CategoryObserver
{
    /**
     * Handle the ProjectCategory "created" event.
     *
     * @param ProjectCategory $category
     * @return void
     */
    public function creating(ProjectCategory $category): void
    {
        $slug = \Str::slug($category->category_name);
        $count = ProjectCategory::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->withTrashed()->count();
        $category->slug = $count ? "{$slug}-{$count}" : $slug;

    }

    /**
     * Handle the ProjectCategory "created" event.
     *
     * @param  \App\Models\ProjectCategory  $category
     * @return void
     */
    public function updating(ProjectCategory $category): void
    {
        $slug = \Str::slug($category->slug);
        $count = ProjectCategory::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->withTrashed()->count();
        $category->slug = $count ? "{$slug}-{$count}" : $slug;
    }
}
