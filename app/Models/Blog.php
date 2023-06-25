<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_title',
        'slug',
        'blog_banner_image',
        'blog_description',
        'is_active',
        'user_id'
    ];

    public function users() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
