<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Comment extends Model
{
    use HasFactory;


    public function scopeCurrentUser($query)
    {
        return Auth::user()->hasRole('admin') ? $query : $query->where('user_id', Auth::user()->id);
    }

    public function save(array $options = [])
    {
        // If no user has been assigned, assign the current user's id as the user of the workstation
        if (!$this->user_id && Auth::user()) {
            $this->user_id = Auth::user()->getKey();
        }

        return parent::save();
    }
}
