<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'preview_image',
        'download_file'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'post_categories');
    }
}
