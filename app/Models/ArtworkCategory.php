<?php

namespace App\Models;

use App\Models\Artwork;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtworkCategory extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function artwork()
    {
        return $this->hasMany(Artwork::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
