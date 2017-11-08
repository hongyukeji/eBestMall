<?php

namespace App\Models;

use App\Models\Model;

class UserProfile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
