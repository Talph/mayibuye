<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Project extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;

    protected $fillable = [
        'project_name','project_number', 'project_desc', 'client_id', 'project_value', 'start_date', 'end_date', 'meta_desc',
        'project_status', 'user_id','posted_at','slug', 'is_published',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function relatedUser(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function relatedClients(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    /**
     * @return Model|null
     */
    public function getRelatedUser(): Model|null
    {
        return $this->relatedUser()->first();
    }

    public function relatedCategories() {
        return $this->belongstoMany(ProjectCategory::class, 'project_project_categories');
    }

    public function getRelatedClients()
    {
        return $this->relatedClients()->first();
    }
}
