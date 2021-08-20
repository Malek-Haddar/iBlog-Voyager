<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body', 'cover', 'image', 'owner_id'];



    public function save(array $options = [])
    {
        // If no owner has been assigned,
        // assign the current user's id as the owner of the workstation
        if (!$this->owner_id && Auth::user()) {
            $this->owner_id = Auth::user()->getKey();
        }

        return parent::save();
    }
}

/* public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->slug = str::slug($model->title);

            return true;
        });
    } */
