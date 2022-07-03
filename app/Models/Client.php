<?php

namespace App\Models;

use App\Models\Solution;
use App\Models\User;
use App\Models\Industry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Client extends Model implements HasMedia
{
    use HasFactory;
    use softDeletes;
    use InteractsWithMedia;

    //
    protected $table = 'clients';
    protected $fillable = [
        'client_name', 'user_id', 'client_desc', 'value_added', 'industry_id', 'slug',
    ];

    public function relatedSolutions()
    {
        return $this->belongsToMany(Solution::class, 'solutions_clients');
    }

    public function relatedIndustries()
    {
        return $this->belongsToMany(Industry::class, 'industries_clients', 'client_id');
    }

    public function relatedUser()
    {
        return $this->belongsTo(User::class, 'user_id')->withTrashed();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logos');
        $this->addMediaCollection('project-images');
    }
}