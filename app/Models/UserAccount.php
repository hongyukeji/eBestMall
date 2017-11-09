<?php

namespace App\Models;

use App\Models\Model;
use App\Models\User;

class UserAccount extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
