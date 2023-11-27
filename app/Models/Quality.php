<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quality extends Model
{
    use HasFactory, Sluggable;


    protected $table = 'qualities';

    // Boleh di isi
    protected $fillable = ['title', 'user_id', 'image', 'author', 'body', 'selected_country'];

    // gaboleh di isi
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
