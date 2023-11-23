<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radar extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'user_id',
        'slug',
        'image',
        'body',
        'author',
        'country',
        'published_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
