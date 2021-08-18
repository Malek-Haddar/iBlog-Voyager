<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body', 'cover', 'image', 'user_id'];


    public static function boot()
    {
        parent::boot();

        /* static::saving(function ($model) {
            $model->slug = str_slug($model->title);

            return true;
        });*/
    }
}
