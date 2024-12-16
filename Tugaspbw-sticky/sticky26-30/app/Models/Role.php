<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $fillable = ['name'];

    public function roles(): BelongsToMany
    {
       return $this->belongsToMany(User::class, 'user_role'); 
    }
}