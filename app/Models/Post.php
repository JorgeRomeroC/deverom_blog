<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
     use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'slug', 'content', 'excerpt',
        'status', 'main_image', 'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'post_categories');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function media(){
        return $this->hasMany(Media::class);
    }

    protected static function boot(){
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });

        static::updating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }
}
